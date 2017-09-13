<html>
	<head>
		<title>Login to my site!</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	
	<body style="margin: 2em;">
		<div>
			<b>Login</b> below to gain access to ALL my personal info
			<br>
			<br>
		</div>
		<div>
			<form action="handle_login.php" method="POST">
				Email Address: <input type="text" name="email" /> <br>
				Password: <input type="password" name="password" /> <br>
				<input type="submit" value="Login"/><br>
			</form>
		</div>
		<a href="register.php">Register</a> first for an account.
	</body>
</html>