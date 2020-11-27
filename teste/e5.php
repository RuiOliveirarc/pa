<?php
	$dia=$_POST["diasemana"];
	$mes=$_POST["mes"];

	$diasemana = array(
		'segunda',
		'terça',
		'quarta',
		'quinta',
		'sexta'
	);
	$meses = array(
		'janeiro',
		'fevereiro',
		'março',
		'abril',
		'maio',
		'junho',
		'julho',
		'agosto',
		'setembro',
		'outubro',
		'novembro',
		'dezembro'
	);
	echo "Dias da semana: ";
	echo "<br>";
	foreach ($diasemana as $dias) {
		echo $dias. '<br>';
	}
	echo "<br>";
	echo "Mêses: ";
	echo "<br>";
	foreach ($meses as $mese) {
		echo $mese. '<br>';
	}
	
	echo "<br>";
	echo "Dia escolhido: ".$mes;
	echo "<br>";
	echo "Mês escolhido: ".$dia;

?>