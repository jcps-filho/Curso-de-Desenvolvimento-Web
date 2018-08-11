<?php 

    $login = $_POST['login'];

    $senha = $_POST['senha'];

    function valida_login($login, $senha){

        $login_bd = 'carlos';
        $senha_bd =  123;

        if($login == $login_bd && $senha == $senha_bd){
            return true;
        }

        return false;
    }
 
    $usuario_validado = valida_login($login, $senha);

    if($usuario_validado){
        echo "Acesso liberado";
    } else {
        echo "Login ou senha errados";
    }

?>