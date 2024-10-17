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
        echo '<p>The passenger plane in flying steadily</p>';
    }

    public function carryPassengers()
    {
        echo '<p>The Passenger Plane is Carrying the passengers</p>';
    }
}