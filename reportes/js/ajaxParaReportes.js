


// Funcion para imprimir todos los reportes
function inprimir()
{
  $("#idTablaprint").printArea();
}




// _____________________________________________________________________________________________________________________________________
// CONSULTAS PARA EDUCACION BASICA
  $( "#Consult_de_1_A_6GRADO" ).submit(function( event ) {
  $('.ConsutGrarDar').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "2_NotasXgradoBasica/NotasXgrado1A6.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#imprimirDatosBasica1A6").html("Mensaje: Cargando los datos...");
        },
      success: function(datos){
      $("#imprimirDatosBasica1A6").html(datos);
      $('.ConsutGrarDar').attr("disabled", false);
      inprimir();

      }
  });
  event.preventDefault();
})




 $( "#Consult_de_7_A_9GRADO" ).submit(function( event ) {
  $('.ConsutGrar').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "2_NotasXgradoBasica/NotasXgrado7A9.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#imprimirDatosBasica7A9").html("Mensaje: Cargando los datos...");
        },
      success: function(datos){
      $("#imprimirDatosBasica7A9").html(datos);
      $('.ConsutGrar').attr("disabled", false);
      inprimir();

      }
  });
  event.preventDefault();
})

// _____________________________________________________________________________________________________________________________________F




// _____________________________________________________________________________________________________________________________________

// consulta para el archivo src=reportes/2.1.VistaNotasXgradoContador.php
  $( "#ConsultaBtoContador" ).submit(function( event ) {
  $('.ConsutContar').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "2_1_NotasbtoContador/NotasBtoContador.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#imprimirDatosConta").html("Mensaje: Cargando los datos...");
        },
      success: function(datos){
      $("#imprimirDatosConta").html(datos);
      $('.ConsutContar').attr("disabled", false);
      inprimir();

      }
  });
  event.preventDefault();
})

// _____________________________________________________________________________________________________________________________________F


// _____________________________________________________________________________________________________________________________________
// consulta para el archivo src=reportes/.php
$( "#ConsultaSalud" ).submit(function( event ) {
  $('.guardar_Cosult').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "3_NotasBtoSalud/NotasBtoSalud.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#imprimirlosdatos").html("Mensaje: Cargando los datos...");
        },
      success: function(datos){
      $("#imprimirlosdatos").html(datos);
      $('.guardar_Cosult').attr("disabled", false);
      inprimir();

      }
  });
  event.preventDefault();
})


// _____________________________________________________________________________________________________________________________________F