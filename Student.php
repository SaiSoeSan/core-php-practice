<?php 

include 'Person.php';

class Student extends Person {
    public $gpa = 0.00;
    public $graduationYear;

    public function __construct($name,$dob, $gpa = 0.00,$graduationYear = null){
        parent::__construct($name,$dob);
        $this->gpa = $gpa;
        $this->graduationYear = $graduationYear ? $graduationYear : date('Y') + 4;
    }

    public function setGpa($gpa){
        $this->gpa = $gpa;
    }

    public function getGpa(){
        return $this->gpa;
    }

    public function setGraduationYear($year) {
        $this->graduationYear = $year;
    }

    public function getGraduationYear() {
        return $this->graduationYear;
    }

}