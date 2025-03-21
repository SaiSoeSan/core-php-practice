<?php

$array = [10, 20, 30, 40, 50, 60];

echo (secondLargest($array));

function secondLargest($array)
{
    $largest = $array[0];
    $secondLargest = $array[1];
    if ($array[0] < $array[1]) {
        $largest = $array[1];
        $secondLargest = $array[0];
    }

    for ($i = 2; $i <= count($array) - 1; $i++) {
        if ($array[$i] < $secondLargest) {
            continue;
        }

        if ($array[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $array[$i];
        } else if ($array[$i] > $secondLargest) {
            $secondLargest = $array[$i];
        }
    }
    return $secondLargest;
}
