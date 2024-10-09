<?php

require_once('Dog2.php');

// Variable Declaration for Dog2.php

$dog = new Dog('dalmatian'); // new name for the variable dog

// Setting the variable with new declared variable
$dog->setName('Mii');
$dog->setAge(5);
$dog->showProfile();