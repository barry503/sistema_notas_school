<?php include '../reportes/includes/Conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Notas X alumno | <?php echo $AInstitucion; ?> </title>

    
    <link rel="shortcut icon" href="../files/imgInstitucion/<?php echo $ImGI; ?>">

   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
 <!-- Theme style -->
  <!-- <link rel="stylesheet" href="../public/css/adminlte.min.css"> -->

  <link rel="stylesheet" type="text/css" href="../reportes/bootstrap-temas/sketchy/bootstrap.min.css">


    <!--external css iconos-->
  <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
 <link rel="stylesheet" type="text/css" href="../reportes/css/estilos-footer.css">

</head>
<body>

<?php  $titulo = 'Boletas X Alumno'; ?>
<!-- header -->
<?php include '../reportes/includes/header.php';  ?>
<!-- /header -->


<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Selecciona el Periodo y el Alumno </h1>
      <p class="lead text-muted">Selecciona el alumno del cual quiere ver las notas y presiona el boton consultar.</p>
      <p>

     

<form method="post" id="ConsultaXalumno">
   <div class="row mb-2">

<div class="col-md-8" align="center"> 

 


 <?php  /* Connexion a la base de datos*/ 
  include '../config/conexionPDOcontacto.php'; ?>

<!-- para implementar el metodo get para ver el grado -->
<?php  /*provicional*/  //$GetGrado =12;
/*ORIGINAL*/$GetGrado=$_GET["grado"]; ?>

 <select class="btn btn-secondary my-2 " name="periodo" id="periodo">
<option value="0">Selecciona el Periodo</option>

<option value="1">1-PRIMER PERIODO</option> 
<option value="2">2-SEGUNDO PERIODO</option> 
<option value="3">3-TERCER PERIODO</option> 
<option value="4">4-CUARTO PERIODO</option>   


 </select>

<input type="hidden" name="grado" value="<?php echo $GetGrado; ?>">

 <select class="btn btn-secondary my-2 " name="alumno" id="alumno">
<option value="0">Selecciona el alumno</option>
<?php   $query_Alumnos=$base->query("SELECT carnet, CONCAT(nombre,' ,',apellido) AS nombr FROM alumnos WHERE idgrado='$GetGrado' ")->fetchAll(PDO::  FETCH_OBJ);
      foreach ($query_Alumnos as $alumno){
?>
<option value="<?php echo $alumno->carnet; ?>"><?php echo $alumno->nombr; ?></option>   
  
<?php    } ?>

 </select>




      <p>
</div>

  <div class="col-md-4" align="left"> 
   <button type="submit" class="btn  btn-lg btn-primary col-md-8"> Consultar </button> 


</div>

   

</div>

</form>
      


      
      
        <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">


<!-- fila para todas las targetas -->
 <div class="row" id="PrintdatosCXalumno">



        

<!-- <div class="table-responsive" id="idTablaprint"> -->


<!-- </div> -->




      </div> <!-- final de fila -->
    </div>
  </div>

</main>



<br><br><br><br><br><br><br><br><br>



<!-- pie de pagina -->
<footer class="text-muted bg-primary ">
  
  <div class="container">
    <p class="float-right back-link back-backend">
     <a href="#" class="btn btn-info">Volver arriba </a>
    </p>
    <p class="text-white">Pagina de los Alumnos a los cuales puedes consultar</p>
    <p class="text-white"><a href="#" class="text-info">Volver ala homepage  &copy;</a> todos los reportes <a href="#" class="text-info">para cada tipo de reporte</a>.</p>
  </div>
  
</footer>

<!-- fin  pie de pagina -->





<!-- script -->

<!-- <script src="bootstrap-temas/js/bootstrap.min.js"></script> -->
<script src="../reportes/bootstrap-temas/js/primero.js"></script>
<script src="../reportes/bootstrap-temas/js/segundo.js"></script>
<script src="../reportes/bootstrap-temas/js/tercero.js"></script>
<!-- CARPETA DE JS -->
<script src="../reportes/js/jquery.min.js"></script>


<!--/ script -->





<!-- libreria que imprime cualquier area de la pagina -->
<script  src="../public/libImprimidora/jquery.PrintArea.js"></script>


<!-- libreria para el boton de  guardarYactualizar=btnGuardar  para usar actualizacion de pagina-->
<script  src="../public/sweetalert2@9/sweetalert2@9.js"></script>



<!-- funcion para inprimir --> <!-- para la traida de la tabla  -->
<script >

// Funcion para imprimir todos los reportes
function inprimir()
{
  $("#idTablaprint").printArea();
}


  // _____________________________________________________________________________________________________________________________________
// consulta para el archivo src=reportes/1.VistaNotasXalumno.php
  $( "#ConsultaXalumno" ).submit(function( event ) {
  $('.guardar_Consult').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "CarpetaGrados/index.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#PrintdatosCXalumno").html("Mensaje: Cargando los datos...");
        },
      success: function(datos){
      $("#PrintdatosCXalumno").html(datos);
      $('.guardar_Consult').attr("disabled", false);
      inprimir();

      }
  });
  event.preventDefault();
})

// _____________________________________________________________________________________________________________________________________F


</script>






</body>
</html>
