<?php

var_dump(missingNumber([1, 2, 4, 5, 6, 7]));
function missingNumber($arr)
{

    $n = count($arr) + 1;
    $expectedSum = $n * ($n + 1) / 2;
    $total = array_sum($arr);
    return $expectedSum - $total;
}
