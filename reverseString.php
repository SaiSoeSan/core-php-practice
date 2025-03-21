<?php

$string = 'hello';

var_dump(reverseString($string));

function reverseString($string)
{
    try {
        $chars = str_split($string);
        $i = 0;
        $j = strlen($string) - 1;
        while ($i < $j) {
            $temp = $chars[$i];
            $chars[$i] = $chars[$j];
            $chars[$j] = $temp;
            $i++;
            $j--;
        }
        return implode($chars);
        // $newString = '';
        // $pos = 1;
        // while ($pos <= strlen($string)) {
        //     $each = substr($string, 0 - $pos, 1);
        //     $newString .= $each;
        //     $pos++;
        // }
        // return $newString;
    } catch (\Throwable $th) {
        var_dump($th);
    }
}
