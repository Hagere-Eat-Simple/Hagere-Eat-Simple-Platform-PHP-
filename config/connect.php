<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="hes1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo '<script>alert("Connection Failed")</script>';
  header("Location: /");
    exit;

}
?>