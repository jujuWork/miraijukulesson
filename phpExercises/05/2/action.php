<?php

$decimal = $_POST['decimal'];

// ROUND UP
$ceil = ceil($decimal);

// ROUND DOWN
$floor = floor($decimal);

// ROUND TO THE WHOLE NUMBER
$round = round($decimal);

// function round($decimal) {
//     //rounding off numbers
//     $round = round($decimal);
//     return $round;
// }
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
            <th>Round Up</th>
            <th>Round Down</th>
            <th>Round Whole</th>
        </tr>
        <tr>
            <td><?= $ceil ?></td>
            <td><?= $floor ?></td>
            <td><?= $round ?></td>
        </tr>
    </table>

</body>
</html>