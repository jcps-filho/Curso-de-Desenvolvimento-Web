<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>While</title>
	</head>

	<body>
        <?php 

            $n1 = 7;
		
            while($n1 > 3){
                echo $n1;
                $n1--;
                echo "<br>";
            }

            while($n1 < 8){
                echo $n1;
                $n1++;
                echo "<br>";
            }

		?>
	</body>
</html>