<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $numberA = htmlspecialchars($_POST["numberA"]);
    $numberB = htmlspecialchars($_POST["numberB"]);

    echo "数字A ÷ 数字Bは" . "<br>" . $numberA / $numberB . "<br>" . "です";
}