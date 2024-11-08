<?php

$host = '127.0.0.1';
$port = '8889';
$dbname = 'todolistdatabase';
$username = 'root';
$password = 'root';

try {
        // Connect to the database(IMPORTANT!!)
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charutd=8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the for data was posted from index.php
    $id = $_POST['id'];                     // Ensure ID is a number
    $status = $_POST['status']; // ? (int)$_POST['status'] : 0;        // Get Status or set to 0
    $delete = isset($_POST['delete']) ? 1 : 0;      // True if the delete checkbox was checked

            // IF delete is checked, delete the item
        if ($delete) {
            $sql = "DELETE FROM todo_items WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

        } else {
            $sql = "UPDATE todo_items SET status = :status WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':status' => $status, ':id' => $id]);
        }

            // CSV DOWNLOAD
        // Query to select all records from the todo_items table
    $stmt = $pdo->query("SELECT * FROM todo_items");
        
        // Set headers to force download as a CSV file
    header('Content-Type: application/csv; charset=Shift-JIS');

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

header("Location: index.php");
exit;