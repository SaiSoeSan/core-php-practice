<?php
include 'reverseString.php';

$string = 'hoh';

echo isPalindrom($string);


function isPalindrom($string)
{
    $reverseString = reverseString($string);
    if ($string == $reverseString) {
        return 'palindrome';
    };

    return 'it is not';
}
