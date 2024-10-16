<?php
    // new Instance
$coinCase = new CoinCase();

    // Looping the coins 10 times
for ($i = 0; $i < 10; $i++) {
    // enter the coin type and number of coins to add
    $coinType = [500, 100, 50, 10, 5, 1][$i % 6]; // rotating the coins 6 times
    $coinCount = $i + 1; // example to increase coin count each time

    $coinCase->addCoins($coinType, $coinCount); // Add coins
    echo "Added $coinCount coins of $coinType yen." . "<br>";
    echo "<br>";
}

echo "Number of 500 yen coins: " . $coinCase->getCount(500) . "<br>" . "<br>";
echo "Number of 100 yen coins: " . $coinCase->getCount(100) . "<br>" . "<br>";
echo "Number of 50 yen coins: " . $coinCase->getCount(50) . "<br>" . "<br>";
echo "Number of 10 yen coins: " . $coinCase->getCount(10) . "<br>" . "<br>";
echo "Number of 5 yen coins: " . $coinCase->getCount(5) . "<br>" . "<br>";
echo "Number of 1 yen coins: " . $coinCase->getCount(1) . "<br>" . "<br>";

echo "<br>";
echo "Total amount of money: " . $coinCase->getAmount() . "yen.";