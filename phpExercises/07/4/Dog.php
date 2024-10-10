<?php

class Dog
{
    private $name;
    private $age;
    private $profile;

    public function __construct($profile)
    {
        $this->profile = $profile;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function showName()
    {
        echo '<p>' . $this->name . '</p>';
    }

    public function showProfile()
    {
        echo '<p>My name is ' . $this->name . " I'm " .$this->age . ' years old ' . ' and my breed is ' .$this->profile . '</p>' . '<br>';
    }
}