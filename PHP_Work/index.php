<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Form</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <div id="form_header">
            <label for="Todo List">TODOリスト</label>
        </div>
        <div id="form_input">
            <form action="add.php" method="post">
                <input type="date" name="expiration_date" id="expiration_date" value="<?php echo date('Y/m/d', time() + 9 *3600); ?>" class="input_date">

                <input type="text" name="todo_item" class="input_text_list" placeholder="TODO List ...">

                <button type="submit">Add</button>
            </form>
        </div>
    </main>
</body>
</html>