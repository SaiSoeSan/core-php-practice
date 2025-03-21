<?php
$a = 1;
while ($a <= 50) {
    if($a % 15 == 0){
        echo "FizzBuzz<br>";
    } else if($a % 3 == 0){
        echo "Fizz<br>";
    } else if($a % 5 == 0){
        echo "Buzz<br>";
    } else {
        echo $a . "<br>";
    }
    $a++;
}