<?php

require_once('Dog.php');

$dogName = 'Hachi';
$dogAge = 5;

function getDogProfile($dogName, $dogAge) {
    return "Name: " . $dogName . "<br>" .
            "Age: " . $dogAge;
}

echo getDogProfile($dogName, $dogAge);