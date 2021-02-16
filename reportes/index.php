<?php include 'includes/Conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Indice Reportes y Consolidados | <?php echo $AInstitucion; ?> </title>

    
    <link rel="shortcut icon" href="../files/imgInstitucion/<?php echo $ImGI; ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" type="text/css" href="bootstrap-temas/Lux/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="css/album.css">

    <!--external css iconos-->
  <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>
<body>
<?php  $titulo = 'reportes y consolidados'; ?>
<!-- header-menu -->
<?php include 'includes/header.php'; ?>    


<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>REPORTES Y CONSOLIDADOS</h1>
      <p class="lead text-muted">En esta pagina podras realizar consultas de reportes y consolidados.</p>
      <p>
        <a href="#" class="btn btn-primary my-2"> <i style="font-size: 80px;" class=" fa fa-files-o"></i> </a>
        <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">


<!-- fila para todas las targetas -->
 <div class="row">



<!-- targeta 1 -->
<div class="col-md-6">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "   src="../files/img-reportes/Asignaturas.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Boletas  De Notas.</p> 
              <p class="card-text">Puedes ver y descargar las boletas de notas de los alumnos de la Institucion...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a  href="VistaOpcionCarrera.php" class="btn btn-sm btn-outline-primary">Ingresar </a>
                </div>
                <small class="text-muted">Pulsa el boton ingresar</small>
              </div>
            </div>
          </div>
        </div>        
<!-- fin targeta 1 -->





<!--  targeta 2 -->
<div class="col-md-6">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/matricula.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Matricula <?php echo $año; ?>.</p> 
              <p class="card-text">Puedes matricular los alumnos de la institucion...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a  href="matricula/index.php" class="btn btn-sm btn-outline-primary">Ingresar </a>
                </div>
                <small class="text-muted">Pulsa el boton ingresar</small>
              </div>
            </div>
          </div>
        </div>
<!-- fin targeta 2 -->








<!--  targeta 3 -->
       
<div class="col-md-6">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/conMaterias.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Consolidado de Materias por Periodo.</p> 
              <p class="card-text">En este consolidado podras buscar las Materias de cualquier periodo, seleccionando un grado en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1_consolidadoXPeriodo.php" class="btn btn-sm btn-outline-primary" >Ingresar </a>
                </div>
                <small class="text-muted">Pulsa el boton ingresar</small>
              </div>
            </div>
          </div>
        </div>
<!-- fin targeta 3 -->



<!--  targeta 4 -->
       
<div class="col-md-6">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/gradoymateria.png" >
  
            <div class="card-body">
              <p class="lead  text-primary">Consolidado de notas por Periodo.</p> 
              <p class="card-text">En este consolidado podras buscar las notas de cualquier periodo, materia o modulo y seleccionando un grado en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="0_consolidadoXPeriodoXmateria.php" class="btn btn-sm btn-outline-primary" >Ingresar </a>
                </div>
                <small class="text-muted">Pulsa el boton ingresar</small>
              </div>
            </div>
          </div>
        </div>
<!-- fin targeta 4 -->



<!-- targeta 5 -->
<div class="col-md-6">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/Conducta.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Consolidado de Conducta X Grado.</p> 
              <p class="card-text">En este Consolidado podras buscar la Conducta de cualquier Alumno en su grado respectivo...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="#" class="btn btn-sm btn-outline-primary">Ingresar </a>
                </div>
                <small class="text-muted">Pulsa el boton ingresar</small>
              </div>
            </div>
          </div>
        </div>
<!-- fin targeta 5 -->


        








       <!--  <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                     en el contenedor
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img/404.png" >
  
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
 -->

        

 



      </div> <!-- final de fila -->
    </div>
  </div>

</main>



<!-- pie de pagina -->
<?php include 'includes/footer.php'; ?>     


</body>
</html>
