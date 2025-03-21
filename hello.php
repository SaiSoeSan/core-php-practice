<?php

$x = "Sai";
$y = 'soe';

// echo "Hello", "", "World";
// echo "<br>";
// print "Hello";

$myObj = new stdClass();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJson = json_encode($myObj);

$myObject = json_decode($myJson);

var_dump($myObject);

echo $myObject->name;
// echo "Hello $x";
// echo 'Hello $y';

// echo strlen($x);

// $word = "Hello World";
// echo str_word_count($word);

// $myString = "Hello World Sai";
// $found = strpos($myString, "Sais");
// if ($found) {
//     echo "found";
// } else {
//     echo "not found";
// }

$x = "Hello World!";
// $y = explode(" ", $x);

// print_r($y);

// $x = "Hi, how are you?";
// echo substr($x, 5, -3);



// class Car
// {
//     public $color;
//     public $model;

//     //constructor
//     // public function __construct($color, $model)
//     // {
//     //     $this->model = $model;
//     //     $this->color = $color;
//     // }

//     public function setModel($model)
//     {
//         $this->model = $model;
//     }
//     public function setColor($color)
//     {
//         $this->color = $color;
//     }

//     public function message()
//     {
//         return "My car is a " . $this->color . " " . $this->model . "!";
//     }
// }

// $myCar = new Car();
// $myCar->setModel("BMW");
// $myCar->setColor("red");
// echo $myCar->message();

// $a = 5;
// $a = (object) $a;

// var_dump($a);
// echo $a->scalar;



// $a = array("Volvo", "BMW", "Toyota");

// $a  = (object) $a;

// var_dump($a);

// echo $a->{"0"};

// $x = 40;
// $y  = 40;
// $x = 60;

// echo (round(0.60));
// echo (round(0.49));
// echo (rand());


// const H = "sai soe san";

// function hello()
// {
//     define("GREETING", "Hello World", false);
//     echo GREETING;
//     echo __METHOD__;
// }

// hello();

// $x = 30;
// $y = 50;
// // var_dump($y <=> $x);

// // echo $x < $y ? "less" : "not less than";

// // $e = $z ?? $y;

// if ($x > 9) {
//     echo "greater than 9";
// }

// echo $e;

$x = 0;

// while ($x < 40) {
//     $x++;
//     if ($x == 20) continue;
//     echo "$x";
// }
// do {
//     echo $x;
//     $x++;
// } while ($x <= 10);

// for ($i = 0; $i <= 100; $i += 10) {
//     if ($i == 0) continue;
//     echo "$i ";
// }

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $index => &$color) {
//     if ($color == "red") $color = "pink";
// }

// var_dump($colors);

// class Car
// {
//     public $color;
//     public $model;
//     public function __construct($color, $model)
//     {
//         $this->color = $color;
//         $this->model = $model;
//     }
// }

// $myCar = new Car("red", "Volvo");

// foreach ($myCar as $k => &$value) {
//     if ($value == "red") $value = "pink";
// }
// var_dump($myCar);

// switch ($x) {
//     default:
//         echo "default";
//         break;
//     case 1:
//         echo "1";
//         break;
//     case 30:
//     case 40:
//     case 50:
//         echo "30 or 40 or 50";
//         break;
// }
