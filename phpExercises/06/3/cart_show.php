<?php
// Starting Session
session_start();

// Requesting Session ID
session_regenerate_id();

$total = 0;
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
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
        </thead>
        <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $k => $v) : ?>
                    <form action="./cart_del.php">
                        <tr>
                            <td>
                                <?= $v['product_name'] ?>
                                <input type="hidden" name="product_name" value="<?= $v['product_name'] ?>">
                            </td>
                            <td>
                                <?=$v['price'] ?>円
                                <input type="hidden" name="price" value="<?= $v['price'] ?>">
                            </td>
                            <td>
                                <?= $v['num'] ?>
                                <input type="hidden" name="num" value="<?= $v['num'] ?>">
                            </td>
                        </tr>
                    </form>
                <?php endforeach ?>
            </tbody>
        <?php endif ?>
    </table>
</body>
</html>