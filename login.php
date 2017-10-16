<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php
	session_start();
if (isset(
$_SESSION["login"])){

echo 'already logged in want to logout <a href="http://localhost/Newfolder/logout.php">logout</a>
>';

}
else {
	?>
	<form action="login_auth.php" method="post">
		<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-3">
            <div class="form-login">
            <h4>Login</h4>
            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" name="username" />
            </br>
            <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="password" name="password" />
            </br>
            <div class="wrapper">
            <input type="submit" value="LOGIN">
            </div>
            </div>
        
        </div>
    </div>
</div>
</form>
<?php } ?>
</body>
</html>