<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $numberA = htmlspecialchars($_POST["numberA"]);
    $numberB = htmlspecialchars($_POST["numberB"]);
    $result = ($numberA * $numberB);

    echo "数字A x 数字Bは" . "<br>" . $result . "<br>" . "です";
}