<?php ob_start();

session_start();

$host = "localhost";
$user = "root";
$pass = "alshowoq";
$name = "futureweb";
$port = 3306;

// Create connection
$conn = new mysqli($host, $user, $pass, $name, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_GET) && $_GET['logout'] == true){
  unset($_SESSION["username"]);
  unset($_SESSION["email"]);

  header('Refresh: 0; URL = regform.php');
}