<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>O eleitor é obrigado a votar?</h1>
	
	<?php
		$a = 1993;
		$idade = date("Y") - $a;
		echo "Você nasceu em $a e tem $idade anos";
		if($idade>=18){
			$v = "já pode votar";
			$idade = "já pode dirigir";
		}
		else{
			$v = "não pode votar";
			$idade = "não pode dirigir";
		}
		echo "<br/>Com essa idade você $v e também $idade";

	?>
	
</body>

</html>

















