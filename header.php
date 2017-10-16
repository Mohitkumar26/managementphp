<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="menu.php">Data Store</a>
			</div>
			<ul class="nav navbar-nav">
				<?php
				if (!isset($_SESSION["FORM"])){
				?>
					<li><a href="form.php">save new data</a></li>
				<?php
			}
			else{
				unset($_SESSION['FORM']);
				}
				?>
				<li ><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
</body>
</html>