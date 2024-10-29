<?php

$dsn = "mysql:host=localhost;dbname=todolistdatabase;charset=utf8;";
$dbusername = 'root';
$dbpassword = 'root';

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword); // MOST IMPORTANT FOR CONNECTING THE DATABASE
        // ERROR HANDLERS
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$expiration_date = $_POST['expiration_date'];
$todo_item = $_POST['todo_item'];

$sql = "INSERT INTO todo_items (expiration_date, todo_item) VALUES ('$expiration_date', '$todo_item')";

