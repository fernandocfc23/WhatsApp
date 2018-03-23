<?php 
    date_default_timezone_set('America/Guatemala');
	$receptor = $_POST['receptor'];
	$mensaje =  $_POST['mensaje']; 
	$hora=date("H").":".date("i");
	$fw = fopen("mensajes.txt", "a+");
	fwrite($fw,"Emisor:fg," ."Receptor:" .$receptor .",Mensaje:" .$mensaje);
	fclose($fw);
	echo '<div class="row message-body"> <div class="col-sm-12 message-main-sender"><div class="sender"><div class="message-text">';
	echo $mensaje;
	echo '</div><span class="message-time pull-right">';
	echo $hora;
	echo '</span></div></div></div>';

?>
