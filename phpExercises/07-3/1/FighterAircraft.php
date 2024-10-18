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
        echo '<p>攻撃に出るために飛行します</p>';
    }

    public function fight()
    {
        echo '<p>戦闘します</p>';
    }
}