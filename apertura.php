<?php 
	$receptor = $_POST['receptor'];
	$fp = fopen("mensajes.txt", "r");
	$i=0;
	while(!feof($fp)) {
		$porciones = explode(",", fgets($fp));
		$emisor = explode(":",$porciones[0]);
		$receptorG = explode(":",$porciones[1]);
		$mensaje = explode(":", $porciones[2]);
		if($receptor==$emisor[1])
		{
			echo '<div class="row message-body">
            <div class="col-sm-12 message-main-receiver">
              <div class="receiver">
                <div class="message-text">';
				echo $mensaje[1];
                echo '</div>
                <span class="message-time pull-right">';
                echo '&nbsp;';
                echo '</span>
              </div>
            </div>
          </div>';
		}
		if($receptor==$receptorG[1] && $emisor[1]=="fg")
		{
	        echo '<div class="row message-body"> 
					<div class="col-sm-12 message-main-sender">
					<div class="sender">
					<div class="message-text">';
					echo $mensaje[1];
					echo '</div>
					<span class="message-time pull-right">';
					echo 'Leído'; 
					echo '</span>
					</div>
					</div>
					</div>';
			echo '<br/>';
			$i++;
		}
	}
	fclose($fp);

?>