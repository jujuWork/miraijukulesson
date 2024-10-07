<?php

class Dog 
{
        // Properties / Fields
    public $dog = "はち";

        // Constructor
    public function __construct($dog)
    {
        $this->dog = $dog;
    }
}

// $name = new Dog("bee");

echo $name->dog;