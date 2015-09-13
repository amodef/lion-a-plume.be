<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

	
	// reCAPTCHA validation
	require_once('inc/recaptcha/autoload.php');

	$siteKey= '6LfXyQwTAAAAADxebUrU0RaLiaGg8B6NY5n3s0RY';
	$secret = '6LfXyQwTAAAAANcrHgV7PmzAJJMlNgHjrsNcGU-s';
	$recaptcha = new \ReCaptcha\ReCaptcha($secret);
	
	$gRecaptchaResponse = trim($_POST['g-recaptcha-response']);
	$remoteIp = $_SERVER['REMOTE_ADDR'];

	$resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
	
	if ($resp->isSuccess()) {

		$name = trim($_POST["full_name"]);
		$email = trim($_POST["email"]);
		$tel = trim($_POST["tel"]);
		$message = trim($_POST["message"]);

		if($name == "" or $email == "" or $message == ""){
			$error_message = _('You must specify your email address, your name and your message.');
		}

		if(!isset($error_message)){
			foreach ($_POST as $value) {
				if (stripos($value, 'Content-Type:') !== FALSE) {
					$error_message = _('There was a problem with the information you entered.');
				}
			}
		}

		require_once("inc/phpmailer/class.phpmailer.php");

		$mail = new PHPMailer();

		if (!isset($error_message) && !$mail->ValidateAddress($email)){
			$error_message = _('You must specify a valid email address.');
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
				
				header("Location: /$locale/thanks/#conta");
				exit;
			} else {
			  $error_message = sprintf(_('There was a problem sending the email: %s'), $mail->ErrorInfo);
			}
		}

	// Failing reCAPTCHA
	} else {
    	$error_message = _('Are you human?');
	}
}

?>