<?php
session_start();
include_once "admin/conn.php";
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // ตรวจสอบรหัสผ่าน
        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["role"] = $row["role"];
            $_SESSION["_name"] = $row["_name"];
            header("Location: admin"); // หน้าเมนูหลัง login
            exit();
        } else {
            echo "รหัสผ่านไม่ถูกต้อง!";
        }
    } else {
        echo "ไม่พบผู้ใช้งานนี้!";
    }

    $stmt->close();
    $conn->close();
?>