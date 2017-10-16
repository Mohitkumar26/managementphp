<?php
session_start();
if (isset(
$_SESSION["login"])){



}
else{
	 header('Location: http://localhost/Newfolder/login.php');
}
include 'connection.php';
$id= $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$sql = "UPDATE student set name = '$name', email = '$email', message = '$message' WHERE id='$id'";
 if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

 header('Location: http://localhost/Newfolder/');
?>