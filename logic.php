<?php
require 'list.php';

$words = '';
$words = $_GET['words'];

$numbers = $_GET['numbers'];
$symbols = $_GET['symbols'];

if ($numbers == 'on') {
	$numbersliston = $numberslist;
} 

if ($symbols == 'on') {
	$symbolsliston = $symbolslist;
}
