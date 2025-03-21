<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$colors = ['r', 'w','w','b','r','w','b','r','w','b','r','w','b','r','w','b','r','w','b'];

echo"Before sorting: <br>";
foreach($colors as $color){
    echo $color . " ";
}

echo "<br>";
sort_color($colors);

echo"After sorting: <br> ";

foreach($colors as $color){
    echo $color . " ";
}

function sort_color(&$colors){
    $low = 0;
    $mid = 0;
    $high = count($colors) - 1;

    while($mid <= $high){
        if($colors[$mid] === 'r'){
            //swap mid with low
            $temp = $colors[$low];
            $colors[$low] = $colors[$mid];
            $colors[$mid] = $temp;
            $low++;
            $mid++;
        }else if($colors[$mid] === 'w'){
            $mid++;
        }else{
            //swap mid with high
            $temp = $colors[$mid];
            $colors[$mid] = $colors[$high];
            $colors[$high] = $temp;
            $high--;
        }
    }
}
?>