<?php

function greet(string $name, string $greeting = "Hello", bool $warm = false){
    echo "$greeting, $name";
    if ($warm) {
        echo "You are awesome";
    }
}
// in php < 8.0, you can't skip the second parameter assuming default value and set the third parameter to true
greet("John", true);
echo "<br>";
// in php 8.0, you can skip the second parameter and set the third parameter to true
greet(name:"Sai", warm:true);