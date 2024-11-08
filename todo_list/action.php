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
    echo "Error: " . $e->getMessage();
    exit;
}

header("Location: index.php");
exit;