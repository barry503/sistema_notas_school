$( "#reportesU" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "perfil/enviar_reporte.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#respuestaR_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#respuestaR_ajax").html(datos);
			$('.guardar_datos').attr("disabled", false);
			limpiar();

		  }
	});
  event.preventDefault();
})


function limpiar(){
 $("#comA").val("");

}