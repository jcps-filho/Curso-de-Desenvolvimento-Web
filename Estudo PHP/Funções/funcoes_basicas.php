<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções Basicas</title>
</head>
<body>
    <?php
        //isset
        $nome = "";
        if(isset($nome)){
            echo "Variavel iniciada";
        } else {
            echo "Variavel não iniciada";
        }

        echo "<br><br>";

        //empty
        //Só retorna true quando -> '', 0, '0', false, null, array()
        //Qualquer outra condição retorna false
        $nome1 = '';
        if(empty($nome1)){
            echo "Variavel vazia";
        } else {
            echo "Variavel com conteudo";
        }

        echo "<br><br>";

        //isnumeric
        //Retorna true quando é numero
        $num = '12a';
        if(is_numeric($num)){
            echo "É um número";
        } else {
            echo "Não é um número";
        }
    ?>
</body>
</html>