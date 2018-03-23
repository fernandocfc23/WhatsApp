ultAct="#c0";
ultAct2=" span";

$(document).ready(function(){
	$("#mensaje").keyup(function(e) {
	       if(e.keyCode == 13){
			var msj = $("#mensaje").val();
			var cadena1 = '<div class="row message-body"> <div class="col-sm-12 message-main-sender"><div class="sender"><div class="message-text">';
			var cadena2 = '</div><span class="message-time pull-right">18:19</span></div></div></div>'
			var msj1 = cadena1.concat(msj);
			var msj2 = msj1.concat(cadena2);
			$("#mensaje").val("");
			$("#mensajes").append(msj2);
			receptor = comprobarReceptor(ultAct);
			var parametros = {
                "receptor" : receptor,
                "mensaje" : msj
	        };
	        $.ajax({
	                data:  parametros, 
	                url:   'mensaje.php', 
	                type:  'post', 
	                success:  function (response) {}
	        });

		}
	})
});

function activar(nombreContenedor){
	desactivar(ultAct);
	ultAct=nombreContenedor;
	var nomDiv = ultAct.concat(ultAct2);
	$(ultAct).css("background-color", "#1b8df1");
	$(nomDiv).css("color","white");
	var r = comprobarReceptor(ultAct);
	$("#nomContacto").text(r);
	var parametros= {
		"receptor": r
	};
	$.ajax({
			data:  parametros, 
	        url:   'apertura.php', 
	        type:  'post', 
        	success : function (data) {
        		$("#mensajes0").append(data);
        	}
    });
}

function desactivar(res){
	var nomDiv2 = res.concat(ultAct2);
	$(res).css("background-color", "white");
	$(nomDiv2).css("color", "black");
	$("#mensajes0").empty();
}

function comprobarReceptor(ultAct)
{
	if(ultAct == "#c0")
	{
		var receptor = "Gokú";
	}
	else if(ultAct == "#c1")
	{
		var receptor = "Trunks";
	}
	else if(ultAct == "#c2")
	{
		var receptor = "Patricio";
	}
	return receptor;
}
