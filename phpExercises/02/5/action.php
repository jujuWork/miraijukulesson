<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $numberA = $_POST["numberA"];
    $numberB = $_POST["numberB"];

    echo "数字A x 数字Bは" . "<br>" . $numberA * $numberB . "<br>" . "です";
}