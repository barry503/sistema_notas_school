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
	 $("#idasistencia").val("");
    $("#carnet").val("");
   $("#fecha").val("");
   $("#Hfecha").val("");
	 

}

//Funcion mostrar formulario condi=condicion del formulario
function mostrarform(condi)
{
  limpiar();
  if (condi)
  {
    /* mostrando  el titulo1*/$("#titleI1").hide();
    /* ocultando el titulo*/ $("#titleI").show();
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
/* mostrando  el titulo*/$("#titleI").hide();
 /* ocultando el titulo1*/ $("#titleI1").show();
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

                         url: "../ajax/editablas/Ajax_Asistencia.php?op=listar",
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
         url:"../ajax/editablas/Ajax_Asistencia.php?op=guardaryeditar",
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

function mostrar(idasistencia)
{
   $.post("../ajax/editablas/Ajax_Asistencia.php?op=mostrar",{idasistencia : idasistencia}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);

       $("#carnet").val(data.carnet);
        $("#fecha").val(data.fecha);
        $("#Hfecha").val(data.Hfecha);
         $("#idasistencia").val(data.idasistencia);

   })
} 



//Funcion para eliminar registros
function eliminar(idasistencia)
{
   
  bootbox.confirm("Esta seguro de eliminar la asistencia ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_Asistencia.php?op=eliminar", {idasistencia : idasistencia}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
        
       });  
          }
      }

          );



}





 inicial();