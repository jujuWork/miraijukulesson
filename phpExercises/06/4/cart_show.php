<?php

// Starting Session
session_start();

// Session Regenerate ID
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
            <th>Subtotal</th>
            <th></th>
        </thead>
        <?php
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) :
        ?>
            <tbody>
                <?php
                    foreach ($_SESSION['cart'] as $k => $v) :
                ?>
                    <form action="./cart_del.php" method="post">
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
                                <?= $v['num'] ?>
                                <input type="hidden" name="num" value="<?= $v['num'] ?>">
                            </td>
                            <td>
                                <?php
                                    // Subtotal Amount
                                    // if there is no (int) there will be an error in this code because of false multiplication
                                    $sum = (int)$v['price'] * (int)$v['num']; 
                                    // Adding the Subtotal Amount to the total
                                    $total += $sum;
                                    // Show Subtotals
                                    echo $sum . '円';
                                ?>
                            </td>
                            <td>
                                <input type="hidden" name="id" value="<?= $k ?>">
                                <input type="submit" value="delete">
                            </td>
                        </tr>
                    </form>
                <? endforeach ?>
            </tbody>
        <?php endif ?>
    </table>
    <p>Total Amount: <?= $total ?>円</p>
    <p>
        <a href="./cart_del_all.php">Empty Cart</a>
    </p>
    <p>
        <a href="./">Back</a>
    </p>
</body>
</html>