<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <p><h3>お選びになったメニューはこちらです</h3></p>
    <?php

        foreach ($_POST['checkbox'] as $checkbox) {
            echo "<table>" . $checkbox . ' ' . "</table>";
        }

    ?>
    
</body>
</html>

