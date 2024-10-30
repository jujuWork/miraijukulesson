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
    $sql = "SELECT expiration_date, todo_item FROM todo_items";
    $stmt = $pdo->query($sql);

        // FETCH ALL RESULT
    $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Form</title>

    <link rel="stylesheet" href="styles.css">

    <!-- Calendar POP UP -->
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
                                <th>TODO項目</th>
                            </tr>
                            <?php foreach ($todos as $todo): ?>
                                <tr>
                                    <td><?= htmlspecialchars($todo['expiration_date']) ?></td>
                                    <td><?= htmlspecialchars($todo['todo_item']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
            <?php endif; ?>
        </aside>
    </main>
</body>
</html>