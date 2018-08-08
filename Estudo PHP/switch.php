<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Switch</title>
    
</head>
<body>
    <div class="container">
        <?php
            $opcao = 2;
            switch($opcao){
                case '1':
                    echo "Caso 1";
                break; 

                case '2':
                    echo "caso 2";
                break;

                case '3':
                    echo "caso 3";
                break;

                default:
                    echo "Opção inválida";
                break;
            }
        ?>
    </div>
</body>
</html>