<?php

session_start();

$isLoggedIn = false;
$fileName = "data/customers.csv";
$lines = file($fileName);


foreach($lines as $row) {
	$userParts = explode(",", $row);
	if($userParts[3] == $_POST['email'] && password_verify($_POST['password'] , $userParts[4])) {
		$_SESSION['email'] = $userParts[3];
		$_SESSION['firstName'] = $userParts[1];
		$_SESSION['is_user'] = 1;
		$isLoggedIn = true;
		break;
	}
	else {
		$_SESSION['email'] = $userParts[3];
		$_SESSION['firstName'] = $userParts[1];
		$_SESSION['is_user'] = 1;
		$isLoggedIn = false;
	}
}

if($isLoggedIn){
	echo "you are logged in!";
	echo 'Check out the list <a href="customers.php">here</a>';
} else {
	echo "Bad username or password </br>";
	echo '<a href="login.php">login page</a>';
}



?>