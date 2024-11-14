<?php

    // Include the Base class
require_once 'Base.php';

    // Define the TodoItems class, inheriting from Base
class TodoItems extends Base {
        
        // Constructor calls the base class constructor
    public function __construct()
    {
        parent::__construct(); // Call the Parent (Base) class constructor
    }

        /**
        *    // Get all records (sorted by oldest expiration date)
        * @return array
        */
    public function selectAll() {
        
        if ($this->pdo === null) {
            echo "Database connection not established";
            return [];
        }

        try {
                // Create SQL statement to get all todo items
            $sql = "SELECT * FROM todo_items ORDER BY expiration_date ASC";

                // Prepare and execute SQL statement
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

                // Fetch all records as a associative array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);


        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
}