<?php

include 'Person.php';

$person1 = new Person('Sai','2007-12-4');
$person2 = new Person('Myo','2008-12-4');
compareAge($person1,$person2);

function compareAge($person1,$person2){
    if($person1->getAge() > $person2->getAge()){
        echo $person1->name . " is older than " . $person2->name;
    }else if($person1->getAge() < $person2->getAge()){
        echo $person1->name . " is younger than " . $person2->name;
    }else{
        echo $person1->name . " is of the same age as " . $person2->name;
    }
}