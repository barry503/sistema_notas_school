


//Funcion que se ejecuta al inicio
 function inicial(){


/*para guardar nuevo alumnos*/$("#formunuevo").on("submit",function(v)
     {
          nuevo(v);
       
     })
     

     
 

   //Cargamos los items al select de docentes
  $.post("../ajax/nuevoalumno.php?op=selectSexo", function(re){
             $("#idsexo").html(re);
             $("#idsexo").selectpicker('refresh');
  });
   //Cargamos los items al select de grados
  $.post("../ajax/nuevoalumno.php?op=selectGrado", function(re){
             $("#idgrado").html(re);
             $("#idgrado").selectpicker('refresh');
  });



 }

//Funcion limpiar
function limpiar()
{   
    $(".nie").val("");
     $(".foto").val("");
    $(".nombre").val("");
    $(".apellido").val("");
    $("#idsexo").val("");
    $("#idgrado").val("");
    $(".discapacidad").val("");
    $(".direccion").val("");
    $(".nombre_madre").val("");
    $(".apellido_madre").val("");
    $(".telefono_madre").val("");
     $(".nombre_padre").val("");
    $(".apellido_padre").val("");
    $(".telefono_padre").val("");
    
      
  
    
    
   

}











//Funcion para Nuevo alumnos

function nuevo(e)
{
     e.preventDefault();//No se activara la accion predeterminada del evento
     $("#btnGuardarNuevo").prop("disabled",false);
     var formData = new FormData($("#formunuevo")[0]);

     $.ajax({
         url:"../ajax/nuevoalumno.php?op=nuevo",
         type: "POST",
         data: formData,
         contentType: false,
         processData: false,

         success: function(datos)
         {
             // alert(datos);
             // bootbox.alert(datos);
             Swal.fire({ icon:'success', title: datos });
             // mostrarform(false);
              // tabla.ajax.reload();
             // setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
         }         
           
     });
     limpiar();
}





// Funcion para generar el codigo de barras
function generarbarcode()
{
  codigo=$("#codigo").val();
  JsBarcode("#barcode", codigo);
  //mostrando el codigo de barras
  $("#codinprimir").show();

}

// Funcion para imprimir el codigo de barras
function inprimir()
{
  $("#inprimirCarnet").printArea();
}







 inicial();