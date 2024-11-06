<?php
    session_start(); // Start session to store error message
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
        <!-- Display error message if it exist -->
    <?php
        if (isset($_SESSION['error_message'])) {
            echo "<p style='color: red;'>" . $_SESSION['error_message'] . "</p>";
            unset($_SESSION['error_message']); // Clearing message after display
        }
    ?>

        <!-- Upload form for image file -->
    <form action="action.php" method="post">
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>

        <!-- Link to view upload image as a slideshow -->
    <p>
        <a href="show.php">View Upload Image as Slideshow</a>
    </p>
</body>
</html>