 <!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

</head>
<body>
	<?php
	include 'header.php';
	include 'connection.php';
	session_start();
if (isset(
$_SESSION["login"])){



}
else{
	 header('Location: http://localhost/login.php');
}
	$id=$_GET["id"];
if (isset($id)) {
  $sql = "SELECT * FROM student WHERE id='$id'";
   $result = $conn->query($sql);
    if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();
} 

?>
	<form id="form1" method = "post" action="update.php">
		<input type="hidden" name="id" value="<?php echo $row['id']?>" >
		Name <br/><input type="text" name="name" id="name" value="<?php echo $row['name']?>">
		email <br/><input type="text" name="email" id="email" value="<?php echo $row['email']?>">
		message  <input type="text" name="message" id="message" value="<?php echo $row['message']?>" >
		<input type="submit">
	</form>
	<?php
	}
	else{
		echo "error";
	}
?>
	

</body>
</html> 