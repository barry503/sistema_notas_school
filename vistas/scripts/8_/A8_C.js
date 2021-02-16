var CarpetaDelGrado = '8_';
var tabla;


//Funcion que se ejecuta al inicio
 function inicial(){
     mostrarform(false);
     listar();

     $("#formulario").on("submit",function(e)
     {
          guardaryeditar(e);
       
     })
     
   // desabilitar el campo de nombreCompleto
   $(".noaccesso").prop("disabled",true);
 }

//Funcion limpiar
function limpiar()
{
    $("#carnet").val("");
    $("#CDCA1P1").val("");
    $("#CDCA2P1").val("");
    $("#CDCA3P1").val("");
    $("#CDCA4P1").val("");
    $("#CDCA5P1").val("");
    $("#CDCA6P1").val("");
    $("#CDCA1P2").val("");
    $("#CDCA2P2").val("");
    $("#CDCA3P2").val("");
    $("#CDCA4P2").val("");
    $("#CDCA5P2").val("");
    $("#CDCA6P2").val("");
    $("#CDCA1P3").val("");
    $("#CDCA2P3").val("");
    $("#CDCA3P3").val("");
    $("#CDCA4P3").val("");
    $("#CDCA5P3").val("");
    $("#CDCA6P3").val("");
    $("#CDCA1P4").val("");
    $("#CDCA2P4").val("");
    $("#CDCA3P4").val("");
    $("#CDCA4P4").val("");
    $("#CDCA5P4").val("");
    $("#CDCA6P4").val(""); 
	 

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
                  'pdf',
                  'colvis'
            ],
            "ajax":
                    {

                         url: "../ajax/"+CarpetaDelGrado+"/A8_C.php?op=listar",
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
         url:"../ajax/"+CarpetaDelGrado+"/A8_C.php?op=guardaryeditar",
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

function mostrar(carnet)
{
   $.post("../ajax/"+CarpetaDelGrado+"/A8_C.php?op=mostrar",{carnet : carnet}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);

       // muestra fotografia
  $("#imagenmuestra").show();
             $("#imagenmuestra").attr("src","../files/alumnos/"+data.fotografia);
             $("#imagenactual").val(data.fotografia);
             
       // para mostrar el nombre
         $("#NombreComplet").val(data.NombreComplet);

   $("#carnet").val(data.carnet);
    $("#CDCA1P1").val(data.CDCA1P1);
    $("#CDCA2P1").val(data.CDCA2P1);
    $("#CDCA3P1").val(data.CDCA3P1);
    $("#CDCA4P1").val(data.CDCA4P1);
    $("#CDCA5P1").val(data.CDCA5P1);
    $("#CDCA6P1").val(data.CDCA6P1);
    $("#CDCA1P2").val(data.CDCA1P2);
    $("#CDCA2P2").val(data.CDCA2P2);
    $("#CDCA3P2").val(data.CDCA3P2);
    $("#CDCA4P2").val(data.CDCA4P2);
    $("#CDCA5P2").val(data.CDCA5P2);
    $("#CDCA6P2").val(data.CDCA6P2);
    $("#CDCA1P3").val(data.CDCA1P3);
    $("#CDCA2P3").val(data.CDCA2P3);
    $("#CDCA3P3").val(data.CDCA3P3);
    $("#CDCA4P3").val(data.CDCA4P3);
    $("#CDCA5P3").val(data.CDCA5P3);
    $("#CDCA6P3").val(data.CDCA6P3);
    $("#CDCA1P4").val(data.CDCA1P4);
    $("#CDCA2P4").val(data.CDCA2P4);
    $("#CDCA3P4").val(data.CDCA3P4);
    $("#CDCA4P4").val(data.CDCA4P4);
    $("#CDCA5P4").val(data.CDCA5P4);
    $("#CDCA6P4").val(data.CDCA6P4);



   })
} 



//Funcion para eliminar registros
function eliminar(carnet)
{
   
  bootbox.confirm("Esta seguro de eliminar la conducta ?", function(result) {

      if(result)
      {
       $.post("../ajax/"+CarpetaDelGrado+"/A8_C.php?op=eliminar", {carnet : carnet}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
        
       });  
          }
      }

          );



}





 inicial();