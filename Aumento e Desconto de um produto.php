<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>Calculando Aumento e Desconto em um Produto</h1>
	
	<?php
		$preco = 20;
		echo "O preço do produto é R$ ". number_format($preco, 2);
		$preco += $preco*10/100;
		echo "<br/> Se você der 10% de aumento, o produto valerá ". number_format($preco, 2);
		$preco -= $preco*10/100;
		echo "<br/> Porém, se você der 10% de desconto, o valor passará a ser ". number_format($preco, 2);
	?>
	
</body>

</html>

















