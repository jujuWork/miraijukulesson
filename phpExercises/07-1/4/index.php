<?php

require_once('Dog.php');


// Dog Profile 1
$dog01 = new Dog('Dobberman');
$dog01->setName('Hachi');
$dog01->setAge(5);
$dog01->showProfile();

//Dog Profile 2
$dog02 = new Dog('Dalmatian');
$dog02->setName('Koko');
$dog02->setAge(3);
$dog02->showProfile();

// Dog Profile 3
$dog03 = new Dog('German Shepherd');
$dog03->setName('Mugi');
$dog03->setAge(8);
$dog03->showProfile();

//Dog Profile 4
$dog04 = new Dog('Askal');
$dog04->setName('Sora');
$dog04->setAge(12);
$dog04->showProfile();