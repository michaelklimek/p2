<?php
require 'list.php';


$one = 1;
$words = '';
$words = $_GET['words'];
$total = $words - $one;
$characters = bcpow(10, $total);