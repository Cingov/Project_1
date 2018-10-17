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
if (!preg_match(strlen($name) > 3) {
	$error = "Name needs to be longer than 3 char";
	echo($error)
} 
//check less than 500 char
if (preg_match(strlen($body) > 500) {
	$error = "Need more info in body";
	echo($error)
}
//display skills in array
$skill = $_POST["qskill"];
$skill = explode (',' , $skill);
    
