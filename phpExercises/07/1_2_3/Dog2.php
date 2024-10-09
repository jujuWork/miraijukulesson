<?php

// Dog Class

class Dog
{
    private $name; // String for Dogs Name
    private $age; // Int for  Dogs Age
    private $type; // String for Types of Dogs


    // Constructing ...

    public function __construct($type)
    {
        $this->type = $type;
    }

    // Setting Name

    public function setName($name)
    {
        $this->name = $name;
    }

      // Setting Age

      public function setAge($age)
      {
          $this->age = $age;
      }

    // Displaying Name in the Browser

    public function showName()
    {
        echo '<p>' . $this->name . '</p>';
    
    }

    // Displaying profile from the index2.php

    public function showProfile()
    {
        echo '<p>名前は' . $this->name . 'です。年齢は' . $this->age . '歳です。犬種は' . $this->type . 'です。</p>';
    }
}