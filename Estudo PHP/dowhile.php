<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Do while</title>
	</head>

	<body>
        <?php 
        
            $n1 = 7;
		
            do {
                echo $n1;
                echo "<br>";
                $n1--;
            } while($n1 > -1);

		?>
	</body>
</html>