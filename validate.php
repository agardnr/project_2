<?php

$incoming_value = $_POST;

foreach ($incoming_value as $value) {

$value = trim($value);

if($value == '') {
	//error= put in a number
		$error = 'Please enter a number.';
		return;
	}

if(!ctype_alnum($value)) {
	$error = "The value must be a number.";
	return;
}

if($value < '1') {
	$error= "Value must be 1 or greater.";
	return;
}

if($value > '20') {
	$error= "Value must not exceed 20 characters.";
	return;
}




}

 ?>
