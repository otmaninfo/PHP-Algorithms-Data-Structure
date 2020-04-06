<?php
//The famous math game Fizz buzz to learn more about it checkout Wiki: https://en.wikipedia.org/wiki/Fizz_buzz

// this function can check numbers form 0 to 500 By Othmane Marzouq 



for ($x = 0; $x <= 500; $x++){
   if ($x % 3 == 0 AND $x % 5 == 0) {
       echo "<b>  Fizz Buzz </b> <br>";
   }
   elseif($x % 3 == 0){
    echo " <b> Fizz </b> <br>";
   }
   elseif($x % 5 == 0){
    echo "<b> Buzz </b> <br>";
   }
   else{
       echo $x . "<br>";
   } 
}
?>