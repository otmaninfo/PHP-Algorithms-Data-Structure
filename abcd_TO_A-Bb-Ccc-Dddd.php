<?php

// This function duplicate the character by the number of his position in the string

$text = "abcd"; // Example Output : A-Bb-Ccc-Dddd

function MagicDuplicate($text) {
 
  $array = str_split($text);
  $count =  count($array);

  for ($x = 0; $x < $count; $x++){
        for ($n = 0; $n <= $x; $n++){
            if ($n == 0){
                echo strtoupper($array[$x]);
                
            }
            else{

                echo strtolower($array[$x]);
            }
           
       } 
    if ($x + 1 != $count){
        echo "-";
    } 
    
  }

}

?>
