<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Descontos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>

	<body>
        <?php

            require_once("funcoes_desconto.php");

            $valor_total = 550;
            $desconto = 10;
            $valor_desconto = calcula_desconto($valor_total, $desconto);

        ?>
        <div class="container">

            <h3>Valor total: R$ <?php echo $valor_total; ?></h3> <br>
            <h3>Desconto de: <?php echo $desconto; ?>%</h3> <br>
            <h3>Valor total com desconto: R$ <?php echo $valor_desconto; ?></h3>
		    
        </div>

	</body>
</html>