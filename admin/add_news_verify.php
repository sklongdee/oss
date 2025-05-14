<?php
include_once "conn.php";
$news_title = $_POST["news_title"]??"";
$news_detail = $_POST["news_detail"]??"";

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["news_img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["news_img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["news_img"]["size"] > 50000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["news_img"]["tmp_name"], $target_file)) {
    $news_img=htmlspecialchars( basename( $_FILES["news_img"]["name"]));
    $sql = "INSERT INTO news (news_title, news_detail, news_img)
    VALUES ('$news_title', '$news_detail', '$news_img')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ./?id=news');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>