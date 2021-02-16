<?php include 'includes/Conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Opciones  | EDUCACION BASICA, 1° GRADO A 6° GRADO, 7° GRADO A 9° GRADO   | <?php echo $AInstitucion; ?> </title>

    
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


<?php $titulo = 'OpcionEduBasica'; ?>

<!-- header -->
<?php include 'includes/header.php';  ?>
<!-- /header -->


<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Selecciona Una Opcion De Educacion Basica. </h1>
      <p class="lead text-muted">Selecciona una de las dos opciones para ver las notas de los alumnos.</p>
      
       
       <div class="container">
        <div class="row ">

            <div class="col-md-6">
             <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
                 <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/basic1.jpg" >
  
                <div class="card-body">
                 <p class="lead  text-primary"> EDUCACION BASICA <br><div class="texto-colorNaranja"> 1° GRADO A 6° GRADO </div> </p>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                    <a href="2_VistaNotasXgradoBasica1A6.php" class="btn btn-sm btn-outline fondo-colorNaranja" >Acceder </a>
                   </div>
                   <small class="texto-colorNaranja">Pulsa el boton Acceder</small>
                 </div>
               </div>
             </div>
           </div>


           <div class="col-md-6">
             <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
                 <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/basic2.jpg" >
  
                <div class="card-body">
                 <p class="lead  text-primary"> EDUCACION BASICA <br><div class="texto-colorBlue">7° GRADO A 9° GRADO</div> </p>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                    <a href="2_VistaNotasXgradoBasica7A9.php" class="btn btn-sm btn-outline fondo-colorBlue" >Acceder </a>
                   </div>
                   <small class="texto-colorBlue">Pulsa el boton Acceder</small>
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
