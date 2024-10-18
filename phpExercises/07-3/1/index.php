<?php

require_once('Airplane.php');
require_once('FighterAircraft.php');
require_once('PassengerPlane.php');

    // Fighter Aircraft
$fighter = new FighterAircraft('Fighter_戦闘機');
$fighter->showType();
$fighter->fly();
$fighter->fight();

    // Passenger Place
$plane = new PassengerPlane('Passenger_旅客機');
$plane->showType();
$plane->fly();
$plane->carryPassengers();