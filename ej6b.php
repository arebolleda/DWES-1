<html>
<head>
   <title>Bucles 6</title>
</head>
<h1>Bucles 6: Factorial</h1>
<body>

<?php

    #Raquel Alcázar
    
    $num=5;

    $fact=1;

    for($i=0; $i<=$num; $i++){

   		$fact=1;
    	for($j=1; $j<=$i; $j++){
    		$fact=$fact*$j;
    	}
        
    }

    if($num<0){
    	echo "Se ha introducido un numero negativo.";
    }else{
    	echo "Factorial de " .$num ." = " .$fact;
    }
    
?>
</body>
</html>