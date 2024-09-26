<?php

$products = [
    0 => [
        'product_name' => 'みかん',
        'production_area' => '愛媛県',
        'quality' => '優',
        'price' => 3000,
        'num' => 5,
    ],

    1 => [
        'product_name' => 'りんご',
        'production_area' => '青森県',
        'quality' => '優',
        'price' => 5000,
        'num' => 2,
    ],

    2 => [
        'product_name' => 'バナナ',
        'production_area' => 'フィリピン',
        'quality' => '優',
        'price' => 1500,
        'num' => 3,
    ],
];

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
                <th>Product Name</th>
                <th>Production Area</th>
                <th>Quality</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <?php
                $sum = 0;
                foreach ($products as $product) : ?>
                    <tr>
                        <td><? $product['product_name'] ?></td>
                        <td><? $product['production_area'] ?></td>
                        <td><? $product['quality'] ?></td>
                        <td><? $product['price'] ?></td>
                        <td><? $product['num'] ?></td>
                        <td><? $product['price'] * $product['num'] ?></td>
                    </tr>

                    <?php
                     $sum += $product['price'] * $product['num']; 
                       endforeach ?>
        </table>

        total: <? $sum ?>

</body>
</html>