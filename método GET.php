<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>Pegando dados da URL</h1>
	
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		echo "<h2>Valores recebidos: $n1 e $n2</h2><br/>";
		$sum = ($n1 + $n2) / 2;
		echo "A soma vale ". ($n1+$n2)."<br/>";
		echo "</br>A subtração vale ". ($n-$n2)."<br/>";
		echo "<br/>A Multiplicação vale ". ($n1*$n2)."<br/>";
		echo "<br/>A Divisão vale ". ($n1+$n2)."<br/>";
		echo "<br/>O Módulo vale ". ($n1%$n2). ."<br/>";
	?>
	
</body>

</html>

















