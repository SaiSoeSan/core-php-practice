<?php

$arr = [4, 3, 2, 7, 8, 2, 3, 1, 7, 2];
var_dump(findDuplicates($arr));

function findDuplicates($arr)
{
    $duplicates = [];
    $seen = [];
    foreach ($arr as $value) {
        if (in_array($value, $seen)) {
            if (!in_array($value, $duplicates)) {
                $duplicates[] = $value;
            }
        }
        $seen[] = $value;
    }
    return $duplicates;
}
