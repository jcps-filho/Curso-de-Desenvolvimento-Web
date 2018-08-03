<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variáveis</title>
</head>
<body>
    <?php
    
    //int
    $valor_inteiro = 10;

    //float
    $valor_real = 15.3;

    //boolean
    $estado = true; //false

    //strings
    $texto = 'curso de php';

    //modificando variáveis

    echo $valor_inteiro;
    echo '<br>';
    echo $valor_inteiro = $valor_inteiro + 10;

    echo '<br>';

    echo $valor_real;
    echo '<br>';
    echo $valor_real = $valor_real - 2.3;

    echo '<br>';

    //concatenação

    echo $texto;
    echo '<br>';
    echo "Aula de concatenação de string do $texto";
    
    ?>
</body>
</html>