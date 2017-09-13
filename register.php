<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<h1>Register Here!</h1>
	</head>
	
	<body>
		<div>
			<form action="handle_register.php" method="post">
				First Name:<input type="text" name="firstName" /> <br>
				Last Name: <input type="text" name="lastName" /> <br>
				Password: <input type="password" name="password" /> <br>
				Phone Number: <input type="text" name="phoneNumber" /> <br>
				Email: <input type="text" name="email" /> <br>
				Date of Birth: <input type="text" name="DoB" /> <br>
				Credit Card: <input type="text" name="creditCard" /> <br>
				Credit Card Expiration Date: <input type="text" name="expiration" /> <br>
				<input type="submit" value="Save"/> <br>
			</form>
		</div>
	</body>
	
	<script
	src="http://code.jquery.com/jquery-3.2.1.js"
	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	crossorigin="anonymous"></script>
	<script src="main.js"></script>
</html>