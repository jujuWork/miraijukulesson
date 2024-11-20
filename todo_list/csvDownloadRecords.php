<?php

$host = '127.0.0.1';
$port = '8889';
$dbname = 'todolistdatabase';
$username = 'root';
$password = 'root';

try {
        // Connect to the database
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;chartset=utf-8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Prepare a SQL query to get all records
    $stmt = $pdo->query("SELECT * FROM todo_items");

        // Set headers to make the browser download the file as CSV
    header('Content-Type: text/csv; charset=Shift-JIS');
    header('Content-Disposition: attachment; filename="todo_items_records.csv"');
        
        // Open a file output mode
    $output = fopen('php://output', 'w');

        // Write the column headers to the CSV
    fputcsv($output, ['id', 'expiration_date', 'todo_item', 'is_completed'], ',', '"');

        // Write each record to the CSV
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Convert Encoding from UTF-8 to SHIFT-JIS for excel compatability
        $row = array_map(fn($field) => mb_convert_encoding($field, 'SJIS-win', 'UTF-8'), $row);
        fputcsv($output, $row, ',', '"');
    }

        // Close the file pointer
    fclose($output);
    exit;

} catch (PDOException $e) {
    echo "Database error:" . $e->getMessage();
}