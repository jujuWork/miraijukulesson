<?php

require_once 'PersonalComputer.php';
require_once 'TabletPC.php';
require_once 'SmartPhone.php';

    // Create intance of each class
$pc = new PersonalComputer();
$tablet = new TabletPC();
$smartphone = new SmartPhone();

    // Show the type of each computer and demonstrate theri input, output
$pc->showType();
$pc->input();
$pc->output();
$pc->communication();
echo "<p>---------------------------------------</p> <br>";

$tablet->showType();
$tablet->input();
$tablet->output();
$tablet->communication();
echo "<p>---------------------------------------</p> <br>";

$smartphone->showType();
$smartphone->input();
$smartphone->output();
$smartphone->communication();
echo "<p>---------------------------------------</p> <br>";