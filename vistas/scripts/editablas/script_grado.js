var tabla;


//Funcion que se ejecuta al inicio
 function inicial(){
     mostrarform(false);
     listar();


/*para editar los datos*/$("#formulario").on("submit",function(e)
     {
          guardaryeditar(e);
       
     })
/*para guardar nuevo grado*/$("#formunuevo").on("submit",function(v)
     {
          nuevo(v);
       
     })
     

     




   //Cargamos los items al select de docentes
  $.post("../ajax/editablas/Ajax_grado.php?op=selectDocentes", function(re){
             $("#iddocentes").html(re);
             $("#iddocentes").selectpicker('refresh');
  });


// items para el formulario de nuevo


   //Cargamos los items al select de docentes
  $.post("../ajax/editablas/Ajax_grado.php?op=selectDocentes1", function(re){
             $("#iddocentes1").html(re);
             $("#iddocentes1").selectpicker('refresh');
  });

// items para el formulario de nuevo fin


 }

//Funcion limpiar
function limpiar()
{
   $("#nombre_grado").val("");
   $("#descripcion_grado").val("");
    $("#seccion").val("");
     // $("#idturno").val("");
      $("#iddocentes").val("");
   $("#idgrado").val("");
   

}



//Funcion mostrar formularionuevo nedd=condicion del formularionuevo
function mostrarnew(nedd)
{
  // limpiar();
  if (nedd)
  {
      
/* ocultando el titulo*/ $("#titleI").show();
/* mostrando  el listado de grados*/$("#listadoregistros").hide();
/* ocultando  el formulario de nuevo*/$("#formularionuevo").show();
/*avilitando boton para enviar datos*/ $("#btnGuardarNuevo").prop("disabled",false);
/* mostrando boton agregar */ $("#btnagregarNew").hide();
  }
  else 
  {
/* ocultando  el listado de grados*/ $("#listadoregistros").show();
/* mostrando  el formulario de nuevo*/$("#formularionuevo").hide();

/* ocultando boton agregar */ $("#btnagregarNew").show();
/* mostrando  el titulo*/$("#titleI").hide();

  }

}





//Funcion mostrar formulario condi=condicion del formulario
function mostrarform(condi)
{
  limpiar();
  if (condi)
  {
     mostrarnew(false);    
/* mostrando  el listado de grados*/$("#listadoregistros").hide();
/* ocultando  el formulario de registros*/$("#formularioregistros").show();
/*avilitando boton para enviar datos*/$("#btnGuardar").prop("disabled",false);
/* mostrando boton agregar */ /*$("#btnagregar").hide();*/
  }
  else 
  {  
      mostrarnew(false); 
/* ocultando  el listado de grados*/ $("#listadoregistros").show();
/* mostrando  el formulario de registros*/$("#formularioregistros").hide();
/* ocultando boton agregar */ /*$("#btnagregar").show();*/

  }

}








//Funcion cancelarform
function cancelarform()
{
    limpiar();
    mostrarform(false);
    mostrarnew(false);
}



//Funcion listar
function listar()
{      /* tbllistado va en la tabla*/
  tabla=$('#tbllistado').dataTable(
  {
      "aProcessing": true,//Activamos el procesamiento del datatables
      "aServerSide": true,//Paginacion y filtrado realizados por el servidor
      dom: 'Bfrtip',//Definimos los elementos del control de tabla 

      buttons: [
                  'copyHtml5',
                  'excelHtml5',
                  'csvHtml5',
                  'pdf'
            ],
            "ajax":
                    {

                         url: "../ajax/editablas/Ajax_grado.php?op=listar",
                         type : "get",
                         dataType : "json",
                         error: function(e){
                          console.log(e.responseText);
                         } 

                     },
              "bDestroy": true,
              "iDisplayLength": 5,//paginacion 
              "order": [[0, "asc"]],//Ordenar desc=desendente asc=ascendente (columna,orden) 
              "autoWidth": false,
              "responsive": true 

  }).dataTable();
}


//Funcion para guardar o editar

function guardaryeditar(e)
{
     e.preventDefault();//No se activara la accion predeterminada del evento
     $("#btnGuardar").prop("disabled",true);
     var formData = new FormData($("#formulario")[0]);

     $.ajax({
         url:"../ajax/editablas/Ajax_grado.php?op=guardaryeditar",
         type: "POST",
         data: formData,
         contentType: false,
         processData: false,

         success: function(datos)
         {
             // alert(datos);
             bootbox.alert(datos);
             // Swal.fire({ icon:'success', title: datos });
             mostrarform(false);
              // tabla.ajax.reload();
              listar();
             // setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
         }         
           
     });
     limpiar();
}



//Funcion para Nuevo grado

function nuevo(e)
{
     e.preventDefault();//No se activara la accion predeterminada del evento
     $("#btnGuardarNuevo").prop("disabled",true);
     var formData = new FormData($("#formunuevo")[0]);

     $.ajax({
         url:"../ajax/editablas/Ajax_grado.php?op=nuevo",
         type: "POST",
         data: formData,
         contentType: false,
         processData: false,

         success: function(datos)
         {
             // alert(datos);
             // bootbox.alert(datos);
             Swal.fire({ icon:'success', title: datos });
             mostrarform(false);
              // tabla.ajax.reload();
              listar();
             // setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
         }         
           
     });
     limpiar();
}



function mostrar(idgrado)
{
   $.post("../ajax/editablas/Ajax_grado.php?op=mostrar",{idgrado : idgrado}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);

       $("#iddocentes").val(data.iddocentes);
       $("#iddocentes").selectpicker('refresh');
       $("#nombre_grado").val(data.nombre_grado);
       $("#descripcion_grado").val(data.descripcion_grado);
        $("#seccion").val(data.seccion);
       $("#condicion").val(data.condicion);
       $("#idgrado").val(data.idgrado);


       // ocultar el formulario para un nuevo grado
       $("#formularionuevo").hide();

   })
} 




//Funcion para desactivar registros
function desactivar(idgrado)
{
   
  bootbox.confirm("Esta seguro de desactivar el grado ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_grado.php?op=desactivar", {idgrado : idgrado}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
         // setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
        
       });  
          }
      }

          );



}

//Funcion para activar registros
function activar(idgrado)
{
   
  bootbox.confirm('Esta seguro de activar el grado ?', function (result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_grado.php?op=activar", {idgrado : idgrado}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
         // setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
         
       });  
          }
      }

          );



}




//Funcion para eliminar registros
function eliminar(idgrado)
{
   
  bootbox.confirm("Esta seguro de eliminar el Grado ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_grado.php?op=eliminar", {idgrado : idgrado}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
         // setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
        
       });  
          }
      }

          );



}


 inicial();