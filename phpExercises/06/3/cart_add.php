<?php

// Starting a Session
session_start();

// Generating ID Request
session_regenerate_id();

// Saving the Post value in Session
$_SESSION['cart'][] = $_POST;

// index.php back button
header('location: ./');
exit;