<?php
//fazer o array com numeros random e escrever o dia da semana
	$num=rand(1,7);
	echo $num. '<br>';
	if ($num==1) {
		echo 'Domingo';
	}
	elseif ($num==2) {
		echo 'Segunda-feira';
	}
	elseif ($num==3) {
		echo 'Terça-feira';
	}
	elseif ($num==4) {
		echo 'Quarta-feira';
	}
	elseif ($num==5) {
		echo 'Quinta-feira';
	}
	elseif ($num==6) {
		echo 'Sexta-feira';
	}
	elseif ($num==7) {
		echo 'Sabado';
	}
?>