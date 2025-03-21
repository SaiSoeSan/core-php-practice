<?php

$myString = 'hello';
$count = countVowel($myString);
echo $count;

function countVowel($string)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $i = 0;
    $count = 0;
    while ($i < strlen($string)) {
        $character = substr($string, $i, 1);
        echo $character;
        if (in_array($character, $vowels)) {
            $count++;
        }
        $i++;
    }
    return $count;
}
