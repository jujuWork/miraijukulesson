<?php

require_once 'Computer.php';

class PersonalComputer extends Computer
{
    public function __construct()
    {
        parent::__construct("Personal Computer");
    }

    public function input()
    {
        echo "Input: Using keyboard and mouse '<br>' ";
    }

    public function output()
    {
        echo "Ouput: Displaying on monitor '<br>' ";
    }
}