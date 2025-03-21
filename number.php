<?php

$numbers = "00 0";

$result = numberToDigit($numbers);
echo $result;

function numberToDigit($numbers)
{
    //number to array
    $parts = explode(' ', $numbers);
    $binaryString = '';
    $i = 0;


    while ($i <= count($parts)) {
        $flag = $parts[$i];
        $i++;
        $sequence = $parts[$i];
        $i++;

        if ($flag == "00") {
            $binaryString .= str_repeat("1", strlen($sequence));
        } else {
            $binaryString .= str_repeat("0", strlen($sequence));
        }
    }

    var_dump($binaryString);

    return bindec($binaryString);
}
