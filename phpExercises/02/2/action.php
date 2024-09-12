<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $familyname = htmlspecialchars($_POST["familyName"]);
    $lastname = htmlspecialchars($_POST["lastName"]);

    echo "あなたのお名前は $familyname $lastname さんですね?";
}