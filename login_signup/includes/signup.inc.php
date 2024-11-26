<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Get the form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        try {           // MUC PATTERN
                // Grabbing the files
            require_once 'dbh.inc.php';
            require_once 'signup_model.inc.php'; // MODELS First order
            require_once 'signup_ctrl.inc.php'; // controller second order

                // Errors handlers
            if (is_input_empty($username, $password, $email)) { 
            }
            if (is_email_invalid($email)) { // validating email
            }


        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }

    } else {
        header("Location: ../login.php");
        die();
    }