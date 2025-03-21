<?php

$k = 2;
$arr = [1, 2, 3, 4, 5];
$type = 'right';
rotateArray($k, $arr, $type);

var_dump($arr);

function rotateArray($k, &$arr, $type)
{
    $k = $k % count($arr);
    reverse($arr, 0, count($arr) - 1);
    if ($type == 'left') {
        reverse($arr, 0, $k);
        reverse($arr, $k + 1, count($arr) - 1);
    } else {
        reverse($arr, 0, $k - 1);
        reverse($arr, $k, count($arr) - 1);
    }
}

function reverse(&$arr, $start, $end)
{
    while ($start < $end) {
        $temp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        $start++;
        $end--;
    }
}
