// script_porcentaje.js

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
	
   $("#id").val("");
  
  $("#p1").val("");
  $("#p2").val("");
  $("#p3").val("");
  $("#p4").val("");
  $("#p5").val("");
	 

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

                         url: "../ajax/editablas/Ajax_porcentaje.php?op=listar",
                         type : "get",
                         dataType : "json",
                         error: function(e){
                    	    console.log(e.responseText);
                         } 

                     },
              "bDestroy": true,
              "iDisplayLength": 5,//paginacion 
              "order": [[0, "asc"]]//Ordenar desc=desendente asc=ascendente (columna,orden)       


	}).dataTable();
}


//Funcion para guardar o editar

function guardaryeditar(e)
{
     e.preventDefault();//No se activara la accion predeterminada del evento
     $("#btnGuardar").prop("disabled",true);
     var formData = new FormData($("#formulario")[0]);

     $.ajax({
         url:"../ajax/editablas/Ajax_porcentaje.php?op=guardaryeditar",
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

function mostrar(id)
{
   $.post("../ajax/editablas/Ajax_porcentaje.php?op=mostrar",{id : id}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);

   
 $("#id").val(data.id);
  $("#p1").val(data.p1);
  $("#p2").val(data.p2);
  $("#p3").val(data.p3);
  $("#p4").val(data.p4);
  $("#p5").val(data.p5);

   })
} 



//Funcion para eliminar registros
function eliminar(id)
{
   
  bootbox.confirm("Esta seguro de eliminar el Porcentaje ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_porcentaje.php?op=eliminar", {id : id}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
        
       });  
          }
      }

          );



}





 inicial();