<?php

class PersonalComputer extends Computer
{
    public function __construct()
    {
        parent::__construct("Personal Computer"); // Set The type
    }

    public function input()
    {
        echo "Input: Using Keyboard and Mouse '<br>' ";
    }

    public function ouput()
    {
        echo "Output: Displaying on monitor '<br>' ";
    }
}