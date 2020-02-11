<?php

//this algorithm for sorting the numbers of an array from smallest to the biggest value.
//By Othmane Marzouq
//otmaninfo@gmail.com

//example of data numbers 
$numbers = array(512, 160, 360, 210, 480, 137, 654);


$count = count($numbers);
$max = max($numbers);
$result = array();

for ($x = 0; $x < $count; $x++){
	$min = min($numbers);
	$result[$x] =  $min;
	$key = array_search($min, $numbers);
	unset($numbers[$key]);
	echo $result[$x] . "<br>";
}


?>
