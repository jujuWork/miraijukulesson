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
        echo $this->type;    
    }

    abstract public function fly();
}