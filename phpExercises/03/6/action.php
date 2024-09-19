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
        for ($i = 2; $i <= $loopCount; $i+=2) {
            echo "<li>" . $i . "回目</li>";
        }


        // do i need to put html to see the number 10 line in this page?
    ?>
</body>
</html>
