<?php

class Dog {
        // Properties / Fields
    private $name;
    private $age;
    private $type;

        // Contructor
    public function __construct($name, $age, $type)
    {
        $this->name = $name;
        $this->age = $age;
        $this->type = $type;
    }

        // Method (accessing the private properties)
    public function showProfile()
    {
        return "My Name is: " . $this->name . " and I'm " . $this->age . " years old. My Breed is: " . $this->type;
    }
}

$dog01 = new Dog('Mii', 5, 'German Shepherd');
$dog02 = new Dog('Rin', 10, 'Doberman');
echo $dog01->showProfile();
echo "<br>";
echo $dog02->showProfile();





// public function __construct($name, $age, $type)
// {
//     $this->name = setName($name);
//     $this->age = $age;
//     $this->type = $type;
// }