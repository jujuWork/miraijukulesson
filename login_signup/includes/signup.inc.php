<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Get the form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        try {
            //code...
        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }

    } else {
        header("Location: ../login.php");
        die();
    }