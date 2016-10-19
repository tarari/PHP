<?php
	/**
	*	Tipus de dades
	* 	Exercici 3
	*/
	$num1=34;
	$num2=34.13;
	$str='String';
	$bool=true;

?>

<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<title>Exercici 3</title>
	<link rel="stylesheet" href="../css/estil.css">
</head>
<body>
	<h1>Tipus de dades</h1>
	<p><?= $num1;?></p>
	<p><?= $num2;?></p>
	<p><?= $str;?></p>
	<p><?= ($bool == true)?"true":"false"; ?></p>
</body>
</html>