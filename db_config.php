<?php
$servername = "localhost:8111";
$username = "root";
$password = "";
$dbname="piperke";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>