<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lib";


$conn = new mysqli($servername, $username, $password, $dbname);

// Verification de Cnx
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


