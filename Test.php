<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include 'Student.php';

$student = new Student('Sai','2007-12-4',3.5,2020);
$student2 = new Student('Myo','2008-12-4');
$student3 = new Student('Aung','2009-12-4',4.8,2025);

echo $student->getName() . " gpa is " . $student->getGpa();
echo $student2->getName() . " gpa is " . $student2->getGpa();
echo $student3->getName() . " gpa is " . $student3->getGpa();

echo "<br>";

echo $student->getName() . " graduation year is " . $student->getGraduationYear();
echo "<br>";
echo $student2->getName() . " graduation year is " . $student2->getGraduationYear();
echo "<br>";
echo $student3->getName() . " graduation year is " . $student3->getGraduationYear();



