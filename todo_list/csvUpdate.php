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
        
        $stmt = $pdo->query("SELECT DATABASE()");

            // Open uploaded CSV file
        $file = $_FILES['file']['tmp_name'];
            if (!file_exists($file)) {       // Debugging Check if the file uploaded is Sucessful.
                die("File upload failed or no file uploaded.");
            }

        $fp = fopen($file, 'r');
            if (!$fp) {                // Verify File reading 
                die("Failed to open the file.");
            }

        $firstrow = true;

            // Read each lin in the CSV file
        while (($todo = fgetcsv($fp)) !== false) {
                // Skip header row if there is one
            if ($firstrow) {
                echo "Row read: " . implode(", ", $todo) . "<br>";
                $firstrow = false;
                continue;
            }
                // Convert the encoding of each row from Shift-JIS to UTF-8
            $todo = array_map(fn($field) => mb_convert_encoding($field, 'SJIS-win', 'UTF-8'), $todo);
                // Ensure we have exactly number of columns
            if (count($todo) !== 5) {
                // throw new Exception("CSV row format is incorrect");
                echo "Invalid row: " . implode(", ", $todo) . "<br>";
                continue;
            }

                // Extract the values from each row
            list($id, $expiration_date, $todo_item, $is_completed, $status) = $todo;
                // Ensure 'is_completed is an integer
            $is_completed = (int)$is_completed;

                // Inserting new ID into the Database if the id in the csv file didn't exist
            $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM todo_items WHERE id = :id");
            $checkStmt->bindParam(':id', $id, PDO::PARAM_INT);
            $checkStmt->execute();
                if ($checkStmt->fetchColumn() == 0){
                    echo "ID $id does not exist. Inserting new record...<br>";
    
                        $insertStmt = $pdo->prepare("INSERT INTO todo_items (id, expiration_date, todo_item, is_completed, status)
                                                    VALUES (:id, :expiration_date, :todo_item, :is_completed, :status)");
                        $insertStmt->bindParam(':id', $id, PDO::PARAM_INT);
                        $insertStmt->bindParam(':expiration_date', $expiration_date, PDO::PARAM_STR);
                        $insertStmt->bindParam(':todo_item', $todo_item, PDO::PARAM_STR);
                        $insertStmt->bindParam(':is_completed', $is_completed, PDO::PARAM_INT);
                        $insertStmt->bindParam(':status', $status, PDO::PARAM_STR);
                        $insertStmt->execute();
                        
                        echo "Inserted new record for ID $id<br>";
                        continue;
                }


            // $stmt = $pdo->prepare("UPDATE todo_items 
            //                         SET expiration_date = :expiration_date, 
            //                             todo_item = :todo_item, 
            //                             is_completed = :is_completed,
            //                             status = :status
            //                         WHERE id = :id"
            //                         );

            // $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            // $stmt->bindParam(':expiration_date', $expiration_date, PDO::PARAM_STR);
            // $stmt->bindParam(':todo_item', $todo_item, PDO::PARAM_STR);
            // $stmt->bindParam(':is_completed', $is_completed, PDO::PARAM_INT);
            // $stmt->bindParam(':status', $status, PDO::PARAM_STR);
            // $stmt->execute();

            // echo "Processed ID: $id, Rows Updated: " . $stmt->rowCount() . "<br>";

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
