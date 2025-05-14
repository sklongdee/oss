<?php
$id = $_GET["id"] ?? "";
$news_img = $_GET["news_img"] ?? "";

include_once "conn.php";

// ลบข้อมูลในฐานข้อมูล
$sql = "DELETE FROM news WHERE news_id=$id";

if ($conn->query($sql) === TRUE) {
    // ตรวจสอบว่ามีชื่อไฟล์รูปภาพ และไฟล์นั้นมีอยู่จริงหรือไม่
    if (!empty($news_img)) {
        $image_path = "../img/" . $news_img; // ระบุ path ไปยังโฟลเดอร์ที่เก็บรูป
        if (file_exists($image_path)) {
            unlink($image_path); // ลบไฟล์รูปภาพ
        }
    }
    // กลับไปยังหน้าเดิมหลังจากลบเสร็จ
    header('Location: ./?id=news');
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
