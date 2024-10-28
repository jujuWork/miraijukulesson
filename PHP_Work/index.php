<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <form action="add.php" method="post" class="form_add">
        <div class="container">
            <label for="todo_item">TODO Item:</label>
            <input type="text" name="todo_item" id="todo_item" required> <br><br>

            <label for="exp_date">Expiration Date:</label>
            <input type="date" name="exp_date" id="exp_date" required value="<?php echo date('Y-m-d', strtotime('now Asia/Tokyo')); ?>" required> <br><br>
        
            <input type="submit" value="Add TODO">
        </div>
    </form>

</body>
</html>