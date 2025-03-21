<?php


class Person {
    public $age;
    public $dob;
    public $name;

    public function __construct($name,$dob){
        $this->name = $name;
        $this->dob = $dob;
        $this->age = $this->calculateAge();
    } 

    public function getAge(){
        return $this->age;
    }

    public function getName(){
        return $this->name;
    }

    public function calculateAge(){
        $dob = new DateTime($this->dob);
        $now = new DateTime();
        $interval = $dob->diff($now);
        return $interval->y;
    }
}