<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>Algumas Funções Aritméticas</h1>
	
	<?php
		$nx = 8;
		$ny = 2;
		echo "O valor absoluto de $ny é ". abs($ny);
		echo "<br/>O valor de $nx<sup>$ny</sup> é ". pow($nx, $ny);
		echo "<br/>A raiz de $nx é ". sqrt($nx);
		echo "<br/>O valor de $ny arredondado e ". round($ny); /*pode-se substituir round por ceil ou floor, o ceil arredonda para cima, então 3.1 vira 4, enquanto o floor arredonda para baixo, logo 3.9 vira 3*/
		echo "<br/>A parte inteira de $ny é ". intval($ny);
		echo "<br/>O valor de $nx em moeda é ". number_format($nx, 2, ",", ".");
	?>
	
</body>

</html>

















