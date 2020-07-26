<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>Estrutura Switch case php</h1>
	
	<?php
    	$dias =1;
		switch ($dias){
			case 2: //Segunda
			case 3: //Terça
			case 4: //Quarta
			case 5: //Quinta
			case 6: //Sexta
				echo "Levanta e vai estudar!";
				break;
			case 7: //Sábado
			case 8: //Domingo
				echo "Descanse, gafanhoto.";
				break;
			default:
				echo "Dia da semana inválido";
		}

	?>

/*observe que, dependendo do número digitado, que corresponde ao dia da semana escolhido, o algoritmo exibe uma mensagem.*/
	
</body>

</html>

















