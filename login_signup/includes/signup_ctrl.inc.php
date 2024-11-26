     <!-- CONTROLLING/SENDING TO THE DATABASE -->

<?php
     // preventing more errors
declare(strict_types=1);

     // If any of the function is EMPTY
function is_input_empty(string $username, string $password, string $email) {
     if (empty($username) || empty($password) || empty($email)) {
          return true;
     } else {
          return false;
     }
}

     // Checking if the email is valid
function is_email_invalid(string $email) {
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          return true;
     } else {
          return false;
     }
}

     // Checking if the username is taken
function is_username_taken(object $pdo, string $username) {
     if (get_username($pdo, $username)) {
          return true;
     } else {
          return false;
     }
}