<?php

include 'Person.php';

//create 10 persons with different ages
$persons = array(); 
$persons[] = new Person('Sai','2007-12-4'); 
$persons[] = new Person('Myo','2008-12-4');
$persons[] = new Person('Aung','2009-12-4');
$persons[] = new Person('Hla','2010-12-4');
$persons[] = new Person('Zaw','2011-12-4');
$persons[] = new Person('Mg Mg','2012-12-4');
$persons[] = new Person('Aye Aye','2013-12-4');
$persons[] = new Person('Ko Ko','2014-12-4');
$persons[] = new Person('Ma Ma','2015-12-4');
$persons[] = new Person('Kyaw Kyaw','2016-12-4');

usort($persons,"mysort");

foreach($persons as $person){
    echo $person->name . " is " . $person->getAge() . " years old<br>";
}

function mysort($p1,$p2)  {
    if ($p1->getAge() == $p2->getAge()) {
        return 0;
    }
    return $p1->getAge() > $p2->getAge() ? 1 : -1;
}

