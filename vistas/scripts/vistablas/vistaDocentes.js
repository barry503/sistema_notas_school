var tabla;


//Funcion que se ejecuta al inicio
 function inicial(){
     mostrarform(false);
     listar();

     
     

 }



//Funcion mostrar formulario condi=condicion del formulario
function mostrarform(condi)
{
  
  if (condi)
  {

    /* ocultando el titulo*/ $("#titleI").hide();
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

                         url: "../ajax/vistaDocentes.php?op=listar",
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












 inicial();