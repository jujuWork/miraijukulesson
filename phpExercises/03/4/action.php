<?php

$ramen_menu = $_POST["ramen_menu"];

switch ($ramen_menu) {
    case ($ramen_menu == "ramen");
        echo "お客様が選ばれたのは<strong>ラーメン</strong> です。";
            break;

    case ($ramen_menu == "chashu_ramen");
        echo "お客様が選ばれたのは<strong>チャーシュー麺</strong> です。";
            break;

    case ($ramen_menu == "kotte_ramen");
        echo "お客様が選ばれたのは<strong>こってりラーメン</strong> です。";
            break;
    case ($ramen_menu == "ajidama_ramen");
        echo "お客様が選ばれたのは<strong>味玉ラーメン</strong> です。";
            break;
    case ($ramen_menu == "miso_ramen");
        echo "お客様が選ばれたのは<strong>味噌ラーメン</strong> です。";
            break;
    case ($ramen_menu == "tokusei_ramen");
        echo "お客様が選ばれたのは<strong>特製ラーメン</strong> です。";
            break;
}   