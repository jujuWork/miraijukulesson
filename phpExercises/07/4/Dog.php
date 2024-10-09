<?php

class Dog
{
    private $name;
    private $age;
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function showProfile()
    {
        echo $this->name . $this->age;
    }
}