<?php

// This function find the most frequent number in an array By Othmane Marzouq


$array = array(12,11,5,5,6,7,5,6,4,2);

function findMostDuplicat($array){

$data = array_count_values($array);

$find = max($data);

$result = array_search($find, $data);

return $result;	
	
}


?>
