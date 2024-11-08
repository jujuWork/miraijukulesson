<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileUpload'])) {
    $fileTmpPath = $_FILES['fileUpload']['tmp_name'];
    $fileName = $_FILES['fileUpload']['name'];

        //Check if the upload file is a text file
    $fileType = mime_content_type($fileTmpPath);
    if ($fileType === 'text/plain') {
        $fileContent = file_get_contents($fileTmpPath); // Read the file content

            // Display the file content
        echo "<h2>Content of $fileName: </h2>";
        echo "<pre>$fileContent</pre>";
    } else {
        echo "Please upload a valid text (.txt) file.";
    }
} else {
    echo "No file uploaded";
}