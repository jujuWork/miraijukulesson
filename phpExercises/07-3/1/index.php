<?php

require_once('Airplane.php');
require_once('FighterAircraft.php');
require_once('PassengerPlane.php');

    // Fighter Aircraft
$fighter = new FighterAircraft('Fighter');
$fighter->showType();
$fighter->fly();
$fighter->fight();

    // Passenger Place
$plane = new PassengerPlane('Passenger');
$plane->showType();
$plane->fly();
$plane->carryPassengers();