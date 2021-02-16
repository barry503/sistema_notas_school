var tabla;


//Funcion que se ejecuta al inicio
 function inicial(){
     mostrarform(false);
     listar();

     $("#formulario").on("submit",function(e)
     {
          guardaryeditar(e);
       
     })
     

 }

//Funcion limpiar
function limpiar()
{
	 $("#nombre").val("");
   $("#apellido").val("");
   $("#iddocentes").val("");
	 

}

//Funcion mostrar formulario condi=condicion del formulario
function mostrarform(condi)
{
  limpiar();
  if (condi)
  {
  	 $("#listadoregistros").hide();
  	 $("#formularioregistros").show();
  	 $("#btnGuardar").prop("disabled",false);
     $("#btnagregar").hide();
  }
  else 
  {
     $("#listadoregistros").show();
  	 $("#formularioregistros").hide();
     $("#btnagregar").show();

  }

}


//Funcion cancelarform
function cancelarform()
{
    limpiar();
    mostrarform(false);
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

                         url: "../ajax/editablas/Ajax_docentes.php?op=listar",
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
         url:"../ajax/editablas/Ajax_docentes.php?op=guardaryeditar",
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
             //setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
         }         
           
     });
     limpiar();
}

function mostrar(iddocentes)
{
   $.post("../ajax/editablas/Ajax_docentes.php?op=mostrar",{iddocentes : iddocentes}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);

       $("#nombre").val(data.nombre);
       $("#apellido").val(data.apellido);
       $("#iddocentes").val(data.iddocentes);

   })
} 




//Funcion para desactivar registros
function desactivar(iddocentes)
{
   
  bootbox.confirm("Esta seguro de desactivar el docente ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_docentes.php?op=desactivar", {iddocentes : iddocentes}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
         setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
        
       });  
          }
      }

          );



}

//Funcion para activar registros
function activar(iddocentes)
{
   
  bootbox.confirm('Esta seguro de activar el docente ?', function (result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_docentes.php?op=activar", {iddocentes : iddocentes}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
         //setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
         
       });  
          }
      }

          );



}




//Funcion para eliminar registros
function eliminar(iddocentes)
{
   
  bootbox.confirm("Esta seguro de eliminar el docente ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_docentes.php?op=eliminar", {iddocentes : iddocentes}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
         //setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
        
       });  
          }
      }

          );



}


 inicial();