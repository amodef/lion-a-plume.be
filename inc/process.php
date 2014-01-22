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

	require_once("inc/phpmailer/class.phpmailer.php");

	$mail = new PHPMailer();

	if (!isset($error_message) && !$mail->ValidateAddress($email)){
		$error_message ="You must specify a valid email address.";
	}

	if (!isset($error_message)) {
		$body = "
			<!doctype html>
			<html>
			<head>
				<meta charset=\"utf-8\">
			</head>
			<body>";
		$body .= "<b>Name :</b> " . $name . "<br>";
		$body .= "<b>Email :</b> " . $email . "<br>";
		if ($_POST["tel"] != ""){
			$body .= "<b>Tel. : </b>" . $tel . "<br>";
		}
		$body .= "<p style=\"padding-top: 15px;\">" . $message . "</p></body></html>";

		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "ssl0.ovh.net";
		$mail->Port = 465;
		$mail->Username = "info@lion-a-plume.be";
		$mail->Password = "M3rc@t0r";

		$mail->SetFrom($email,$name);
		$address = "info@lion-a-plume.be";
		$mail->AddAddress($address, "Brasserie du Lion à Plume");
		$mail->Subject    = "Message de " . $name . " en provenance du site web";
		$mail->CharSet = 'utf-8';
		$mail->MsgHTML($body);

		if($mail->Send()) {
			header("Location: index.php?status=thanks#conta");
			exit;
		} else {
		  $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
		}
	}
}

?>