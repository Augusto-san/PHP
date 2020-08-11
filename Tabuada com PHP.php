<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rascuhos de PHP</title>
</head>

<body>
	<h1>Tabuada</h1>

<?php

	$numero = 5;
    $c = 0;
    Do {
    	$operacao = $c / $numero;
        echo "$numero / $c = $operacao <br/>";
        $c++;
    } while ($c<=10);

	echo "================================ <br/>";

    	$numero = 5;
    $c = 0;
    Do {
    	$operacao = $c * $numero;
        echo "$numero x $c = $operacao <br/>";
        $c++;
    } while ($c<=10);
    
    	echo "================================ <br/>";
    
    	$numero = 5;
    $c = 0;
    Do {
    	$operacao = $numero - $c;
        echo "$numero - $c = $operacao <br/>";
        $c++;
    } while ($c<=10);
    
    	echo "================================ <br/>";
        
    	$numero = 5;
    $c = 0;
    Do {
    	$operacao = $c + $numero;
        echo "$numero + $c = $operacao <br/>";
        $c++;
    } while ($c<=10);
    
?>
	
</body>

</html>

















