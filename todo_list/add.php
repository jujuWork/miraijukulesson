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

    if (isset($_POST['expiration_date']) && isset($_POST['todo_item'])) {

        // Get the form data
        $expiration_date = $_POST['expiration_date'];
        $todo_item = $_POST['todo_item'];

        // Insert data into the todo_items table
        $sql = "INSERT INTO todo_items (expiration_date, todo_item) VALUES ('$expiration_date', '$todo_item')";
        $pdo->exec($sql); // Execute the SQL query

        // Redirect back to index.php after adding the item
        header("Location: index.php");
        exit;

    } else {
        // If the form data is not set, show an error message
        echo "Please fill in all fields.";
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}