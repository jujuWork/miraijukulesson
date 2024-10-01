<?php

$message = $_POST["message"];

if ($message) {
    echo "$message" . "<br>" . "<a href='./index.php'>" . "back" . "</a>";
}