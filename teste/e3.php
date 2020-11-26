<?php
//criar o array com numeros random
	$nums = array();
	for ($i=0; $i <15 ; $i++) { 
		$nums[]=rand(1,1000);
	}

//ver se é par ou impar e escrever a posição e o numero
	foreach ($nums as $chave => $num) {
		if ($num%2==0) {
			echo 'Posição: '.$chave. ' numero: ' .$num. ' par';
		}
		else{
			echo 'Posição: '.$chave. ' numero: ' .$num. ' impar';
		}
		echo '<br>';
	}
?>