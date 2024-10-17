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

$animals = [
    new Dog('dog'),
    new Cat('cat'),
    new Dog('dog'),
    new Cat("cat")
];

// $animals = [];
// $animals[] = new Dog();
// $animals[] = new Cat();
// $animals[] = new Dog();
// $animals[] = new Cat();

foreach ($animals as $animal) {
    echo $animal->speak() . "\n";
}