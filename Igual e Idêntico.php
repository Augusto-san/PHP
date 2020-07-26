<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>Igual e Idêntico em php</h1>
	
	<?php
		$A = 3; //inteiro
		$B = "3"; //string	
		$C = ($A == $B) ? "Sim" : "Não"; //Igual
		echo "As variáveis A e B são iguais? $C <br/>"; /*Note que, usando esse operador ==, a resposta será Sim, porém, se mudar para o operador ===,  a resposta será Não. Isso porque as variáveis são iguais, porém não idênticas. Note que a variável A é inteiro, enquanto a variável B é String */
		$D = ($A === $B) ? "Sim" : "Não"; //Idêntico
		echo "As variáveis A e B são idênticas? $D";
	?>
	
</body>

</html>

















