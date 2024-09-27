<?php

$characters = $_POST['characters'];

// STRING COUNTS
$len = strlen($characters);

// STRING FIRST CHARACTER
$firstChar = substr($characters, 0, 1);

// STRING LAST CHARACTER
$lastChar = substr($characters, $len -1, 1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>String Lenght</th>
            <th>String First Character</th>
            <th>String Last Character</th>
        </tr>
        <tr>
            <td><?= $len ?></td>
            <td><?= $firstChar ?></td>
            <td><?= $lastChar ?></td>
        </tr>
    </table>
</body>
</html>