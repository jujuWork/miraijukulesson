<?php

$host = '127.0.0.1';
$port = '8889';
$dbname = 'todolistdatabase';
$username = 'root';
$password = 'root';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    try {
            // Establish a database connection
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Open uploaded CSV file
        $file = $_FILES['file']['tmp_name'];
        $fp = fopen($file, 'r');

        $firstrow = true;
            // Read each lin in the CSV file
        while (($row = fgetcsv($fp)) !== false) {
                // Skip header row if there is one
            if ($firstrow) {
                $firstrow = false;
                continue;
            }

                // Convert the encoding of each row from Shift-JIS to UTF-8
            $row = array_map(fn($field) => mb_convert_encoding($field, 'UTF-8', 'SJIS-win'), $row);

                // Ensure we have exactly number of columns
            if (count($row) < 4) {
                throw new Exception("CSV row format is incorrect");
            }

                // Extract the values from each row
            list($id, $expiration_date, $todo_item, $is_completed) = $row;

            if (!is_numeric($id)) {
                throw new Exception("Invalid ID format: $id is no numeric.");
            }

                // Updating record with macting ID
            $stmt = $pdo->prepare("UPDATE todo_items SET expiration_date = ?, todo_item = ?, is_completed = ? Where id = ?");
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