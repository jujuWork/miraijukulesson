<?php

require_once('coins.php');

$coins = new coinCase();
$coins->addCoins(500円, 100円, 50円, 10円, 5円, 1円);
$coins->getCount();
$coins->getAmount();