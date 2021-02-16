<?php include 'includes/Conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Opciones  | EDUCACION BASICA, BACHILLERATO CONTADOR, BACHILLERATO SALUD | <?php echo $AInstitucion; ?> </title>

    
    <link rel="shortcut icon" href="../files/imgInstitucion/<?php echo $ImGI; ?>">

   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
 <!-- Theme style -->
  <!-- <link rel="stylesheet" href="../public/css/adminlte.min.css"> -->

  <link rel="stylesheet" type="text/css" href="bootstrap-temas/sketchy/bootstrap.min.css">


    <!--external css iconos-->
  <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
 <link rel="stylesheet" type="text/css" href="css/estilos-footer.css">
<link rel="stylesheet" type="text/css" href="css/style-btn-naranja.css">

</head>
<body>


<?php $titulo = 'Opciones'; ?>

<!-- header -->
<?php include 'includes/header.php';  ?>
<!-- /header -->


<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Selecciona Una Opcion. </h1>
      <p class="lead text-muted">Selecciona una de las tres opciones para ver las notas de los alumnos.</p>
      
       
       <div class="container">
        <div class="row ">

            <div class="col-md-4">
             <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
                 <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/0.EducacionBasica.jpg" >
  
                <div class="card-body">
                 <p class="lead  text-primary"> EDUCACION BASICA</p>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                    <a href="VistaOpcionBasica.php" class="btn btn-sm btn-outline fondo-colorNaranja" >Acceder </a>
                   </div>
                   <small class="texto-colorNaranja">Pulsa el boton Acceder</small>
                 </div>
               </div>
             </div>
           </div>


           <div class="col-md-4">
             <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
                 <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/0.btoContador.jpg" >
  
                <div class="card-body">
                 <p class="lead  text-primary">BACHILLERATO CONTADOR</p>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                    <a href="2_1_VistaNotasBtoContador.php" class="btn btn-sm btn-outline-primary" >Acceder </a>
                   </div>
                   <small class="text-primary">Pulsa el boton Acceder</small>
                 </div>
               </div>
             </div>
           </div>


           <div class="col-md-4">
             <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
                 <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/0.btoSalud.jpg" >
  
                <div class="card-body">
                 <p class="lead  text-primary"> BACHILLERATO SALUD</p>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                    <a href="3_VistaNotasBtoSalud.php" class="btn btn-sm btn-outline-info" >Acceder </a>
                   </div>
                   <small class="text-info">Pulsa el boton Acceder</small>
                 </div>
               </div>
             </div>
           </div>



          </div>
       </div>


       </div>

       

       
     
   
      


      
  
      
    </div>
  </section>

  

</main>






<!-- footer -->
<?php include 'includes/footer.php';  ?>
<!-- /footer -->








</body>
</html>
