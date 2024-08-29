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
                <th class="date">期限日</th>
                <th class="project">項目</th>
                <th class="unfinish">未完了</th>
                <th class="finish">完了</th>
                <th class="delete" >削除</th>
                <th class="space"></th>
            </tr>
            <tr>
                <td class="date">2020-01-01</td>
                <td class="project">
                    元旦なので初詣に行く
                </td>
                <td class="unfinish">
                    <input type="radio" name="unfinish" value="unfinish">
                </td>
                <td class="finish">
                    <input type="radio" name="finish" value="finish" id="finish">
                </td>
                <td class="delete">
                    <input type="checkbox" name="delete" value="delete" id="delete">
                </td>
                <td>
                    <button>実行</button>
                </td>
            </tr>
            <tr>
                <td class="date">2020-01-07</td>
                <td class="project">ワークで難波神社へ初詣に行</td>
                <td class="unfinish">
                    <input type="radio" name="unfinish" value="unfinish">
                </td>
                <td class="finish">
                    <input type="radio" name="finish_" value="finish" id="finish_02">
                </td>
                <td class="delete">
                    <input type="checkbox" name="delete" value="delete" id="delete_02">
                </td>
                <td>
                    <button>実行</button>
                </td>
            </tr>
            <tr>
                <td class="date">2020-02-03</td>
                <td class="project">ITワーク・PHP開発者のためのBootstrap4入門</td>
                <td class="unfinish">
                    <input type="radio" name="unfinish" value="unfinish">
                </td>
                <td class="finish">
                    <input type="radio" name="finish" value="finish" id="finish_03">
                </td>
                <td class="delete">
                    <input type="checkbox" name="delete" value="delete" id="delete_03">
                </td>
                <td>
                    <button>実行</button>
                </td>
            </tr>
        </table>
    </main>

</body>
</html>