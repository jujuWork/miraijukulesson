<?php

$dsn = "mysql:host=localhost;dbname=TODOLIST";
$dbusername = "root";
$dbpassword = "root";


    // THIS IS A METHOD IF THERE IS AN ERROR;
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword); // MOST IMPORTANT FOR CONNECTING THE DATABASE
        // ERROR HANDLERS
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}