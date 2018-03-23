<?php 
	$receptor = $_POST['receptor'];
	$fp = fopen("mensajes.txt", "r");
	$i=0;
	while(!feof($fp)) {
		$porciones = explode(",", fgets($fp));
		$receptorG = explode(":",$porciones[0]);
		$mensaje = explode(":", $porciones[1]);
		if($receptor=="fg")
		{
			echo '<div class="row message-body">
            <div class="col-sm-12 message-main-receiver">
              <div class="receiver">
                <div class="message-text">';
				echo $mensaje[1];
                echo '</div>
                <span class="message-time pull-right">
                  18:18
                </span>
              </div>
            </div>
          </div>';
		}
		if($receptor==$receptorG[1])
		{
	        echo '<div class="row message-body"> 
					<div class="col-sm-12 message-main-sender">
					<div class="sender">
					<div class="message-text">';
					echo $mensaje[1];
					echo '</div>
					<span class="message-time pull-right">
					18:19
					</span>
					</div>
					</div>
					</div>';
			echo '<br/>';
			$i++;
		}
	}
	fclose($fp);

?>