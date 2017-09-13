<?php

	$phone = $_POST["phoneNumber"];
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];
	$password = crypt($_POST["password"]);
	$dateOfBirth = $_POST['DoB'];
	$creditCard = $_POST["creditCard"];
	$expirationDate = $_POST["expiration"];
	$postInfo = $_POST;
	
	$postEntry = $phone.",".$firstName.",".$lastName.",".$email.",".$password.",".$dateOfBirth.",".$creditCard.",".$expirationDate;
	$postData = $postEntry."\n";
	
	$fileName = 'data/customers.csv';
	
	$handler = fopen($fileName, "a+");
	fwrite($handler, $postData);
	fclose($handler);
	
	foreach ($postInfo as $info) {
		if(empty($info)) {
			die("Must enter SOMETHING in fields<br><br><a href='register.php'>Go Back</a> to the form!");
		}
	}
	echo "Thanks for registering " .$firstName.". Go to the <a href='login.php'>login page</a>.";
?>