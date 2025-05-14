<?php
session_start();
include_once "conn.php";
$id = $_POST["id"] ?? "";
$id_student = $_POST["id_student"] ?? "";
$std_name = $_POST["std_name"] ?? "";
$std_level = $_POST["std_level"] ?? "";
$std_phone = $_POST["std_phone"] ?? "";
$std_address = $_POST["std_address"] ?? "";
$std_district = $_POST["std_district"] ?? "";
$std_county = $_POST["std_county"] ?? "";
$std_province = $_POST["std_province"] ?? "";

$sql = "UPDATE student SET 
    id_student='$id_student',
    std_name='$std_name',
    std_level='$std_level',
    std_phone='$std_phone',
    std_address='$std_address',
    std_district='$std_district',
    std_county='$std_county',
    std_province='$std_province'
    WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $_SESSION["alert_update"]="success";
    header('Location: ./?id=update_student&s_id='.$id.'');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>