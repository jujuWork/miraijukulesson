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
        'num' => 2
    ],

    2 => [
        'product_name' => 'バナナ',
        'production_area' => 'フィリピン',
        'quality' => '優',
        'price' => 1500,
        'num' => 3
    ],
];

foreach ($products as $key => $value) {
    print_r($products);
}
