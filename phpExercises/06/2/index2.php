<?php
// session start
session_start();

// session request new ID 
session_regenerate_id();

if (isset($_SESSION['count']) && isset($_GET['reset'])) {
    unset($_SESSION['count']);
}

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        Session Counter
    </div>
    <div>
         <p><?= $_SESSION['count'] ?></p>
        <a href="./index2.php">Counter</a>
        <a href="index2.php">Reset</a>

    </div>
</body>
</html>