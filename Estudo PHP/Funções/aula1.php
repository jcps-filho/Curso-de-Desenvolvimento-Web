<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primeira Função</title>
</head>
<body>
    <?php
    
        function boas_vindas($nome){
            echo "Bem-vindo ao curso de PHP ".$nome;
        }

        function soma($x, $y){
            return $x + $y;
        }

        boas_vindas('José');

        echo '<br><br>';

        echo soma(10, 2);
    
    ?>
</body>
</html>