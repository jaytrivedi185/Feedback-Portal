<?php include('principalfinal.php')?>
<!doctype html>
<title>UCOE</title>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="logo.jpg">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Principal login</h2>
			<form method="post" action="principal.php">
				<?php include('errors.php'); ?>
				<p>Email</p>
				<input type="text" name="username" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••">
				<input type="submit" name="login_user" value="Sign In">
				
			</form>
		</div>
	</body>
</html>
