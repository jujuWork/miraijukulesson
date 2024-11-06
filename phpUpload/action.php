<?php

session_start(); // Starting session to save error message

ini_set('display_erros', 1);
error_reporting(E_ALL);

    // Creating Images folder if doesn't exist

if (!is_dir('images')) {
    mkdir('images');
}
    // Move the file to the Image Folder
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    
        // Setting the file destination
    $targetFile = 'images/' . basename($_FILES['image']['name']);

        // Move the upload file to the "Images Folder"
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        header("Location: index.php"); // Redirect back to form after successful upload
        exit();
    } else {
        $_SESSION['error_message'] = "Error: Could not save the uploaded file.";
    }
} else {
    $_SESSION['error_message'] = "Error: No file uploaded or there was an upload error";
}

header("Location: index.php");
exit();