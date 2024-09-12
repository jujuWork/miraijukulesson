<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $type = htmlspecialchars($_POST["type"]);
    $name = htmlspecialchars($_POST["name"]);

    echo ("ID: ") . $type;
    echo "<br>";
    echo ("Name: ") . $name;
}