<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If - Else</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="col-md-4" style="margin-top: 20px; border: 1px solid red;">
    <?php
        
        $idade = 25;

        if($idade >= 16 and $idade < 24){
            echo "Você está apto a participar do programa Jovem Aprendiz";
        } else {
            echo "Você não está apto a participar do programa Jovem Aprendiz";
        }
    
    
    ?></div></div>
</body>
</html>