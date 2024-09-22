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

        // $array_num = 
        // [
        //     "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11"
        // ];

        $array_num = range(0,11);
            
                // foreach ($array as $array) {
                //     echo "<table>" . "<td>" .  $array . "</td>" . "</table>";
                // }
        
        for ($i = 0; $i < sizeof($array_num); $i++) {
            echo "<table>" . "<td class='array_num'>" . $array_num[$i] . "</td>" . ' ' . "<td class='array_menu'>" . $array[$i] . "</td>" . "</table>";
        }

    ?>
    
</body>
</html>

