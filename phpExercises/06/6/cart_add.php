<?php


// Starting Session
session_start();

// Session Regenerate ID
session_regenerate_id();

// Saving the posted valued as is
$_SESSION['cart'][] = $_POST;

var_dump($_SESSION['cart']);
exit;

// back to the index.php
header('Location: index.php');
exit;