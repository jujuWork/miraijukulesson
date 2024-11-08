<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['content'])) {
    $content = $_POST['content'];
    file_put_contents('submitted_data.txt', $content);
    echo "Data saved sucessfully";
} else {
    echo "No data submitted.";
}