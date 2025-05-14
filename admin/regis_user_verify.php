<?php
include_once "conn.php";
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];
$_name = $_POST["_name"];
// เข้ารหัสผ่าน
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, role, _name) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $hashed_password, $role, $_name);

    if ($stmt->execute()) {
        echo "สมัครสมาชิกสำเร็จ!";
    } else {
        echo "เกิดข้อผิดพลาด: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
?>