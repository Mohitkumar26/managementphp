<?php
session_start();

include 'connection.php';
$username = $_POST["username"];
$password =  $_POST["password"];
  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
   $result = $conn->query($sql);
    if ($result->num_rows > 0) {
   $_SESSION["login"] = "logged";
    header('Location: http://localhost/Newfolder');
    
} 

?>