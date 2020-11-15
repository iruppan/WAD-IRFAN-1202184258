<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wad_modul3_irfan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>