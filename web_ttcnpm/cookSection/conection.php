<?php
$servername = "localhost";
$username = "nguyenvi";
$password = "123456";
$dbname = "nguyenvi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>