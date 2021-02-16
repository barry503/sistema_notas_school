var tabla;


//Funcion que se ejecuta al inicio
 function inicial(){
     mostrarform(false);
     listar();

     $("#formulario").on("submit",function(e)
     {
          guardaryeditar(e);
       
     })




   //Cargamos los items al select de Usuario
  $.post("../ajax/editablas/Ajax_Usuario_Permiso.php?op=selectUsuarios", function(re){
             $("#idusuario").html(re);
             $("#idusuario").selectpicker('refresh');
  });


// items para el formulario 


   //Cargamos los items al select de Permiso
  $.post("../ajax/editablas/Ajax_Usuario_Permiso.php?op=selectPermisos", function(re){
             $("#idpermiso").html(re);
             $("#idpermiso").selectpicker('refresh');
  });



     

 }

//Funcion limpiar
function limpiar()
{
   $("#idusuario_permiso").val("");
   $("#idusuario").val("");
   $("#idpermiso").val("");


   

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
     $("#textoPlano").hide();
     $("#TextoInformat").show();
     
  }
  else 
  {
     $("#listadoregistros").show();
     $("#formularioregistros").hide();
     $("#btnagregar").show();
     $("#TextoInformat").hide();

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

                         url: "../ajax/editablas/Ajax_Usuario_Permiso.php?op=listar",
                         type : "get",
                         dataType : "json",
                         error: function(e){
                          console.log(e.responseText);
                         } 

                     },
              "bDestroy": true,
              "iDisplayLength": 4,//paginacion 
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
         url:"../ajax/editablas/Ajax_Usuario_Permiso.php?op=guardaryeditar",
         type: "POST",
         data: formData,
         contentType: false,
         processData: false,

         success: function(datos)
         {
             // alert(datos);
             // bootbox.alert(datos);
             Swal.fire({ icon: 'success', title: datos });
             mostrarform(false);
              // tabla.ajax.reload();
              listar();
             //setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
         }         
           
     });
     limpiar();
}



// funcion para mostrar ñlas materias
function mostrar(idusuario_permiso)
{
   $.post("../ajax/editablas/Ajax_Usuario_Permiso.php?op=mostrar",{idusuario_permiso : idusuario_permiso}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);


$("#idusuario_permiso").val(data.idusuario_permiso);

$("#idusuario").val(data.idusuario);
/*Uso la funcion refrescar*/$("#idusuario").selectpicker('refresh');


$("#idpermiso").val(data.idpermiso);
/*Uso la funcion refrescar*/$("#idpermiso").selectpicker('refresh');



   })
} 







//Funcion para eliminar registros
function eliminar(idusuario_permiso)
{
   
  bootbox.confirm("Esta seguro de eliminar el permiso del usuario ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_Usuario_Permiso.php?op=eliminar", {idusuario_permiso : idusuario_permiso}, function(e){
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