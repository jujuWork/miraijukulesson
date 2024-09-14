<?php

// $score = (int)$_POST["score"];

// if ($score >=100) {
//     echo "100以上です!";
// } else {
//     echo "100未満です";
// }

$score = true;

switch ($score) {
    case ($score <= 60 ):
        echo "your score is less that 100";
            break;
    case ($score <= 70);
        echo "your score is less that 90";
            break;
    }