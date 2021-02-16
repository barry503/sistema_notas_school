<?php 
session_start();
$usu= $_SESSION['admi'];//VARIABLE DE SESIÓN NOMBRE DE USUARIO
if (!isset($usu)) {
header("Location: index.php" );
}

 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <title>marcador-asistencia</title>
 <link href="css/persona-foto.svg" rel="icon" style="color:#17a2b8;" > 
  
  <!-- archivo para  CSS  de boostrap-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/cover.css">

  <!--external css iconos-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
</head>
<body>


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto iboton">
    <div class="inner">
      <h3 class="masthead-brand "><a href="#">Sistema de Marcacion...</a><?php //echo $usu; ?>

      </h3>
       
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="../vistas/Descritorio.php"><img src="css/persona-lineas.svg" style="background-color: #fff; border-radius: 10px;" height="40px">Administracion</a>
     <!--    <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a> -->
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <div class="row mb-2">




<div class="col-md-6 " align="center"> 
   <div class='col-md-12' id="inprimir_datosEntrada"></div>


            <!-- <img  style="border-radius: 10px;" width="110px" height="120px" src="img/logo.jpg"> -->

              <h1 class="cover-heading " >Marcar  
               <i class="text-success iboton"> Asistencia. 
                 <i style="font-size: 40px;" class=" fa fa-street-view">
                 </i>
               </i> 
              </h1>
              <form method="post" id="enviandoEntrada">

                <input class="form-control mr-sm-1 col-md-8 " name='carnet' id="carnet" type="text" placeholder="Coloca el carnet en el lector" autocomplete="off" pattern="[A-Za-z0-9_-]{1,15}">

                <br>
                <button type="submit" class="btn btn-lg btn-secondary col-md-8" >Marcar <i class="text-success">Ingreso</i></button>
                
                         </form>
</div>

            
<div class="col-md-6 " align="center"> 
   <div class='col-md-12' id="inprimir_datosSalida"></div>

            <!-- <img  style="border-radius: 10px;" width="110px" height="120px" src="img/logo.jpg"> -->
            <h1 class="cover-heading">Marcar 
              <i class="text-danger iboton"> Salida. 
                <i style="font-size: 40px;" class=" fa fa-street-view">
                </i>
              </i>
            </h1>


              <form method="post" id="enviandoSalida">
                <input class="form-control mr-sm-1  col-md-8" name='carnet' id="carnet" type="text" placeholder="Coloca el carnet en el lector" autocomplete="off" pattern="[A-Za-z0-9_-]{1,15}">
                <br>
                <button type="submit" class="btn btn-lg btn-secondary col-md-8" >Marcar <i class="text-danger">Salida</i></button>
                
                         </form>
</div>







</div>
   
 
  </main>



  <footer class="mastfoot mt-auto iboton"><br><br><br><br>
    <div class="inner">
      <p> Sistema de Marcacion <a href="#">version 3.1.4 </a>, IsTitUciOn<a href="#">@EduCaTiVa</a>.</p>
    </div>

    <div class="text-right">
      <p class="btn"><h3 ><a style="color: #dc3545;/*#e83b45*/" title="cerrar la session del administrador" href="index-login/salir.php">Cerrar session</a>.</h3></p>
    </div>
  </footer>



</div>



<!-- script de para boostrap  -->

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/primero.js"></script>
<script src="bootstrap/js/segundo.js"></script>
<script src="bootstrap/js/tercero.js"></script>
<!-- CARPETA DE JS -->
<script src="js/jquery.min.js"></script>



<!-- scripts para enviar datos con json por medio de ajax 
No alterar estructura
 -->

 <!-- para la entrada  -->
<script>
$( "#enviandoEntrada" ).submit(function( event ) {
  $('.guardar_datosEntrada').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "ajax/guardar_asistencia.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#inprimir_datosEntrada").html("Mensaje: Cargando...");
        },
      success: function(datos){
      $("#inprimir_datosEntrada").html(datos);
      $('.guardar_datosEntrada').attr("disabled", false);

      }
  });
  event.preventDefault();
})
</script>





<!-- para la salida  -->
<script>
  $( "#enviandoSalida" ).submit(function( event ) {
  $('.guardar_datosSalida').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "ajax/guardar_Salida.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#inprimir_datosSalida").html("Mensaje: Cargando...");
        },
      success: function(datos){
      $("#inprimir_datosSalida").html(datos);
      $('.guardar_datosSalida').attr("disabled", false);

      }
  });
  event.preventDefault();
})
</script>




</body>
</html>