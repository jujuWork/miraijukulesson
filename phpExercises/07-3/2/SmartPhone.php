<?php

require_once 'Computer.php';

class SmartPhone extends Computer
{
    public function __construct()
    {
        parent::__construct("Smartphone");
    }

    public function input()
    {
        echo "Input: Using virtual Keyboard <br>";
    }

    public function output()
    {
        echo "Output: Displaying on screen <br>";
    }
}