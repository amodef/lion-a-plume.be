<?php

include(ROOT_PATH . "env.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

	
	// reCaptcha libraries
	require_once(ROOT_PATH . "inc/recaptcha/autoload.php");

	// create new reCaptcha object
	$siteKey= $env['recaptcha_site_key'];
	$secret = $env['recaptcha_private_key'];
	$recaptcha = new \ReCaptcha\ReCaptcha($secret);
	
	// parse form response to variables
	$name = trim($_POST["full_name"]);
	$email = trim($_POST["email"]);
	$tel = trim($_POST["tel"]);
	$message = trim($_POST["message"]);
	
	// verify reCaptcha
	$gRecaptchaResponse = trim($_POST['g-recaptcha-response']);
	
	$remoteIp = $_SERVER['REMOTE_ADDR'];
	$resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
	
	if (!$resp->isSuccess()) {
		$error_message = _('Are you human?');
	}

	if(!isset($error_message) and $name == "" || $email == "" || $message == "") {
		$error_message = _('You must specify your email address, your name and your message.');
	}

	if(!isset($error_message)) {
		foreach ($_POST as $value) {
			if (stripos($value, 'Content-Type:') !== FALSE) {
				$error_message = _('There was a problem with the information you entered.');
			}
		}
	}

	require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");

	$mail = new PHPMailer();

	if (!isset($error_message) && !$mail->ValidateAddress($email)) {
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
		$mail->SMTPSecure = 'ssl';
		$mail->Host = $env['mail_host'];
		$mail->Port = $env['mail_port'];
		$mail->Username = $env['mail_username'];
		$mail->Password = $env['mail_password'];

		$mail->SetFrom($email,$name);
		$address = "info@lion-a-plume.be";
		$mail->AddAddress($address, "Brasserie du Lion à Plume");
		$mail->Subject = "Message de " . $name . " en provenance du site web";
		$mail->CharSet = 'utf-8';
		$mail->MsgHTML($body);

		if($mail->Send()) {
			
			header("Location: /$locale/thanks/#conta");
			exit;
		} else {
		  $error_message = sprintf(_('There was a problem sending the email: %s'), $mail->ErrorInfo);
		}
	}
}

?>