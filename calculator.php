<?php

namespace Calculator;

class Calculator {

    public function add($a,$b){
        return $a + $b;
    }

    public function subtract($a,$b){
        return $a - $b;
    }

    public function multiply($a,$b){
        return $a * $b;
    }

    public function divide($a,$b){
        return $a / $b;
    }

    public function modulus($a,$b){
        return $a % $b;
    }

    public function power($a,$b){
        return pow($a,$b);
    }

    public function squareRoot($a){
        return sqrt($a);
    }

    public function average($a,$b){
        return ($a + $b) / 2;
    }
}

