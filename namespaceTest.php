<?php

use Calculator as C1;
use Calculator2 as C2;

require_once('calculator.php');
require_once('calculator2.php');


error_reporting(E_ALL);
ini_set('display_errors', 'On');



$calculator = new C1\Calculator();

$sum = $calculator->add(10, 5);
echo "Sum: " . $sum . "<br>";


$calculator2 = new C2\Calculator();
$sum2 = $calculator2->add(10, 5);
echo "Sum: " . $sum2 . "<br>";
