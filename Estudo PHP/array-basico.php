<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Básico</title>
</head>
<body>
    <?php
    
    $lista_compras[0] = 'Feijão';
    $lista_compras[1] = 'Arroz';
    $lista_compras[2] = 'Batata';
    $lista_compras[3] = 'Ketchup';
    
    for($i = 0; $i < 4; $i++){
        echo "$lista_compras[$i] ";
    }

    echo '<br><br>';

    var_dump($lista_compras);

    echo '<br><br>';

    print_r($lista_compras);
    ?>
</body>
</html>