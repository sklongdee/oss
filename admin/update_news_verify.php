<?php
session_start();
include_once "conn.php";
$news_id=$_POST["news_id"];
$news_title=$_POST["news_title"];
$news_detail=$_POST["news_detail"];
$old_news_img=$_POST["old_news_img"];

if (isset($_FILES["news_img"]) && $_FILES["news_img"]["error"] !== UPLOAD_ERR_NO_FILE) {
    
$target_dir = "../img/";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($_FILES["news_img"]["name"], PATHINFO_EXTENSION));

// สร้างชื่อไฟล์ใหม่ เช่น news_uniqid_timestamp.jpg
$new_filename = "news_" . uniqid() . "_" . time() . "." . $imageFileType;
$target_file = $target_dir . $new_filename;

// ตรวจสอบว่าเป็นรูปภาพจริงหรือไม่
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["news_img"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// ตรวจสอบขนาดไฟล์
if ($_FILES["news_img"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// ตรวจสอบชนิดของไฟล์
if (
    $imageFileType != "jpg" &&
    $imageFileType != "png" &&
    $imageFileType != "jpeg" &&
    $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// หากไม่มีปัญหา เริ่มอัปโหลด
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["news_img"]["tmp_name"], $target_file)) {
        $news_img = htmlspecialchars($new_filename); // ใช้ชื่อใหม่
    // 🔥 ลบรูปภาพเก่า
    $old_file_path = $target_dir . $old_news_img;
    if (file_exists($old_file_path)) {
        unlink($old_file_path); // ลบไฟล์
    }
        // สมมติว่ามี $news_title, $news_detail และ $news_id มาจาก POST
        $sql = "UPDATE news SET 
            news_title='$news_title',
            news_detail='$news_detail',
            news_img='$news_img'
            WHERE news_id=$news_id";

        if ($conn->query($sql) === TRUE) {
            $_SESSION["alert_update"] = "success";
            header('Location: ./?id=update_news&news_id=' . $news_id);
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




} else {
    $sql = "UPDATE news SET 
        news_title='$news_title',
        news_detail='$news_detail' 
        WHERE news_id=$news_id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["alert_update"]="success";
        header('Location: ./?id=update_news&news_id='.$news_id.'');
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}

?>