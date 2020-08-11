<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>Calculando o Fatorial de um número inteiro</h1>
	
	<?php

		$v = 5; //um número aleatório, nesse caso o cinco
		echo "calculando o fatorial de $v <br/>";
		$c = $v; //variável de controle
		$fat = 1;
		do {
			$fat = $fat * $c;
			echo"$c x ";
	            	$c--;
		}while($c>=1);
		echo "<br/> $v! = $fat";
	?>
	
</body>

</html>

















