<?php

$products = 
[
    0 => [
        'product_name' => 'みかん',
        'price' => '300',     
    ],

    1 => [
        'product_name' => 'りんご',
        'price' => '500',
    ],

    2 => [
        'product_name' => 'バナナ',
        'price' => '150',
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
        <thead>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($products as $v) : ?>
                <form action="./cart_add.php" method="post">
                    <tr>
                        <td>
                            <?= $v['product_name'] ?>
                            <input type="hidden" name="product_name" value="<?= $v['product_name'] ?>">
                        </td>
                        <td>
                            <?= $v['price'] ?>円
                            <input type="hidden" name="price" value="<?= $v['price'] ?>">
                        </td>
                        <td>
                            <input type="text" name="num" style="width: 3rem; text-align: center;">
                        </td>
                        <td>
                            <input type="submit" value="Add to cart">
                        </td>
                    </tr>
                </form>
            <?php endforeach ?>
        </tbody>
    </table>

    <a href="./cart_show.php">Go to Cart</a>

</body>
</html>