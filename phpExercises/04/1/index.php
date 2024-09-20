<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <? echo "果物のリスト" ?>
    <?php
        
        $array = ["みかん", "りんご", "メロン", "バナナ", "パイナップル"];
            
                foreach ($array as $array) {
                    echo "<li>" . $array . "</li>";
                }
        ?>
    
</body>
</html>

