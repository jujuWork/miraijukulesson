<?php

$numberA = (int)$_POST["numberA"];

if ($numberA >=100) {
    echo "100以上です!";
} else {
    echo "100未満です";
}