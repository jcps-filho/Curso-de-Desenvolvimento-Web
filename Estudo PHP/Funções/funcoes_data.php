<?php 

    //date - Y = 2018 - y = 18 - month - day - hour:min http://php.net/manual/pt_BR/function.date.php 
    $data = date("d/m/Y H:i");
    
    echo "Data: $data";

    echo "<br><br>";

    //strtomtime
    $data_inicial = '2018-08-18';
    $data_final = '2018-08-30';

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    $diferenca_times = $time_final - $time_inicial;

    $diaSegundos = 24*60*60; //Quantos segundos tem um dia

    echo $diferenca_dias = $diferenca_times / $diaSegundos;
?>