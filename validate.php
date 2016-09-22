<?php
//require 'password.php';
/*--
$incoming_value = $_POST;

foreach ($incoming_value as $value) {

$value = trim($value);
--*/
if(!ctype_digit($_POST['word_count'])) {
	$error = "The value must be a number.";
	$word_count = 0;
	$number_count = 0;
	return;
	}

/*
if($word_count || $number_count == '') {
		$error = 'Please enter a number.';
		return;
	}


if(!ctype_digit($word_count || $number_count)) {
	$error = "The value must be a number.";
	return;
	}

if($value < 1) {
	$error= "Value must be 1 or greater.";
		return;
}


if($value > 20) {
	$error= "Value must not exceed 20 characters.";
	return;
	}
//}
*/
 ?>
