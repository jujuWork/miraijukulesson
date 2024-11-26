<?php
    // Database details
$host = '127.0.0.1';
$port = '8889';
$dbname = 'users';
$dbusername = 'root';
$dbpassword = 'root';

try {
        // Connection to the database
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbusername, $dbpassword);
        // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}