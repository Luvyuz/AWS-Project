<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/formStyle.css">
	<link rel="stylesheet" href="/css/loginRegisterStyle.css">
	<title>AWS Project</title>
</head>
<body>
	<?php
	session_start();

	if(isset($_SESSION['logged']) AND $_SESSION['logged'] === true){
		header("location: user/");
		return;
	}
	?>
	<div class="container">
		<div class="form-container">
			<h3>Login</h3>
			<form name="input" id="form" action="php/login.php" method="post">
				<div class="input-container">
					<input type="email" maxlength="50" placeholder="Email" name="email" required>
					<input type="password" minlength="8" placeholder="Password" name="password" required>
				</div>
				<div class="bottom-container">
					<a href="index.html">I don't have an account.</a>
					<input type="submit" value="Enter">
				</div>
			</form>
		</div>
	</div>
</body>
</html>