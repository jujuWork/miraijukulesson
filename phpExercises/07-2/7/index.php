<?php

class Dog
{
    public function speak()
    {
        return "ワンワン";
    }
}

class Cat
{
    public function speak()
    {
        return "ニャー";
    }
}

$animals = [];
$animals[] = new Dog();
$animals[] = new Cat();
$animals[] = new Dog();
$animals[] = new Cat();

foreach ($animals as $animal) {
    echo $this->speak();
}