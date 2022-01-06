<?php 

	function verifica() {
		$array = array(10, 1, 2, 3, 4, );
		
		//procura por valor de indice
		/*
		$procura = array_search(, $array);

		if($procura!==false){
	    	unset($array[$procura]);
		}
		*/
		//procura por indice
		//Array
		echo '<h1>Array</h1>';
		echo '<pre>';
			print_r($array);
		echo '</pre>';
		
		//informar o elemento a ser removido para teste
		$i = 1;
		$numeroRemovido = ($array[$i]);
		$arrayN = $array;
		unset($array[$i]);
		
		
		//Array com elemento removido
		echo '<h1>Array com o elemento removido</h1>';
		echo '<pre>';
			print_r($array);
		echo '</pre>';
		
		echo 'numero removido: -> '.$numeroRemovido;

		$arrayOrdenado = $array;
		asort($arrayOrdenado);

		echo '<pre>';
			print_r($arrayOrdenado);
		echo '</pre>';

		if(array_diff($arrayN, $arrayOrdenado)) {
			echo 'true';
		} else {
			echo 'false';
		}

		
		
		//var_dump(array_diff_key($arrayN, $arrayOrdenado));
}


	verifica();


?>