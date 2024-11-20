<?php

$host = "127.0.0.1";
$port = '8889';
$dbname = 'todolistdatabase';
$username = 'root';
$password = 'root';

try {
        // Establish a database connection
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charutd=8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query to select all records from the todo_items table
    $stmt = $pdo->query("SELECT * FROM todo_items");
        
        // Set headers to force download as a CSV file
    header('Content-Type: application/csv; charset=Shift-JIS');
    header('Content-Disposition: attachment; filename="todo_items.csv"');

        // Open PHP Output stream file pointer
    $output = fopen('php://output', 'w');

        // Fetch column names for header row
    $columnNames = array_keys($stmt->fetch(PDO::FETCH_ASSOC));
    fputcsv($output, array_map(fn($col) => mb_convert_encoding($col, 'SHIFT-JIS', 'UTF-8'), $columnNames));

        // Reset Pointer and fetch all rows
    $stmt->execute(); // Re-execute to reset the cursor
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Write each row to CSV after converting
        fputcsv($output, array_map(fn($field) => mb_convert_encoding($field, 'SHIFT-JIS', 'UTF-8'), $row));
    }

        // Close the output stream
    fclose($output);
    exit;
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}