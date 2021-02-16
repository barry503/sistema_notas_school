var tabla;


//Funcion que se ejecuta al inicio
 function init(){
     mostrarform(false);
     listar();

     $("#formulario").on("submit",function(e)
     {
          guardaryeditar(e);
         
       
     })


    $("#imagenmuestra").hide();   

//mostramos los permisos
$.post("../ajax/editablas/Ajax_Usuario.php?op=permisos&id=",function(r){
         $("#permisos").html(r);
});  


 }

//Funcion limpiar
function limpiar()
{  
	    

   $("#nombre").val("");
   $("#apellido").val("");
   
   $("#usuario").val("");
   $("#clave").val("");

   $("#email").val("");
   $("#telefono").val("");
    $("#direccion").val("");

   
   // limpiando la imagen
   $("#imagenmuestra").attr("src","");
   // vaciando imagen
   $("#imagenactual").val("");
   $("#idusuario").val(""); 



}

//Funcion mostrar formulario
function mostrarform(flag)
{
  limpiar();
  if (flag)
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
	tabla = $('#tbllistado').dataTable(
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

                         url: "../ajax/editablas/Ajax_Usuario.php?op=listar",
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
         url:"../ajax/editablas/Ajax_Usuario.php?op=guardaryeditar",
         type: "POST",
         data: formData,
         contentType: false,
         processData: false,

         success: function(datos)
         {
             // alert(datos); // Swal.fire({ icon:'success', title: datos });
             bootbox.alert(datos);
             mostrarform(false);
             // tabla.ajax.reload();
              listar(); 
            //setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
         }         
           
     });
     limpiar();
}

function mostrar(idusuario)
{
   $.post("../ajax/editablas/Ajax_Usuario.php?op=mostrar",{idusuario : idusuario}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);
            
           
            $("#nombre").val(data.nombre);
            $("#apellido").val(data.apellido);

            $("#usuario").val(data.usuario);
            $("#clave").val(data.clave);

            $("#email").val(data.email);
            $("#telefono").val(data.telefono);
            $("#direccion").val(data.direccion);
            

            $("#imagenmuestra").show();
             $("#imagenmuestra").attr("src","../files/usuarios/"+data.imagen);
             $("#imagenactual").val(data.imagen);
            $("#idusuario").val(data.idusuario);
           

   });
   $.post("../ajax/editablas/Ajax_Usuario.php?op=permisos&id="+idusuario,function(r){
         $("#permisos").html(r);
});  

} 


//Funcion para desactivar registros
function desactivar(idusuario)
{
   
  bootbox.confirm('Esta seguro de desactivar el usuario ?', function (result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_Usuario.php?op=desactivar", {idusuario : idusuario}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
       });  
          }
      }

          );



}

//Funcion para activar registros
function activar(idusuario)
{
   
  bootbox.confirm('Esta seguro de activar el usuario ?', function (result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_Usuario.php?op=activar", {idusuario : idusuario}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
       });  
          }
      }

          );

}



 init();