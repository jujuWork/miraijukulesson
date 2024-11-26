<?php

    // Database connection Details

$host = '127.0.0.1';
$port = '8889';
$dbname = 'users';
$username = 'root';
$password = 'root';


try {
    $pdo = new PDO ("mysql:host=$host;port=$port;$d");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}