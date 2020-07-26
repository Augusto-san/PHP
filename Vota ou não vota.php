<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>O eleitor é obrigado a votar?</h1>
	
	<?php
		$ynasc = 1993;
		$idade = 2020 - $ynasc;
	    echo "Quem nasce em $ynasc tem $idade anos de idade";
		$tipo = ($idade>=18 && $idade<65) ? "Obrigatório" : "Não-Obrigatório";
		echo "<br/>O seu voto é $tipo";	      
	?>
	
</body>

</html>

















