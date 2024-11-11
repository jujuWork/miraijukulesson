<?php

$dsn = 'mysql:host=127.0.0.1;dbname=todolistdatabase;charset=utf8';
$username = 'root';
$password = 'root';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['files'])) {
    try {
            // Establish a database connection
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Open uploaded CSV file
        $file = $_FILES['file']['tmp_name'];
        $fp = fopen($file, 'r');

            // Read each lin in the CSV file
        while (($row = fgetcsv($fp)) !== false) {
                // Convert the encoding of each row from Shift-JIS to UTF-8
            $row = array_map(fn($field) => mb_convert_encoding($field, 'UTF-8', 'SJIS-win'), $row);

                // Extract the values from each row
            list($id, $expiration_date, $todo_item, $is_completed) = $row;

                // Updating record with macting ID
            $stmt = $pdo->prepare("UPDATE todo_items SET due_date = ?, todo_item = ?, completed = ? Where id = ?");
            $stmt->execute([$expiration_date, $todo_item, $is_completed, $id]);
        }

            // close the file pointer and redirect
        fclose($fp);
        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
} else {
    echo 'File Upload failed. Please try again';
}