<?php

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
        echo "File Upload Successfull";
    } else {
        echo "File Upload Error";
    }
} else {
    echo "Error: No file uploaded";
}