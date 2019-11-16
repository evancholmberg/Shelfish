<?php

$servername = "127.0.0.1";
$username = "root";
$password = "password";
$database = "Shelfish_development";
$conn = new mysqli($servername, $username, $password, $database);

function isUser($card_no) {
	global $conn;
	//does user exist
	$sql = "SELECT card_no from borrowers where $card_no = card_no;";
	try {
		$result = $conn->query($sql);
	}
	catch (exception $e) {
    //code to handle the exception
	}
	if($result->num_rows==1){
		return True;
	}
	else{
		return False;
	}
}
function isAdmin($card_no){
	global $conn;
	//what role does user have
	$sql = "SELECT role from borrowers where $card_no = card_no;";
	try {
		$result = $conn->query($sql);
	}
	catch (exception $e) {
    //code to handle the exception
	}
	if($result=="admin"){
		return True;
	}
	else{
		return False;
	}
}
?>
