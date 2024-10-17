<?php

abstract class Airplane
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function showType()
    {
        echo '<p> Airplane Type: ' . $this->type . '</p>';    
    }

    abstract public function fly();
}