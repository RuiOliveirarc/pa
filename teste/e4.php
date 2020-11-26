<?php
	
	$maior=-9999999;
	$menor=9999999;
	$soma=0;
	$produto=1;

//criar um array com numeros random
	$nums = array();
	for ($i=0; $i <15 ; $i++) { 
		$nums[]=rand(1,10000);
	}

//ver qual o numero maior e menor 
	foreach ($nums as $chave => $num) {
		if ($num>$maior) {
			$maior=$num;
		}
		if ($num<$menor) {
			$menor=$num;
		}

//calcular o produto e a média
		$soma+=$num;
		$produto*=$num;
	}
	$media=$soma/15;

//escrever tudo
	echo "Numero maior: " .$maior;
	echo "<br>";
	echo "Numero menor: " .$menor;
	echo "<br>";
	echo "Média: ".$media;
	echo "<br>";
	echo "Produto: ".$produto;
?>