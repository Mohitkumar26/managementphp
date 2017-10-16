<?php

 session_start();
  $_SESSION["FORM"] = "logged";
 include 'header.php';
 ?> 
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
// Start the session


if (isset(
$_SESSION["login"])){



}
else{
	 header('Location: http://localhost/Newfolder/login.php');
}
$_SESSION["favcolor"] = "green";
?>
	<form id="form1" method = "post" action="welcome.php">
		<input type="hidden" value="<?php echo $_SESSION["favcolor"] ?>" name="session"/>
		Name <br/><input type="text" name="name" id="name">
		email <br/><input type="text" name="email" id="email">
		message  <input type="text" name="message" id="message">
		<input type="submit">
	</form>
	<p id="show"></p>

<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("#form1").submit(function(e){

			e.preventDefault();

			var name=$('#name').val();
			var email=$('#email').val();
			var message=$('#message').val();
				var data = {name : name , email : email ,message : message};


				$.ajax({
					method:"post",
					url: "welcome.php",
					data:data
				})

				.done(function(msg){
					console.log(msg);
					 // var msg = JSON.parse(msg);
					 // $('#show').append(msg['name']+'<br>'+msg['email']+'<br>'+msg['message']);
				});
		});
	});
</script> -->
</body>
</html>