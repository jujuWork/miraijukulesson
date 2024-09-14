<?php

// $score = (int)$_POST["score"];

// if ($score >=100) {
//     echo "100以上です!";
// } else {
//     echo "100未満です";
// }

$score = (int)$_POST["score"];

switch ($score) {
    case ($score <= 60 ):
        echo "残念でした、次回は頑張りましょう";
            break;
    case ($score <= 70);
        echo "合格です";
            break;
    case ($score <= 80);
        echo "まずまずです。";
            break;
    case ($score <= 100);
        echo "優秀です！";
            break;
    case ($score >= 100);
        echo "満点です!";
            break;
    }