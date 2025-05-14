<?php
$id = $_GET["id"]??"";
include_once "conn.php";
$sql = "DELETE FROM student WHERE id=$id";

if ($conn->query($sql) === TRUE) {
header('Location: ./?id=student&level=all');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>