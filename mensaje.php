<?php 
	$receptor = $_POST['receptor'];
	$mensaje =  $_POST['mensaje']; 
	$fw = fopen("mensajes.txt", "a+");
	fwrite($fw, "Receptor:" .$receptor ."," ."Mensaje:" .$mensaje);
	fclose($fw);
?>
