<?php
require 'list.php';

$words = '';
$words = $_GET['words'];

$numbers = $_GET['numbers'];
$symbols = $_GET['symbols'];

if ($numbers == 'on') {
	$numbersliston = $numberslist[rand(0,9)];
} 

if ($symbols == 'on') {
	$symbolsliston = $symbolslist[rand(0,4)];
}

for ($i=0; $i < $words; $i++) {
	echo ' '.$wordslist[rand(0, 9)].' ';
}

print_r(array_merge($wordslist,$numberslist));