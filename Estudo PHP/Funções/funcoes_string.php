<?php 

    //strtolower - converte a string para letras minusculas
    $texto = "Curso Completo de PHP";
    echo strtolower($texto);

    echo "<br><br>";

    //strtoupper - converte a string para letras maiusculas
    echo strtoupper($texto);

    echo "<br><br>";

    //ucfirst - converte apenas a primeira letra para maisuculo
    $texto1 = "curso completo de php";
    echo ucfirst($texto1);

    echo "<br><br>";

    //strlen
    echo strlen($texto);
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
    $total = strlen($cpf);
    if($total != 11 && $cpf != ''){
        echo "Digite um valido";
    }

    echo "<br><br>";

    //strreplace
    $valor = "12,40";
    echo str_replace(",",".", $valor);

    echo "<br><br>";

    //substr
    echo substr($texto, 0, 5);

    echo "<br><br>";
    

?>

<form action="">
    <label for="">CPF
        <input type="text" name="cpf">
    </label>
    <input type="submit" value="cadastrar">
</form>