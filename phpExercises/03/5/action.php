<?php

// $loopCount = (int)$_POST["loopCount"];

for ($i = 1; $i <= $_POST["loopCount"]; $i++) {
    echo "<li>" . $i . "回目</li>";
}