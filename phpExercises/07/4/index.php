<?php

require_once('Dog.php');


// Dog Profile 1
$dog = new Dog('Dobberman');
$dog->setName('はち');
$dog->setAge(5);

//Dog Profile 2
$dog = new Dog('Dalmatian');
$dog->setName('ココ');
$dog->setAge(3);

// Dog Profile 3
$dog = new Dog('German Shepherd');
$dog->setName('ムギ');
$dog->setAge(8);

// Dog Profile 4
// $dog04 = new Dog('Askal');
// $dog04->setName['ソラ'];
// $dog04->setAge(12);

$dog->showProfile();