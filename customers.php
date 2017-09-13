<?php
session_start();
	
function is_logged_in(){
	return isset($_SESSION['is_user']);
}

if(is_logged_in()){
	
	$fileName = "data/customers.csv";
	$lines = file($fileName);
	
	foreach($lines as $row) {
		$userParts = explode(",", $row);
		echo "<ul>";
		echo "<li>".$userParts[0].", ".$userParts[1].", ".$userParts[2].", ".$userParts[3].", ".$userParts[5].", "."</li>";
		echo "</ul>";
	}
	
} else {
	
	echo "You need to <a href='login.php' /> in to see this.";
	
}

?>