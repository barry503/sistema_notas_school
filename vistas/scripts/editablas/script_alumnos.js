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
     

     
     

 //Cargamos los items al select de Sexo
  $.post("../ajax/editablas/Ajax_Alumnos.php?op=selectSexo", function(r){
             $("#idsexo").html(r);
             $("#idsexo").selectpicker('refresh');
  });



 //Cargamos los items al select de Sexo
  $.post("../ajax/editablas/Ajax_Alumnos.php?op=selectSexo1", function(r){
             $("#idsexo1").html(r);
             $("#idsexo1").selectpicker('refresh');
  });


 //Cargamos los items al select de grados
  $.post("../ajax/editablas/Ajax_Alumnos.php?op=selectGrado", function(r){
             $("#idgrado").html(r);
             $("#idgrado").selectpicker('refresh');
  });



 //Cargamos los items al select de grados
  $.post("../ajax/editablas/Ajax_Alumnos.php?op=selectGrado1", function(r){
             $("#idgrado1").html(r);
             $("#idgrado1").selectpicker('refresh');
  });


// items para el formulario CAMPOS SEXO Y GRADO fin

// mostrando imagen
 $("#imagenmuestra").hide(); 



 //mostramos los materias
$.post("../ajax/editablas/Ajax_Alumnos.php?op=materias&id=",function(r){
         $("#materias").html(r);
}); 




 }

// Funcion limpiar 
/* les da el valor vacio a cada campo
 cuando se ejecuta la funcion */
function limpiar()
{

    $("#nombre").val("");
    $("#apellido").val("");
    $("#fechanac").val("");
    $("#idsexo").val("");
    $("#idgrado").val("");
    $("#telefono").val("");
    $("#direccion").val("");
    $("#encargado").val("");
    $("#nie").val("");
    $("#salud").val("");
     $("#trabajo").val("");
    $("#mama").val("");
    $("#papa").val("");
    $("#codfam").val("");
    $("#repetidor").val("");
    
// limpiando la imagen
   $("#imagenmuestra").attr("src","");
   // vaciando imagen
   $("#imagenactual").val("");
    
    
   

}
// Funcion mostrar formularionuevo nedd=condicion del formularionuevo
function mostrarnew(nedd)
{
  limpiar();
  if (nedd)
  {
      
/* ocultando el titulo*/ $("#titleI").show();
/* mostrando  el listado de alumnoss*/$("#listadoregistros").hide();
/* ocultando  el formulario de nuevo*/$("#formularionuevo").show();
/*avilitando boton para enviar datos*/ $("#btnGuardarNuevo").prop("disabled",false);
/* mostrando boton agregar */ $("#btnagregarNew").hide();
  }
  else 
  {
/* ocultando  el listado de alumnoss*/ $("#listadoregistros").show();
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
/* mostrando  el listado de alumnoss*/$("#listadoregistros").hide();
/* ocultando  el formulario de registros*/$("#formularioregistros").show();
/*avilitando boton para enviar datos*/$("#btnGuardar").prop("disabled",false);
/* mostrando boton agregar */ /*$("#btnagregar").hide();*/
  }
  else 
  {  
      mostrarnew(false); 
/* ocultando  el listado de alumnoss*/ $("#listadoregistros").show();
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

                         url: "../ajax/editablas/Ajax_Alumnos.php?op=listar",
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




//Funcion para guardar o editar los alumnos

function guardaryeditar(e)
{
     e.preventDefault();//No se activara la accion predeterminada del evento
     $("#btnGuardar").prop("disabled",true);
     var formData = new FormData($("#formulario")[0]);

     $.ajax({
         url:"../ajax/editablas/Ajax_Alumnos.php?op=guardaryeditar",
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



//Funcion para Nuevo grado

function nuevo(e)
{
     e.preventDefault();//No se activara la accion predeterminada del evento
     $("#btnGuardarNuevo").prop("disabled",true);
     var formData = new FormData($("#formunuevo")[0]);

     $.ajax({
         url:"../ajax/editablas/Ajax_Alumnos.php?op=nuevo",
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






function mostrar(carnet)
{
   $.post("../ajax/editablas/Ajax_Alumnos.php?op=mostrar",{carnet : carnet}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);
       $("#idsexo").val(data.idsexo);
       $("#idsexo").selectpicker('refresh');

       $("#idgrado").val(data.idgrado);
       $("#idgrado").selectpicker('refresh');

       $("#nombre").val(data.nombre);
       $("#apellido").val(data.apellido);
       $("#fechanac").val(data.fechanac);
       $("#telefono").val(data.telefono);
       $("#direccion").val(data.direccion);
       $("#encargado").val(data.encargado);


       $("#nie").val(data.nie);
       $("#seccion").val(data.seccion);
       $("#salud").val(data.salud);

       $("#trabajo").val(data.trabajo);
       $("#mama").val(data.mama);
       $("#papa").val(data.papa);
       $("#codfam").val(data.codfam);
       $("#repetidor").val(data.repetidor);


       $("#idasistencia").val(data.idasistencia);
       $("#carnet").val(data.carnet);

       $("#imagenmuestra").show();
             $("#imagenmuestra").attr("src","../files/alumnos/"+data.foto);
             $("#imagenactual").val(data.foto);

       // ocultar el formulario para un nuevo alumnos
       // $("#formularionuevo").hide(); sin funcionalidad

   });
   $.post("../ajax/editablas/Ajax_Alumnos.php?op=materias&id="+carnet,function(r){
         $("#materias").html(r);
}); 


} 




function vaciar(){
      $(".carnet").val("");
    $(".nombre").val("");
    $(".apellido").val("");
    $(".fechanac").val("");
    $(".idsexo").val("");
    $(".idsexo1").val("");
    $(".idgrado").val("");
    $(".idgrado1").val("");
    $(".telefono").val("");
    $(".direccion").val("");
    $(".encargado").val("");
    $(".nie").val("");
    $(".salud").val("");
    $(".trabajo").val("");
    $(".mama").val("");
    $(".papa").val("");
    $(".codfam").val("");
    $(".repetidor").val("");
    $(".foto").val("");
  
}






//Funcion para desactivar registros
function desactivar(carnet)
{
   
  bootbox.confirm("Esta seguro de desactivar el alumno ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_Alumnos.php?op=desactivar", {carnet : carnet}, function(e){
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
function activar(carnet)
{
   
  bootbox.confirm('Esta seguro de activar el alumno ?', function (result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_Alumnos.php?op=activar", {carnet : carnet}, function(e){
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
function eliminar(carnet)
{
   
  bootbox.confirm("Esta seguro de eliminar el alumnos ?", function(result) {

      if(result)
      {
       $.post("../ajax/editablas/Ajax_Alumnos.php?op=eliminar", {carnet : carnet}, function(e){
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