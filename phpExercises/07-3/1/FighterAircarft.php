<?php

require_once('Airplane.php');

class FighterAircraft extends Airplane
{
    public function __construct($type) // Setting the type of Airplane
    {
        parent:: __construct($type); // Call the Parent class (Airplane)
    }

    public function fly()
    {
        echo '<p>The Fighter aircraft is flying fast!</p>';
    }

    public function fight()
    {
        echo '<p>The Fighter aircraft is is a fight</p>';
    }
}