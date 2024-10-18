<?php

abstract class Computer
{
    protected $type; // A protected field to store the type of computer

        // Contructor to set the type of computer
    public function __construct($type)
    {
        $this->type = $type;
    }

        // Method to show the type of computer
    public function showType()
    {
        echo "This is a " . $this->type . "<br>";
    }

        // Abstract method for input and output
    abstract public function input();
    abstract public function output();

        // Method to show how the computer communicates
    public function communication()
    {
        echo "Communicatin over the internet '<br>' ";
    }
}