<?php

$host = "127.0.0.1";
$port = '8889';
$dbname = 'todolistdatabase';
$username = 'root';
$password = 'root';

try {
        // Query to select all records from the todo_items table
    $stmt = $pdo->query("SELECT * FROM todo_items");
        
        // Set headers to force download as a CSV file
    header('Content-Type: application/csv; charset=Shift-JIS');
    header('Content-Disposition: attachment; filename="todo_items.csv"');

        // Open PHP Output stream file pointer
    $output = fopen('php://output', 'w');

        // Fetch column names for header row
    $columnNames = array_keys($stmt->fetch(PDO::FETCH_ASSOC));
    fputcsv($output, array_map('mb_convert_encoding', $columnNames, array_fill(0, count($columnNames), 'SJIS-win')));

        // Reset Pointer and fetch all rows
    $stmt->execute(); // Re-execute to reset the cursor
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Write each row to CSV after converting
        fputcsv($output, array_map('mb_convert_coding', row, array_fill(0, count($row), 'SJIS-win')));
    }

        // Close the output stream
    fclose($output);
    exit;
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}