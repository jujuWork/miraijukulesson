<?php

// $dsn = "mysql:host=localhost;dbname=todolistdatabase;charset=utf8;";
$host = '127.0.0.1';
$port = '8889';
$dbname = 'todolistdatabase';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password); // MOST IMPORTANT FOR CONNECTING THE DATABASE
    //     // ERROR HANDLERS
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO todo_items (expiration_date, todo_item) VALUES ('" . $_POST['expiration_date'] . "', '" . $_POST['todo_item'] . "')";

    $pdo->exec($sql);

    header("Location: index.php");

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}