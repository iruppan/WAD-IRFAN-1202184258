<?php
include "koneksi.php";
// sql to delete a record
$ID=$_GET['id'];
$sql = "DELETE FROM event WHERE id='$ID'";

if ($conn->query($sql) === TRUE) {
  header("location:index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>