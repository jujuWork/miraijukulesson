<?php

$text = $_POST["text"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!is_numeric($text)) {
        echo "It's a String";
    } else {
        echo "It's a Number";
    }
}