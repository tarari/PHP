<?php
	if($_GET){
		$valor_a_buscar=$_GET['num'];
	}else{
		$valor_a_buscar=45;
	}
	define('LON',100);
	//Crear array
	$aleatori=array();
	for($i=0;$i<LON;$i++){
		array_push($aleatori, rand(1,100));
	}
	// 
	//var_dump($aleatori);

	function array_bus($array,$valor){
		for($i=0;$i<count($array);$i++){
			if($array[$i]==$valor){
				echo 'FOUND: '.$valor.' pos:'.$i.'<br>';
			}
		}

	}

	
	array_bus($aleatori,$valor_a_buscar);
