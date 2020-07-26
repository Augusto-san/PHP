<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>O aluno passou ou não?</h1>
	
	<?php
		$A = 10; //nota 1
		$B = 1; //nota 2
		$C = 6; //nota 3
        $D = 7; //nota 4
	    $med = ($A+$B+$C+$D)/4;
		$situ = ($med>=6) ? "Aprovado" : "Reprovado";
	    echo "A média foi $med <br/>O aluno está $situ";
	?>
	
</body>

</html>

















