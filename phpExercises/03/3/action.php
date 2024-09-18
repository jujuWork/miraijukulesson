<?php

// $japaneseScore = (int)$_POST["japaneseScore"];
// $mathScore = (int)$_POST["mathScore"];

// switch ($japaneseScore && $mathScore) {
//     case ($japaneseScore >= 80 && $mathScore >= 80);
//         echo "国語の点数が 80 点以上かつ算数の点数が 80 点以上素晴らしいです！";
//             break;
//     case ($japaneseScore >= 80 && !$mathScore <= 80);
//         echo "国語の点数が 80 点以上、または、算数の点数が 80 点以上良しとしましょう！";
//             break;
//     case ($japaneseScore <= 80 && !$mathScore <= 80);
//         echo "それ以外まあ、いいでしょう・・・";
//             break;

//     header("Location: /index.html");
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $japaneseScore = htmlspecialchars((int)$_POST["japaneseScore"]);
    $mathScore = htmlspecialchars((int)$_POST["mathScore"]);

    if (empty($japaneseScore)) {
        exit ();
    }

    if ($japaneseScore && $mathScore >= 80) {
        echo "国語の点数が 80 点以上かつ算数の点数が 80 点以上素晴らしいです！";
    } else if ($japaneseScore >= 80 && $mathScore <= 80) {
        echo "国語の点数が 80 点以上、または、算数の点数が 80 点以上良しとしましょう！";
    } else {
        echo "それ以外まあ、いいでしょう・・・";
    }
} else {
    header("Location: index.html");
    exit;
}