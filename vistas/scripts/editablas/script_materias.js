var tabla;


//Funcion que se ejecuta al inicio
 function inicial(){
     mostrarform(false);
     listar();

     $("#formulario").on("submit",function(e)
     {
          guardaryeditar(e);
       
     })



   //Cargamos los items al select de docentes
  $.post("../ajax/editablas/Ajax_materias.php?op=selectDocentes", function(re){
             $("#iddocentes").html(re);
             $("#iddocentes").selectpicker('refresh');
  });


     

 }

//Funcion limpiar
function limpiar()
{
	 $("#idmaterias").val("");
   $("#CODMAT").val("");
   $("#iddocentes").val("");
   $("#NOMMAT").val("");

	 

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

                         url: "../ajax/editablas/Ajax_materias.php?op=listar",
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
         url:"../ajax/editablas/Ajax_materias.php?op=guardaryeditar",
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



// funcion para mostrar ñlas materias
function mostrar(idmaterias)
{
   $.post("../ajax/editablas/Ajax_materias.php?op=mostrar",{idmaterias : idmaterias}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);

$("#iddocentes").val(data.iddocentes);
$("#iddocentes").selectpicker('refresh'); 

$("#CODMAT").val(data.CODMAT);
$("#NOMMAT").val(data.NOMMAT);

$("#idmaterias").val(data.idmaterias);



   })
} 





//Funcion para desactivar registros
function desactivar(idmaterias)
{
   
  bootbox.confirm("Esta seguro de desactivar la materia ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_materias.php?op=desactivar", {idmaterias : idmaterias}, function(e){
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
function activar(idmaterias)
{
   
  bootbox.confirm('Esta seguro de activar la  materia ?', function (result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_materias.php?op=activar", {idmaterias : idmaterias}, function(e){
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
function eliminar(idmaterias)
{
   
  bootbox.confirm("Esta seguro de eliminar la materia ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_materias.php?op=eliminar", {idmaterias : idmaterias}, function(e){
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