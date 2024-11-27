     <!-- MODEL FOR DATABASE CONNECITON -->

<?php
     // preventing more errors
declare(strict_types=1);

     // 
function get_username(object $pdo, string $username) { // object PDO file and String file for username
     $query = "SELECT username from users WHERE username = :username;";
     $stmt = $pdo->prepare($query);
     $stmt->bindParam(":username", $username);
     $stmt->execute();

     $result = $stmt->fetch(PDO::FETCH_ASSOC);
     return $result;
}

function get_email(object $pdo, string $email) { // object PDO file and String file for username
     $query = "SELECT username from users WHERE email = :email;";
     $stmt = $pdo->prepare($query);
     $stmt->bindParam(":email", $email);
     $stmt->execute();

     $result = $stmt->fetch(PDO::FETCH_ASSOC);
     return $result;
}