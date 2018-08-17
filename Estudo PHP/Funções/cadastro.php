<?php

    if(isset($_POST['nome']) && empty($_POST['nome'])){
        echo 'Preencha o nome completo <br>';
    }

    if(isset($_POST['cpf']) && empty($_POST['cpf'])){
        echo 'Preencha o CPF <br> ';
    }

    if(isset($_POST['cpf']) && !is_numeric($_POST['cpf'])){
        echo 'Utilize apenas números no CPF<br>';
    }

?>

<form action="" method="post">
    <label for="">
        Nome completo*:
        <input type="text" name="nome">
    </label>

    <label for="">
        CPF*:
        <input type="text" name="cpf">
    </label>
    
    <input type="submit" value="cadastrar">
</form>