<?php

require_once('Airplane.php');

class PassengerPlane extends Airplane
{
    public function __construct($type) // Set the type of Passenger Plance
    {
        parent::__construct($type);  // Calling the parent class (Airplane)
    }

    public function fly()
    {
        echo '<p>乗客を乗せて目的地まで飛行します</p>';
    }

    public function carryPassengers()
    {
        echo '<p>乗客を目的地まで運びます</p>';
    }
}