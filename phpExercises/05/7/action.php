<?php

function isLengthWithinLimit($character, $limit) {
    if (strlen($character) > $limit) {
        return  false;
    }
        return true;
}

if (isLengthWithinLimit($_POST['chacracter'], 40)) {
    Your Count is: $character which is 50DOWN;;
} else {
    YourCount is: $character which is 50UP;
}