<?php

require_once('coins.php');

$coins = new coinCase();
$coins->addCoins(500, 100, 50, 10, 5, 1);
$coins->getCount();
$coins->getAmount();
$ccins->showProfile();