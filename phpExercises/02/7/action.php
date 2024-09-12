<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $numberA = $_POST["numberA"];
    $numberB = $_POST["numberB"];
    $remainder = fmod($numberA, $numberB);

    echo "数字A:数字Bの余りは" . "<br>" . $remainder . "<br>" . "です";
}