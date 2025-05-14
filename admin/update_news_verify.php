<?php
session_start();
include_once "conn.php";
$news_id=$_POST["news_id"];
$news_title=$_POST["news_title"];
$news_detail=$_POST["news_detail"];

if (isset($_FILES["news_img"]) && $_FILES["news_img"]["error"] !== UPLOAD_ERR_NO_FILE) {
    echo "มีไฟล์ถูกอัปโหลด";
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