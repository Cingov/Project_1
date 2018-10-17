<?php 

$email = $pass = "";
$error = "";

//Check for empty fields
If ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($email) || empty($pass) {
	echo("Field is empty")
} 	else {
	$email = test_input($_POST["email"]);
	$pass = tes_input($_POST["pasword"]);
}
//check for @ in email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Email needs @";
		echo($error)
} 
//check if password less than 8 char
	if (preg_match(strlen($pass) < 8) {
		$error = "Password must exceed 8 characters";
		echo($error)
}
