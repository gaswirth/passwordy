<?php

// Start checking for SESSION varibles
session_start();

// Set up a new empty string (initialize it)
$errorMsg = "";


if ( $_SESSION["login"] === true ) {
	
}

$validUser = $_SESSION["login"] === true;

if( isset($_POST["sub"] ) ) {
	
}
if( $validUser ) {
	header("Location: /login-success.php");
	die();
} else {
	header("Location: /login-failure.php");
	die();
}
?>