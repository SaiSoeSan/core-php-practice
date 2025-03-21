<?php

$k = 2;
$arr = [1, 2, 3, 4, 5];
$type = 'right';
var_dump(rotateArray($k, $arr, $type));

function rotateArray($k, $arr, $type)
{
    $k = $k % count($arr);
    $firstArray = [];
    $secondArray = [];

    for ($i = 0; $i <= count($arr) - 1; $i++) {
        if ($type == 'left') {
            $secondArray = array_slice($arr, 0, $k);
            $firstArray = array_slice($arr, $k);
            // if ($i - $k < 0) {
            //     $secondArray[] = $arr[$i];
            // } else {
            //     $firstArray[] = $arr[$i];
            // }
        } else {
            $secondArray = array_slice($arr, 0, $k + 1);
            $firstArray = array_slice($arr, $k + 1);
            // if ($i + $k < count($arr)) {
            //     $secondArray[] = $arr[$i];
            // } else {
            //     $firstArray[] = $arr[$i];
            // }
        }
    }
    return array_merge($firstArray, $secondArray);
}
