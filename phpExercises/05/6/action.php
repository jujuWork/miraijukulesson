<?php

$test_date = '2024/01/01';
$date_arr = explode('/', $test_date);

if (checkdate($date_arr[0], $date_arr[1], $date_arr[2])) {
        return;
}

// $date = $_POST["date"];
// function isDate($date) {
//     $d = explode('/', $date);
//     return checkdate($d[1], $d[2]. $d[0]);
// }