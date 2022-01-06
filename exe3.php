<?php 
	
	$array = array();

	for($i = 0; $i < 20; $i++) {
		$numero = rand(1, 10);

		$array[] = $numero;
	}

	$cont =  array_count_values($array);
	
	$cont2 = array_keys(array_filter(array_count_values($array), function($v){
		return $v == 1;
	})) ;



	echo '<h2>Numeros sorteados</h2>';
	echo '<pre>';
		print_r($array);
	echo '</pre>';

	
	echo '<h2>Numeros e suas ocorrencias</h2>';
	echo '<pre>';
		print_r($cont);
	echo '</pre>';

	echo '<h2>Numeros que não se repetem</h2>';
	echo '<pre>';
		print_r($cont2);
	echo '</pre>';
	echo '<br />';
?>