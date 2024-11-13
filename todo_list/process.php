<?php

    // Load required files
require_once './class/db/Base.php';
require_once './class/db/TodoItems.php';

    // Create an instance of TodoItems
$db = new TodoItems();

    // Call the selectAll() method to get all todo items
$list = $db->selectAll();

    // Display the retrieved items (for testing)
echo "<pre>";
    print_r($list);
echo "</pre>";