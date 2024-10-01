<?php

// creating session for the next page.
session_start();
// requesting session ID ...
session_regenerate_id();

$_SESSION['message'] = $_POST['message'];

$message = $_POST["message"];

if ($message) {
    echo "$message" . "<br>" . "<a href='./index.php'>" . "back" . "</a>";
}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p></p> <br>
    <p><a href="./index.php">back</a></p>
</body>
</html>