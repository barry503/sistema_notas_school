<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Index para reportes</title>
<link rel="stylesheet" type="text/css" href="bootstrap/litera/bootstrap.min.css">
 

  <!-- <link rel="stylesheet" type="text/css" href="yeti-bootstrap/bootstrap.min.css"> -->


    <!--external css iconos-->
  <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
 <link rel="stylesheet" type="text/css" href="css/estilos-footer.css">

</head>
<body>



<!-- Cabezera -->
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Informacion</h4>
          <p class="text-muted">Si no puedes acceder a alguna de nuestras paginas 
            puedes contactarnos atraves de nuestras 
          redes sociales o nuestro correo.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contacto</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark  bg-info shadow-sm" ><!--bg-dark  -->
    <div class="container d-flex justify-content-between">
      <a  href="#" class="navbar-brand d-flex align-items-center">
             <i style="font-size: 40px;" class=" fa fa-files-o"></i> 
        <strong >Grado y Materia</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<!-- final de  Cabezera  -->


<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Selecciona el grado y la materia </h1>
      <p class="lead text-muted">Selecciona alguna de las dos opciones y presiona el boton consultar.</p>
      <p>

     

<form method="post" id="enviandoConsulta">
   <div class="row mb-2">

<div class="col-md-8" align="center"> 

 


 <?php  /* Connexion a la base de datos*/ 
  include '../config/conexionPDOcontacto.php'; ?>
    
 <select class="btn btn-dark my-2 " name="grado" id="grado">
<option>Selecciona el grado</option>
<?php   $query_grados=$base->query("SELECT * FROM grado ")->fetchAll(PDO::  FETCH_OBJ);
      foreach ($query_grados as $grado){
?>
<option value="<?php echo $grado->idgrado; ?>"><?php echo $grado->nombre_grado; ?></option>   
  
<?php    } ?>

 </select>



  <select class="btn btn-info my-2 " name="materia" id="materia">
<option>Selecciona la materia</option>
<?php   $query_materias=$base->query("SELECT * FROM materias")->fetchAll(PDO::  FETCH_OBJ);
      foreach ($query_materias as $materia){
?>
<option value="<?php echo $materia->idmaterias; ?>"><?php echo $materia->NOMMAT; ?></option>   

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
 <div class="row" id="imprimir_los_datos">








      </div> <!-- final de fila -->
    </div>
  </div>

</main>



<br><br><br><br><br><br><br><br><br>

<!-- pie de pagina -->
<footer class="text-muted bg-dark">
  <div class="container">
    <p class="float-right">
      <a href="#">Volver arriba</a>
    </p>
    <p>Pagina de reportes y consolidados</p>
    <p><a href="#" class="text-white">Volver ala homepage  &copy;</a> todos los reportes <a href="#" class="text-white">para cada tipo de reporte</a>.</p>
  </div>
</footer>

<!-- fin  pie de pagina -->





<!-- script -->

<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<script src="bootstrap/js/primero.js"></script>
<script src="bootstrap/js/segundo.js"></script>
<script src="bootstrap/js/tercero.js"></script>
<!-- CARPETA DE JS -->
<script src="js/jquery.min.js"></script>


<!-- AdminLTE App --><script src="../public/js/adminlte.js"></script>

<!-- libreria que imprime cualquier area de la pagina -->
<script  src="../public/libImprimidora/jquery.PrintArea.js"></script>

<!-- funcion para inprimir -->
<script >
  
// Funcion para imprimir el codigo de barras
function inprimir()
{
  $("#idTablaprint").printArea();
}


</script>



<!-- para la traida de la tabla  -->
<script>
  $( "#enviandoConsulta" ).submit(function( event ) {
  $('.guardar_Consulta').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "ajax/ConsolidadoXGradoyMateria.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#imprimir_los_datos").html("Mensaje: Cargando los datos...");
        },
      success: function(datos){
      $("#imprimir_los_datos").html(datos);
      $('.guardar_Consulta').attr("disabled", false);

      }
  });
  event.preventDefault();
})
</script>



</body>
</html>
