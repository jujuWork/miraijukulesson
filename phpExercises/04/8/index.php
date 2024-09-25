<?php

$products = [
    0 => [
        'product_name' => 'みかん',
        'production_area' => '愛媛県',
        'quality' => '優',
        'price' => 3000,
    ],

    1 => [
        'product_name' => 'りんご',
        'production_area' => '青森県',
        'quality' => '優',
        'price' => 5000,
    ],

    2 => [
        'product_name' => 'バナナ',
        'production_area' => 'フィリピン',
        'quality' => '優',
        'price' => 1500,
    ],
];

?>
    // foreach ($products as $products) {
    //     foreach ($products as $v) {
    //         echo $v; 
    //     }
    // };


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
                <th>Product_Name</th>
                <th>Production_Area</th>
                <th>Quality</th>
                <th>Price</th>
            </tr>

                <?php
                    foreach ($products as $products) :
                ?>
                    <tr>
                        <?php
                            foreach ($products as $v) :
                        ?>
                            <?= $v ?>
                    </tr>

                    <?php endforeach ?>
        </table>

</body>
</html>