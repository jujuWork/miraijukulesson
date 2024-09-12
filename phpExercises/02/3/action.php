<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $numberA = $_POST["numberA"];
    $numberB = $_POST["numberB"];

    echo "数字A+数字Bは";
    echo "<br><br>";
    echo $numberA + $numberB;
    echo "<br><br>";
    echo "です";
}