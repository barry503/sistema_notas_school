var CarpetaDelGrado = '2_';
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
    $("#EVA1P1").val("");
    $("#EVA2P1").val("");
    $("#EVA3P1").val("");
    $("#EVA4P1").val("");
    $("#EVA5P1").val("");
    $("#NRP1").val("");
    $("#EVA1P2").val("");
    $("#EVA2P2").val("");
    $("#EVA3P2").val("");
    $("#EVA4P2").val("");
    $("#EVA5P2").val("");
    $("#NRP2").val("");
    $("#EVA1P3").val("");
    $("#EVA2P3").val("");
    $("#EVA3P3").val("");
    $("#EVA4P3").val("");
    $("#EVA5P3").val("");
    $("#NRP3").val("");
    $("#EVA1P4").val("");
    $("#EVA2P4").val("");
    $("#EVA3P4").val("");
    $("#EVA4P4").val("");
    $("#EVA5P4").val("");
    $("#NRP4").val(""); 
    $("#NRFINAL").val(""); 
   $("#NOTAFINAL").val(""); 

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

                         url: "../ajax/"+CarpetaDelGrado+"/2Amat.php?op=listar",
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
         url:"../ajax/"+CarpetaDelGrado+"/2Amat.php?op=guardaryeditar",
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
   $.post("../ajax/"+CarpetaDelGrado+"/2Amat.php?op=mostrar",{carnet : carnet}, function(data, status)
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
   // periodo 1
    $("#EVA1P1").val(data.EVA1P1);
    $("#EVA2P1").val(data.EVA2P1);
    $("#EVA3P1").val(data.EVA3P1);
    $("#EVA4P1").val(data.EVA4P1);
    $("#EVA5P1").val(data.EVA5P1);
    $("#NRP1").val(data.NRP1);
    // periodo 2
    $("#EVA1P2").val(data.EVA1P2);
    $("#EVA2P2").val(data.EVA2P2);
    $("#EVA3P2").val(data.EVA3P2);
    $("#EVA4P2").val(data.EVA4P2);
    $("#EVA5P2").val(data.EVA5P2);
    $("#NRP2").val(data.NRP2);
    // periodo 3
    $("#EVA1P3").val(data.EVA1P3);
    $("#EVA2P3").val(data.EVA2P3);
    $("#EVA3P3").val(data.EVA3P3);
    $("#EVA4P3").val(data.EVA4P3);
    $("#EVA5P3").val(data.EVA5P3);
    $("#NRP3").val(data.NRP3);
    // periodo 4
    $("#EVA1P4").val(data.EVA1P4);
    $("#EVA2P4").val(data.EVA2P4);
    $("#EVA3P4").val(data.EVA3P4);
    $("#EVA4P4").val(data.EVA4P4);
    $("#EVA5P4").val(data.EVA5P4);
    $("#NRP4").val(data.NRP4);

    // notas finales
    $("#NRFINAL").val(data.NRFINAL);
    $("#NOTAFINAL").val(data.NOTAFINAL);
// Obtenemos el valor por el Nombre 
  var p1= document.getElementsByName("p1")[0].value;
  var p2= document.getElementsByName("p2")[0].value;
  var p3= document.getElementsByName("p3")[0].value;
  var p4= document.getElementsByName("p4")[0].value;
  var p5= document.getElementsByName("p5")[0].value;
// periodo 1
 // Obtenemos el valor por el Nombre 
  var EVA1P1= document.getElementsByName("EVA1P1")[0].value;
  var EVA2P1= document.getElementsByName("EVA2P1")[0].value;
  var EVA3P1= document.getElementsByName("EVA3P1")[0].value;
  var EVA4P1= document.getElementsByName("EVA4P1")[0].value;
  var EVA5P1= document.getElementsByName("EVA5P1")[0].value;

 // Multiplicacion de noto X el %
  var MulTi_p1_p1 = Number(EVA1P1) * Number(p1); 
  var MulTi_p1_p2 = Number(EVA2P1) * Number(p2);
  var MulTi_p1_p3 = Number(EVA3P1) * Number(p3);
  var MulTi_p1_p4 = Number(EVA4P1) * Number(p4);
  var MulTi_p1_p5 = Number(EVA5P1) * Number(p5);

  //suma p1 
  var SUMA1 = Number(MulTi_p1_p1) + Number(MulTi_p1_p2) + Number(MulTi_p1_p3) + Number(MulTi_p1_p4) + Number(MulTi_p1_p5);
  //division p1
  var Promedio1 = SUMA1 / 100;
  /* Para seccon p1*/$("#NOTAp1FINAL").val(Promedio1);
  /*Para el cuadro final */ $("#NOTAFINALp1").val(Promedio1);

// periodo 2
 // Obtenemos el valor por el Nombre 
  var EVA1P2= document.getElementsByName("EVA1P2")[0].value;
  var EVA2P2= document.getElementsByName("EVA2P2")[0].value;
  var EVA3P2= document.getElementsByName("EVA3P2")[0].value;
  var EVA4P2= document.getElementsByName("EVA4P2")[0].value;
  var EVA5P2= document.getElementsByName("EVA5P2")[0].value;

 // Multiplicacion de noto X el %
  var MulTi_p2_p1 = Number(EVA1P2) * Number(p1); 
  var MulTi_p2_p2 = Number(EVA2P2) * Number(p2);
  var MulTi_p2_p3 = Number(EVA3P2) * Number(p3);
  var MulTi_p2_p4 = Number(EVA4P2) * Number(p4);
  var MulTi_p2_p5 = Number(EVA5P2) * Number(p5);

  //suma p2 
  var SUMA2 = Number(MulTi_p2_p1) + Number(MulTi_p2_p2) + Number(MulTi_p2_p3) + Number(MulTi_p2_p4) + Number(MulTi_p2_p5);
  //division p2
  var Promedio2 = SUMA2 / 100;
  /* Para seccon P2*/$("#NOTAp2FINAL").val(Promedio2);
  /*Para el cuadro final */ $("#NOTAFINALp2").val(Promedio2);

// periodo 3
 // Obtenemos el valor por el Nombre 
  var EVA1P3= document.getElementsByName("EVA1P3")[0].value;
  var EVA2P3= document.getElementsByName("EVA2P3")[0].value;
  var EVA3P3= document.getElementsByName("EVA3P3")[0].value;
  var EVA4P3= document.getElementsByName("EVA4P3")[0].value;
  var EVA5P3= document.getElementsByName("EVA5P3")[0].value;


 // Multiplicacion de noto X el %
  var MulTi_p3_p1 = Number(EVA1P3) * Number(p1); 
  var MulTi_p3_p2 = Number(EVA2P3) * Number(p2);
  var MulTi_p3_p3 = Number(EVA3P3) * Number(p3);
  var MulTi_p3_p4 = Number(EVA4P3) * Number(p4);
  var MulTi_p3_p5 = Number(EVA5P3) * Number(p5);

  //suma p2 
  var SUMA3 = Number(MulTi_p3_p1) + Number(MulTi_p3_p2) + Number(MulTi_p3_p3) + Number(MulTi_p3_p4) + Number(MulTi_p3_p5);
  //division p3
  var Promedio3 = SUMA3 / 100;
  /* Para seccon P3*/$("#NOTAp3FINAL").val(Promedio3);
  /*Para el cuadro final */ $("#NOTAFINALp3").val(Promedio3);


// periodo 4
 // Obtenemos el valor por el Nombre 
  var EVA1P4= document.getElementsByName("EVA1P4")[0].value;
  var EVA2P4= document.getElementsByName("EVA2P4")[0].value;
  var EVA3P4= document.getElementsByName("EVA3P4")[0].value;
  var EVA4P4= document.getElementsByName("EVA4P4")[0].value;
  var EVA5P4= document.getElementsByName("EVA5P4")[0].value;

  
 // Multiplicacion de noto X el %
  var MulTi_p4_p1 = Number(EVA1P4) * Number(p1); 
  var MulTi_p4_p2 = Number(EVA2P4) * Number(p2);
  var MulTi_p4_p3 = Number(EVA3P4) * Number(p3);
  var MulTi_p4_p4 = Number(EVA4P4) * Number(p4);
  var MulTi_p4_p5 = Number(EVA5P4) * Number(p5);

  //suma p4 
  var SUMA4 = Number(MulTi_p4_p1) + Number(MulTi_p4_p2) + Number(MulTi_p4_p3) + Number(MulTi_p4_p4) + Number(MulTi_p4_p5);
  //division p4
  var Promedio4 = SUMA4 / 100;
  /* Para seccon P4*/$("#NOTAp4FINAL").val(Promedio4);
  /*Para el cuadro final */ $("#NOTAFINALp4").val(Promedio4);




   })
} 



//Funcion para eliminar registros
function eliminar(carnet)
{
   
  bootbox.confirm("Esta seguro de eliminar las notas del alumno ?", function(result) {

      if(result)
      {
       $.post("../ajax/"+CarpetaDelGrado+"/2Amat.php?op=eliminar", {carnet : carnet}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
        
       });  
          }
      }

          );



}





 inicial();