<?php

$num1 = (int)$_POST["num1"];
$num2 = (int)$_POST["num2"];
$num3 = (int)$_POST["num3"];


// MAXIMUM
$max = max($num1, $num2, $num3);

// MINIMUM
$min = min($num1, $num2, $num3);

//AVERAGE
$ave = ave($num1, $num2, $num3);

function ave($num1, $num2, $num3) {
   
    // ADDING THE THREE NUMBERS AND DIVIDING BY THREE TO GET THE AVERAGE WHOLE NUMBER
    $ave = round(($num1 + $num2 + $num3) / 3);
    return $ave;
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
    
    <table>
        <tr>
            <th>MAXIMUM</th>
            <th>MINIMUM</th>
            <th>AVERAGE</th>
        </tr>
        <tr>
            <td><?= $max ?></td>
            <td><?= $min ?></td>
            <td><?= $ave ?></td>
        </tr>
    </table>

</body>
</html>