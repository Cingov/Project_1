<?php 

$name = $body = $skill = "";
$error = "";

//Check for empty fields
If ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($name) || empty($body) || empty($skill) {
	echo("Field is empty")
} 	else {
	$name = test_input($_POST["qName"]);
	$body = tes_input($_POST["qBody"]);
	$skill = test_input($_POST["qSkill"]);
}
//check at least 3 char
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$error = "Email needs @";
	echo($error)
} 
//check less than 500 char
if (preg_match(strlen($pass) < 8) {
	$error = "Password must exceed 8 characters";
	echo($error)
}
//display skills in array
