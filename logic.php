<?php
require 'list.php';

$words = '';
$words = $_GET['words'];

$numbers = $_GET['numbers'];
$symbols = $_GET['symbols'];

//if checkbox is checked on for numbers then add to passwords
if ($numbers == 'on') {
	$numbersliston = $numberslist;
} 

//if checkbox is checked on for symbols then add to passwords
if ($symbols == 'on') {
	$symbolsliston = $symbolslist;
}
