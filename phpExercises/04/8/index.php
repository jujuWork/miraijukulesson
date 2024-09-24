<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <?php

        $menu = ["product_name", "production_area", "quality", "price"];
        $array01 = ["みかん", "愛媛県", "優", 3000];
        $array02 = ["りんご", "⻘森県", "優", 5000];
        $array03 = ["バナナ", "フィリピン", "優", 1500];

        foreach ($menu as $key => $value) {
            echo 
            "<table>" .
                "<tr> " . 
                    "<th>" . $menu[$key] . "</th>" .
                "</tr>" . 
                    "<td>" .  $array01[$key] . "</td>" . 
                    "<td>" .  $array02[$key] . "</td>" . 
                    "<td>" .  $array03[$key] . "</td>" .
                
            "</table>";

            // print_r($menu = $array);
        }
    
    ?>

</body>
</html>

