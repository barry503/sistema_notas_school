<?php include '../reportes/includes/Conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Notas X Alumno | <?php echo $AInstitucion; ?> | Elige el Grado </title>

    
    <link rel="shortcut icon" href="../files/imgInstitucion/<?php echo $ImGI; ?>">
<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- tema yety de bootstrap -->
  <link rel="stylesheet" type="text/css" href="../reportes/bootstrap-temas/Lux/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../reportes/css/album.css">

    <!--external css iconos-->
  <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>
<body>

<?php  $titulo = 'Boletas X Alumno'; ?>

<!-- header-menu -->
<?php include '../reportes/includes/header.php'; ?>  


<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Reporte de notas X  alumnos .</h1>
      <p class="lead text-muted">En esta pagina podras ver los grados existentes. Elige el grado y presiona consultar para ver las notas de los alumnos de ese grado...</p>
      <p>
        <a href="#" class="btn btn-secondary my-2"> <i style="font-size: 80px;" class=" fa fa-files-o"></i><i style="font-size: 50px;" class=" fa fa-street-view">
                </i> </a>
        <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
      </p>
    </div>
  </section>

  <div class="album py-5 bg-primary">
    <div class="container">


<!-- fila para todas las targetas -->
 <div class="row">



<!-- targeta 1 -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/1.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 1° Primer grado.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=1" class="btn btn-sm btn-outline-primary" >Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>
<!-- fin targeta 1 -->





<!--  targeta 2 -->
<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/2.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 2° Segundo grado.</p> 
             <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=2" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>
<!-- fin targeta 2 -->









<!-- targeta 3 -->
<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/3.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 3° Tercer grado.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=3" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>
<!-- fin targeta 3 -->











<!--  targeta 4 -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/4.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 4° Cuarto grado.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=4" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 4 -->



<!--  targeta 5 -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/5.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 5° Quinto grado.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=5" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 5 -->



        
<!--  targeta 6 -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/6.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 6° Sexto grado.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=6" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 6 -->



<!--  targeta 7 -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/7.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 7° Septimo grado.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=7" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 7 -->





<!--  targeta 8 -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/8.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 8° Octavo grado.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=8" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 8 -->


<!--  targeta 9 -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/9.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 9° Noveno grado.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=9" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 9 -->






<!--  targeta 1bto -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/1bto.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 1 Año bachillerato Contador.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=10" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 1bto -->





<!--  targeta 2bto -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/2bto.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 2 Año bachillerato Contador.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=11" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 2bto -->




<!--  targeta 3bto -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/3bto.jpg" >
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 3 Año bachillerato Contador.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=12" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 3bto -->


<!--  targeta 1bto Salud -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <!-- <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/1bto.jpg" > -->
            <i style="font-size: 150px; " class="text-center  col-lg-12 col-md-12 col-sm-12 col-xs-12 fa fa-ambulance"></i>
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 1 Año bachillerato Salud.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=13" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 1bto Salud -->





<!--  targeta 2bto Salud -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <!-- <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/2bto.jpg" > -->
            <i style="font-size: 150px; color: #1f9bcf;" class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 fa  fa-stethoscope"></i>
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 2 Año bachillerato Salud.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=14" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 2bto Salud -->




<!--  targeta 3bto Salud -->
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                      <!-- en el contenedor -->
            <!-- <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  src="../files/img-reportes/3bto.jpg" > -->
            <i style="font-size: 150px; color: #d9534f;" class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 fa fa-medkit"></i>
  
            <div class="card-body">
              <p class="lead  text-primary">Reporte de notas de 3 Año bachillerato Salud.</p> 
              <p class="card-text">En este reporte podras buscar las notas de un  alumno del grado y seleccionando un periodo en especifico...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <!--  <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                  <a href="1.AjaxNotasXalumno.php?grado=15" class="btn btn-sm btn-outline-primary">Consultar </a>
                </div>
                <small class="text-muted">Pulsa el boton Consultar</small>
              </div>
            </div>
          </div>
        </div>

<!-- fin targeta 3bto Salud -->



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

<hr class="text-white mb-2">
<!-- pie de pajina -->


<!-- pie de pagina -->
<footer class="text-muted bg-primary ">
  
  <div class="container">
    <p class="float-right back-link back-backend">
     <a href="#" class="btn btn-info">Volver arriba </a>
    </p>
    <p class="text-white">Pagina de los grados a los cuales puedes consultar</p>
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







</body>
</html>
