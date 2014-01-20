<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = trim($_POST["full_name"]);
	$email = trim($_POST["email"]);
	$tel = trim($_POST["tel"]);
	$message = trim($_POST["message"]);

	if($name == "" or $email == "" or $message == ""){
		$error_message = "You must specify your email address, your name and your message.";
	}

	if(!isset($error_message)){
		foreach ($_POST as $value) {
			if (stripos($value, 'Content-Type:') !== FALSE) {
				$error_message = "There was a problem with the information you entered.";
			}
		}
	}

	if(!isset($error_message) && $_POST["address"] != ""){
			$error_message = "Die Robot, die!";
	}

	header("Location: index.php?status=thanks#conta");
	exit;
}

?>