<?php

require_once('dog.php');

$dog = new Dog('Doberman', 5, 'shittsu');
// $dog->setName('Hachi');
// $dog->setAge(5);
$dog->showProfile();

echo file_get_contents('dog.php');