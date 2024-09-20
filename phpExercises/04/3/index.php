<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <? echo "<table class='menu'> " . "<td>" . "メニュー" . "</td>" . "</table>" ?>
    <?php
        
        $array = 
        [
            "Aランチ", "Bランチ", "Cランチ", "唐揚げ定食", "とんかつ定食", 
            "エビフライ定食", "オムライス", "カレーライス", "ごはん大",
            "ごはん小", "ビール", "烏龍茶"
        ];
            
                foreach ($array as $array) {
                    echo "<table>" . "<td>" . $array . "</td>" . "</table>";
                }

    ?>
    
</body>
</html>

