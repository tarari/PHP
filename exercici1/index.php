
<?php
/*
*	@author: Toni
*	
*    Primer exercici PHP
*
*/
	//desem a variable $d el valor de dia de mes
	$d=date('d');
	if($d<=10){
		$msg='Abierto';
	}else{
		$msg='Cerrado';
	}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<title>Exercici1</title>
	<link rel="stylesheet" href="css/estil.css">
</head>
<body>
	<h1><?= $msg; ?></h1>
	
</body>
</html>