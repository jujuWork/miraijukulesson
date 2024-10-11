<?php

class Dog 
{
        // Properties / Fields
    private $dogName;
    private $dogAge;


        // Constructor
    public function __construct($dogName, $dogAge)
    {
        $this->name = $dogName;
        $this->age = $dogAge;
    }

        // Method
    public function getDogProfile() {
        return "Name: " . $this->name . "<br>" .
        "Age: " . $this->age;
    }
}

$dog = new Dog('Mii', '6');
echo $dog->getDogProfile();