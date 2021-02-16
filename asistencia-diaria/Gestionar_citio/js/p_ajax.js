// todas las peticiones ajax



// peticion para el primer modal
/*#formularioXD*/
$( "#formularioXD" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "Gestionar_citio/ajax/editar_info.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#respuesta_ajax").html("Mensaje: Cargando...");
        $("#respuesta_modal").html("Mensaje: Cargando...");
        },
      success: function(datos){
      $("#respuesta_ajax").html(datos);
      $("#respuesta_modal").html(datos);
      $('.guardar_datos').attr("disabled", false);

      }
  });
  event.preventDefault();
})


// modal para mas ajustes
/*#ModalConfig*/
$( "#ModalConfig" ).submit(function( event ) {
  $('.guardar_info').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "Gestionar_citio/ajax/editar_mas_info.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#res_ajax").html("Mensaje: Cargando...");
        $("#res_modal").html("Mensaje: Cargando...");
        },
      success: function(datos){
      $("#res_ajax").html(datos);
      $("#res_modal").html(datos);
      $('.guardar_info').attr("disabled", false);

      }
  });
  event.preventDefault();
})



// funcion para cambiar logo de la institucion

function upload_image(){
        
        var inputFileImage = document.getElementById("imagefile");
        var file = inputFileImage.files[0];
        if( (typeof file === "object") && (file !== null) )
        {
          $("#load_img").text('Cargando...'); 
          var data = new FormData();
          data.append('imagefile',file);
          
          
          $.ajax({
            url: "Gestionar_citio/ajax/editar_imagen.php",        // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: data,         // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
              $("#load_img").html(data);
              
            }
          }); 
        }
        
        
      }


      