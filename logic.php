<?php
require 'list.php';

$words = '';
$words = $_GET['words'];

for ($i=0; $i < $words; $i++) { 
	$runword = $wordslist[rand(0, 9)];
}
