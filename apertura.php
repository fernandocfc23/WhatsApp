<?php 
	$fp = fopen("mensajes.txt", "r");
	$i=0;
	while(!feof($fp)) {
		$linea[$i] = fgets($fp);
		echo $linea[$i];
		$i++;
	}
	fclose($fp);
	json_encode($linea);
?>