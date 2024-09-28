<?php

$textarea = $_POST["textarea"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "This is your Message: " . "<br>" . "<br>". nl2br($textarea);
}

// nl2br($_POST["textarea"]);