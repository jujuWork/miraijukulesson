<?php
    // DATABASE CONNECTION DETAILS
$host = '127.0.0.1';
$port = '8889';
$dbname = 'todolistdatabase';
$username = 'root';
$password = 'root';

try {
        // Connect to the database (MOST IMPORTANT)
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // RETRIEVE ALL DATA
    $sql = "SELECT expiration_date, todo_item, id, status FROM todo_items";
    $stmt = $pdo->query($sql);

        // FETCH ALL RESULT
    $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
// var_dump($todos);
// exit;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Form</title>

    <link rel="stylesheet" href="styles.css">

    <!-- Calendar POP UP LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<body>
    <main>
        <header>
            <h1 class="header_text">TODO リスト</h1>
        </header>

        <section>
            <form action="add.php" method="post">
                <div class="listContainer">
                    <input type="text" name="expiration_date" id="expiration_date" value="<?php echo date('Y/m/d', time() + 9 *3600); ?>">
                    <input type="text" name="todo_item" id="todo_item" placeholder="TODO リストを⼊⼒してください">

                    <button type="submit">Add</button>
                </div>
            </form>

                <!-- Javascript for click calendar view -->
            <script>
                flatpickr("#expiration_date", {
                    dateFormat: "Y/m/d",
                });
            </script>
        </section>
                
                <!-- Displaying he to-do list -->
        <aside>
            <?php if (!empty($todos)): ?>
                        <table>
                            <tr>
                                <th>期限日</th>
                                <th class="complete">TODO項目</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php foreach ($todos as $todo): ?>
                                <tr>
                                        <td>
                                            <span class="<?= $todo['status'] == 1 ? 'completed' : ''; ?>">
                                                <?= htmlspecialchars($todo['expiration_date']) ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="<?= $todo['status'] == 1 ? 'completed' : ''; ?>">
                                                <?= htmlspecialchars($todo['todo_item']) ?>
                                            </span>
                                        </td>
                                        <td>
                                            <!-- Form for each to-do item -->
                                        <form action="action.php" method="post">

                                                <!-- Hidden input for to-do item --> 
                                            <input type="hidden" name="id" value="<?= $todo['id'] ?> ">

                                                <!-- Radio button for status (the isset is to check if the status key exist in the $todo array) -->
                                            <td>
                                                <input type="radio" name="status" value="0" <?= $todo['status'] == 0 ? 'checked' : '' ?>> 未完了  <!-- Incomplete -->
                                                <input type="radio" name="status" value="1" <?= $todo['status'] == 1 ? 'checked' : '' ?>> 完了    <!-- Complete -->
                                            </td>

                                                <!-- Checkbox for deleting item -->
                                            <td>
                                                <input type="checkbox" name="delete" value="1"> 削除
                                            </td>

                                                <!-- Submit button for the form -->
                                            <td>
                                                <button type="submit" class="update">送信</button>
                                            </td>
                                        </form>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                <?php else: ?>
                    <p>No to-do items found.</p>
            <?php endif; ?>
        </aside>
        <section>
            <form action="csvDownload.php" method="post">
                <button type="button" class="csvButton">CSV Download</button>
            </form>
        </section>
    </main>
</body>
</html>

