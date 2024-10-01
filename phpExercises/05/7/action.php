<?php

function isLengthWithinLimit($character, $limit) {
    if (strlen($character) > $limit) {
        return  false;
    }
        return true;
}

if (isLengthWithinLimit($_POST['character'], 50)) {
    echo "Your Count is  which is 50DOWN";
        //入力された文字列は50文字以内です。
} else {
    echo "Your Count is: which is 50UP";
        //入力された文字列は51文字以上あります。
}