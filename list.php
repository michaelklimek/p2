<?php

$words = Array(
0 => 'tree',
1 => 'goat',
2 => 'cow',
3 => 'chicken',
4 => 'horse',
);

$symbols = Array(
0 => '&amp;',
1 => '&#63;',
2 => '&#35;',
3 => '&#36;',
4 => '&#33;',
);

print_r($symbols);

$number = "";
for ($i=1; $i <=9; $i++) { 
 	$numbers = Array($i => $i,);
 }

 print_r($numbers);

 foreach($words as $key => $value) {
 	echo "<br>".$key." means ".$value;
 }