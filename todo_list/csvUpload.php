<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    
    <form action="csvUpdate.php" method="post" enctype="multipart/form-data">
        <label for="file">Upload CSV:</label>
            <input type="file" name="file" id="file" required>
                <button type="submit">Upload</button>
    </form>

</body>
</html>