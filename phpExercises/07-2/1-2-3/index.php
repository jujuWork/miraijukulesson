<?php

class Dog
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function showProfile()
    {
        return "名前は " . $this->name . " です." . "年齢は " . $this->age . "歳です。";
    }

    public function run()
    {
        echo "トコトコ";
    }
}

class Cat
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function showProfile()
    {
        return "名前は " . $this->name . " です." . "年齢は " . $this->age . "歳です。";
    }

    public function run()
    {
        echo "スースー";
    }
}

$dog01 = new Dog('はち', 5);
echo $dog01->showProfile();
echo "<br>";
echo "<br>";
echo $dog01->run();

echo "<br>";
echo "<br>";

$cat01 = new Cat('たま', 3);
echo $cat01->showProfile();
echo "<br>";
echo "<br>";
echo $cat01->run();