<?php
	$direct="fotos";
	$array_fotos=array();
	if(is_dir($direct)){
		if ($hand=opendir($direct)){
			//mentre hi ha elements de fitxer
			while(($file=readdir($hand))!==false){
				if (($file!=='.')&&($file!=='..')){
				echo $file.'<br>';
				array_push($array_fotos, $file);
				}
			}
			closedir();
		}
	}
	
?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<title>Fotikos</title>
</head>
<body>
<table>
	<?php foreach ($array_fotos as $foto=>$ruta):?>
		
	<tr>
		<td><img width="100px" src="<?=$direct.'/'.$ruta;?>"></td>
	</tr>

	<?php endforeach;?>
</table>
	
</body>
</html>