<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p><?= $_POST["loopCount"] ?> 回ループします。</p>
    <?php
    $loopCount = $_POST["loopCount"];
        for ($i = 1; $i <= $loopCount; $i++) {
            echo "<li>" . $i . "回目</li>";
        }

    ?>
</body>
</html>
