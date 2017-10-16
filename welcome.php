<?php
session_start();
if (isset($_POST["session"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$myarr = array("name"=>$name,"email"=>$email,"message"=>$message);
	$myjson = json_encode($myarr);
	echo $myjson;

}
else
{
	echo "session not found";
	
	header('Location: http://localhost/Newfolder/form.php');
}
?>