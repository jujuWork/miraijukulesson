<?php
    // sesssion is starting ...
session_start();
    // requesting a new session ID ...
session_regenerate_id();


$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="action.php" method="post">
        <label for="message">Your message:</label> <br>
            <input type="text" name="message" value="<?= $message ?>">  <br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>