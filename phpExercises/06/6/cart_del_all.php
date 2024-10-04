<?php

// Starting Session
session_start();

// Session Regenerate ID
session_regenerate_id();

// Emptying Cart
unset($_SESSION['cart']);

// back to cart_show.php
header('location: ./cart_show.php');
exit;