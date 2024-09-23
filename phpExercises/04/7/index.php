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
        $array = ["みかん", "愛媛県", "優", 3000];

        foreach ($menu as $key => $value) {
            echo "<table>" . "<td>" . $menu[$key] . "</td>" . "<td>" .  $array[$key] . "</td>" . "</table>";

            // print_r($menu = $array);
        }
    
    ?>

</body>
</html>

