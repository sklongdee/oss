<?php
include_once "conn.php";
$id_student = $_POST["id_student"] ?? "";
$std_name = $_POST["std_name"] ?? "";
$std_level = $_POST["std_level"] ?? "";
$std_phone = $_POST["std_phone"] ?? "";
$std_address = $_POST["std_address"] ?? "";
$std_district = $_POST["std_district"] ?? "";
$std_county = $_POST["std_county"] ?? "";
$std_province = $_POST["std_province"] ?? "";

$sql = "INSERT INTO student (id_student, std_name, std_level, std_phone,
std_address,std_district,std_county, std_province)
VALUES ('$id_student','$std_name', '$std_level','$std_phone','$std_address',
'$std_district','$std_county','$std_province')";
if ($conn->query($sql) === TRUE) {
    header('Location: ./?id=student&level=all');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>