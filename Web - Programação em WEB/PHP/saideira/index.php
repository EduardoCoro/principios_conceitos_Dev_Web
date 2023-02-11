<?php 
	function pularlinhas($qtde) : void{
		for ($i=0; $i < $qtde ; $qtde++){
				echo "<br>";
		}
	}
?>

<?php

   echo ' Olá Mundo! ';
   $var= print('hello');
   
   echo " World! $var";
   // echo 'world! $var';
   
   if(isset($var));
	echo $var;
  
	$pi= 3.14159;
	
	for($i=0; $i < 3; $i++)
	{
		echo "<p> $i - O valor de PI é $pi <br><br>";
	}
	
	echo "<br>";
	$i =0;
	do{
		echo "<p>$i - O valor de PI é $pi <br><br>";
		$i++;
	}while($i < 3);
?>

<br><span> Oi, tudo bem? </span>

<?php
    
	pularlinhas(2);
	$x = TRUE; //um Booleano
	echo gettype($x);
	var_dump($x);
	
	pularlinhas(2);
	$x = 'foo'; //uma String
	echo gettype($x);
	var_dump($x);
	
	pularlinhas(2);
	$x = 123; //um Inteiro
	echo gettype($x);
	var_dump($x);
	
	
	
?>