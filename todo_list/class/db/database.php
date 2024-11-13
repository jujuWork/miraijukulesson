<?php
    // Connecting to the database
class Database {
    private $host = '127.0.0.1';
    private $username = 'root';
    private $password = 'root';
    private $dbname = 'todolistdatabase';

    public $connection;
        
        public function __construct()
        {
            $this->connect();
        }

            // Method to connect to the database
        
    private function connect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
            if ($this->connection->connect_error) {    
                die("Connection failed: " . $this->connection->connect_error);
            }
        }

            // Method to close the database connection
    public function close() {
        $this->connection->close();
    }

}