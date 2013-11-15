<?php

$name = "";

if(isset($_POST)){
	$name .= $_POST["full_name"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$message = $_POST["message"];
}

?>