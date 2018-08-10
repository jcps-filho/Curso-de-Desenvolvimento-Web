<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> For </title>
</head>
<body>
    <?php
    
        for($i = 10; $i > 0; $i = $i - 2){
            if($i == 2){
               echo "$i.";
               break;
            }
            echo "$i, ";
        }

    ?>
</body>
</html>