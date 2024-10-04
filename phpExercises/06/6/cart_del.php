<?php

// Session Start
session_start();

// Session Regenerate ID
session_regenerate_id();

// deleting cart for the session with specified index
unset($_SESSION['cart'][$_POST['id']]);

// if the session cart is 0 , delete the session cart
if (count($_SESSION['cart']) == 0) {
    unset($_SESSION['cart']);
}

// back to the cart_show.php
header('location: ./cart_show.php');
exit;