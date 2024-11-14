<?php

class Base {
        // Database connection details as constants
    const DB_NAME = 'todolistdatabase';
    const DB_HOST = '127.0.0.1';
    const DB_USER = 'root';
    const DB_PASS = 'root';

        // Protected Variable to store PDO instance
    protected $pdo;

        // Constructor to set up PDO connection
    public function __construct()
    {
        try {
                // Create DSN (Data Source Name) string
            $dsn = 'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME;

                // Create a PDO instance and assign it to $pdo
            $this->pdo = new PDO($dsn, self::DB_USER, self::DB_PASS);

                // Set Error mode to throw exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }

    }
}