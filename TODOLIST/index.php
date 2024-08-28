<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <form method="post"></form>
    <main>
        <h1>TODOリスト</h1>

        <div class="listContainer">
            <input type="date" name="date" id="date">
            <input type="text" name="name" id="listName">
            <button>追加</button>
        </div>

        <table>
            <tr>
                <th>期限日</th>
                <th>項目</th>
                <th>未完了</th>
                <th>完了</th>
                <th>削除</th>
                <th></th>
            </tr>
            <tr>
                <td>date</td>
                <td>project</td>
                <td>Unfinish_radiobutton</td>
                <td>Finished_radiobutton</td>
                <td>delete_radiobutton</td>
                <td>
                    <button>実行</button>
                </td>
            </tr>
        </table>
    </main>

</body>
</html>