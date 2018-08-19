<?php

    //is_array - verifica se uma variavel é um array
    $texto = array('Curso','PHP');
    $retorno = is_array($texto);
    if($retorno){
        echo 'É um array';
    } else {
        echo 'Não é um array';
    }

    echo "<br><br>";

    //in_array - Verifica se um valor existe em uma array
    $array_verificar = array('Curso','PHP');
    $arrayTeste = in_array('PHP', $array_verificar);
    if($arrayTeste){
        echo 'Está presente no array';
    } else {
        echo 'Não está presente no array';
    }

    echo "<br><br>";

    //array_keys
    $produtos = array(10=>'Notebook', 11=>'Teclado');
    $chaves_array = array_keys($produtos);
    var_export($chaves_array);

    echo "<br><br>";

    //sort e asort - asort mantem os indices
    $frutas = array(0=>'Banana', 1=>'Amora', 2=>'Caju');
    sort($frutas);
    var_export($frutas);

    echo "<br><br>";

    //count
    $itens_array = count($frutas);
    echo $itens_array;

    echo "<br><br>";

    //array_merge
    $novo_array = array_merge($texto, $produtos, $frutas);
    var_export($novo_array);

    echo "<br><br>";

    //Explode
    $data = '18/08/18';
    $retorno1 = explode("/", $data);
    var_export($retorno1);

    echo "<br><br>";

    //Implode
    $nova_string = implode("/", $retorno1);
    var_export($nova_string);
?>