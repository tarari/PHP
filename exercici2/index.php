<?php
	$aleat=rand(1,100);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercici 2</title>
	<link rel="stylesheet" type="text/css" href="../css/estil.css">

</head>
<body>
	<h1><?php
		if($aleat>50){
			echo 'Més gran';			
		}elseif($aleat=50){
			echo 'Igual a 50';
		}else{
			echo 'Menor de 50';
		}
		?></h1>
</body>
</html>