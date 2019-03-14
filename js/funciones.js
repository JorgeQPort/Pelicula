$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"crud/sentencia.php",
				data:datos,
				success:function(r){
					//if(r==1){
						$("form").trigger('reset');
						$("#result").html(r);
						//alert("agregado con exito");
					/*}else{
						alert("Fallo el Registro");
					}*/
				}
			});

			return false;
		});
	});

	function buscar() {
	    var textoBusqueda = $("input#busqueda").val();
	 
	     if (textoBusqueda != "") {
	        $.post("crud/sentenciad.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
	            $("#resultadoBusqueda").html(mensaje);
	         }); 
	     } else { 
	        $("#resultadoBusqueda").html('<h2 style="color:yellow;">Campo de Busqueda <strong style="color:red;">Esta Vacio</strong></h2>');
	        };
	};

	function modificar(id){
		var parametros = {
			"vid":id,
		};

		$.ajax({
			data: parametros,
			url:"crud/modificar.php",
			type:"POST",
			beforeSend: function(){
				$("#resultadom").html("Procesando...");
			},
			success: function(mostrar){
				$("#resultadom").html(mostrar);				
			}

		});
	}

		function modificarlo(){
			var datos=$('#frmxajax').serialize();
			$.ajax({
				type:"POST",
				url:"crud/modificarlo.php",
				data: datos,
				success:function(update){
					$("#resultam").html(update);
				}
			});
			return false;
		}

/*	function modificarlo(){
		var parametros = {

			"fid": $("#idm").val(),
			"fnom": $("#namem").val(),
			"fem": $("#emailm").val(),
			"fmess": $("#messagem").val(),
		};

		$.ajax({
			data: parametros,
			type:"POST",
			url:"crud/modificarlo.php",
			success:function(modificarlo){
				$("#resultam").html(modificarlo);			
			}
		});
	}*/

		function eliminar(id){
		var parametros = {
			"vid":id,
		};
		var del; 
		del = confirm("¿Esta seguro, que desea eliminar el Registro Numerio: "+id+"?");
		if(del){ 

		$.ajax({
			data: parametros,
			url:"crud/eliminar.php",
			type:"POST",
			beforeSend: function(){
				$("#resultadom").html("Procesando...");
			},
			success: function(mostrar){
				$("#resultadom").html(mostrar);				
			}

		});
		} 
		else {
			return false; 
		}
	}