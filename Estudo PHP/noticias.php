<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Notícias </title>
</head>
<body>
    <?php

        $noticias = array();

        $noticias[1]['titulo'] = 'Lorem Ipsum 1';
        $noticias[1]['conteudo'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 1';

        $noticias[2]['titulo'] = 'Lorem Ipsum 2';
        $noticias[2]['conteudo'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 2';

        $noticias[3]['titulo'] = 'Lorem Ipsum 3';
        $noticias[3]['conteudo'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 3';

        //Usando while
        /*$i = 1;
        while($i < 4){
            echo $noticias[$i]['titulo'];
            echo '<br>';
            echo $noticias[$i]['conteudo'];
            echo '<br><br>';
            $i++;
        }*/

        //Usando o for
        /*for($i = 1; $i < 4; $i++){
            echo $noticias[$i]['titulo'];
            echo '<br>';
            echo $noticias[$i]['conteudo'];
            echo '<br><br>';
        }*/

        //Usando o do while
        $i = 1;
        do {
            echo $noticias[$i]['titulo'];
            echo '<br>';
            echo $noticias[$i]['conteudo'];
            echo '<br><br>';
            $i++;
        } while($i < 4);

    ?>
</body>
</html>