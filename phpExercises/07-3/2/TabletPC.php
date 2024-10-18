<?php

require_once 'Computer.php';

class TabletPC extends Computer
{
    public function __construct()
    {
        parent::__construct("Tablet PC"); // Set the type
    }

    public function input()
    {
        echo "Input: Using touchscreen '<br>' ";
    }

    public function output()
    {
        echo "Output: Displaying on touchscreen '<br>' ";
    }
}