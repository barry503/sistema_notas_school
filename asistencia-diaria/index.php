<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asistencias de hoy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome 
    iconos-->
 <link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all"><link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  
  <!-- Theme style stylo del tema -->
  <link rel="stylesheet" href="../public/css/adminlte.min.css">
  
  <!-- Google Font: Source Sans Pro --><!-- fuente de letra -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



<!-- para precargar de la pagina -->
<link rel="stylesheet" media="screen" href="../public/precargaP/cargar.css">

</head>


<body class="hold-transition layout-top-nav">

     <?php  include ("../config/conexionPDOcontacto.php"); ?>
     <?php require'Gestionar_citio/Consultas-sql.php'; ?>
<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

<div class="wrapper">




  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../files/imgInstitucion/<?php echo $ImGI; ?>" alt="<?php echo $AInstitucion; ?>" alt="<?php echo $AInstitucion; ?>" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $AInstitucion; ?></span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../vistas/Descritorio.php" class="nav-link">Escritorio</a>
          </li>
          <li class="nav-item">
            <a href="../vistas/Dperfil.php" class="nav-link">My Perfil</a>
          </li>
         



        </ul>

     
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        


<li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
              class="fas fa-th-large"></i></a>
        </li>


      </ul>
    </div>
  </nav>
  <!-- /.navbar -->






  <div class="content-wrapper"><!-- contenedooooo -->


    <div class="container"><!-- containeeer -->


      


   <!--  <div class="container">
 

<br>
       <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="../vistas/Descritorio.php" class="btn btn-primary">volver a Escritorio</a>
                </div>
            </div>
        </div>
    </div> -->


        <!-- =========================================================== -->
        <h1 class="mb-2 mt-4 text-center"><img  style="width:200px; height: 200px; 
        border-radius: 10px; border-color: grey; 
        " class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " src="../files/img/onuva.jpg"></h1>
        <h3 class="mb-2 text-center bg-dark">Complejo Educativo  Nuestra Señora De Las Gracias.</h3>


<p class="text-center  text-gray">
  Realiza busquedas de una forma facil y efectiva <br>
  Solo introduce la fecha que quieres consultar dale ala <i  class="fas fa-search"></i>  y listo... 
</p>
<!-- SEARCH FORM -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form-inline ml-10 " >
      <div class="input-group input-group-sm">

        <input type="date" name="fecha" class="form-control form-control-navbar" value="<?php if ($_POST){ echo $fecha; } ?>"  >

        <div class="input-group-append">
          <button class="btn btn-navbar bg-dark" type="submit">
            <i style="color: #fff;" class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>




<br>



        <div class="row">
        


<!-- ----------------------contenedor de la tarjeta------------------------------- -->
             <div class="col-md-12">
            <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Todas las asistencias <!-- de cada grado -->...</h3>

                <div class="card-tools">

                  <!-- <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="asistencia-diaria.html" data-source-selector="#card-refresh-content" data-load-on-init="false"><i class="fas fa-sync-alt"></i></button> -->
                
               <!-- boton para inprimir -->
                <button type="button" class="btn btn-tool" onclick="inprimirMatutino()">Imprimir <i class="fas fa-print" title="inprimir "></i></button>

                  <!-- <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button> -->


                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>


                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->


                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             


<!-- ----------------------------------AQUI VA UN TURNO--------------------------------- -->
  <div>
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('../files/img/mañana.jpg') center center;">
                <h3 class="widget-user-username text-right">Contador de </h3>
                <h5 class="widget-user-desc text-right">Asistencias.</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle"  src="../files/img/onuva.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
       
       <!-- inicio imprimirMatutino -->
       <div id="inprimirMatutino"  >         
<div class="row mb-2">
             <div class="col-md-3 text-center ">Grados</div>
             <div class=" col-md-3  text-center  ">Todos<!-- Niños --></div>
             <div class="col-md-3 text-center ">Todas<!-- Niñas --></div>
             <div class=" col-md-3  text-center  ">Total</div>


          </div>


                <div class="row">


                        <?php //if($_POST){


$consultarMgrados=$base->query("SELECT idgrado, nombre_grado  FROM grado ")->fetchAll(PDO::  FETCH_OBJ);
 foreach ($consultarMgrados as $Mgrados)://$Mgrados -> puede ser cualquier frase y los dos puntos es para cortar esperando que se cierre con endforeach
    
      
 
    

   // date_default_timezone_set('America/El_Salvador');
    $hoy =  date_default_timezone_set('America/El_Salvador');
$hoy = date("Y-m-d ");
   if($_POST){
     $fecha = $_POST['fecha'];
  
    $hoy = $fecha;
  }

    $grado= $Mgrados->idgrado;

// hombres
  $H=$base->prepare(" SELECT * from alumnos WHERE nie in (SELECT nie FROM `asistencia` WHERE fecha LIKE '%$hoy%') and idgrado=$grado and idsexo='1' ");

// mujeres
  $Mujeres=$base->prepare(" SELECT * from alumnos WHERE nie in (SELECT nie FROM `asistencia` WHERE fecha LIKE '%$hoy%') and idgrado=$grado and idsexo='2' ");
  


    $H->execute();

    $TotalH = $H->rowCount();

    $Mujeres->execute();

    $TotalM = $Mujeres->rowCount();
    
    $sumaM=$TotalH+$TotalM;



 ?> 
                  <div class="col-sm-3 border-right">
                    <div class="description-block">
                    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
                      <span class="description-text text-muted"><div align="center">
 


                    <?php echo $Mgrados->nombre_grado; ?></div></span>
                    </div>

                 
                    <!-- /.description-block -->
                  



                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 border-right">
                    <div class="description-block">
                      <!-- <h5 class="description-header">Niños</h5> -->
                      <!-- <span class="description-text">_________</span> -->
                    </div>
                    <!-- /.description-block -->
                     <div align="center">Niños:<span  class=" badge bg-success"><?php 
                     echo $TotalH; ?></span></div>


                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3">
                    <div class="description-block">
                        <!-- <h5 class="description-header">Niñas</h5> -->
                      <!-- <span class="description-text">_________</span> -->
                    </div>
                    <!-- /.description-block -->
                       <div align="center">Niñas:<span style="color:#fff; background:#f012be;" class=" badge"><?php 
                     echo $TotalM; ?></span> </div>       



                  </div>
                  <!-- /.col -->

                   <div class="col-sm-3">
                    <div class="description-block">
                      <!-- <h5 class="description-header">Total</h5> -->
                       <!-- <span class="description-text">_________</span> -->
                    </div>
                    <!-- /.description-block -->
                          <div align="center">Total:<span  class="badge bg-primary "><?php 
                     echo $sumaM; ?></span> </div>
                           

                  </div>

                   <?php 
    endforeach;
    /*------------------------------------------------------------------------------------------------*/
  //}
    ?>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
<!-- final de inprimirMatutino-->
</div>

              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
<!-- ---------------------------------AQUI FINALIZA EL TURNO------------------------------ -->






              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
<!-- end--------------------tarjeta----------------------------------------------------- -->






        </div>
        <!-- /.row -->


 









  <div>
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('../files/img/photo1.png') center center;"><!-- background.jpg -->
                <h3 class="widget-user-username text-right">Nuestra Señora De Las Gracias.</h3>
                <h5 class="widget-user-desc text-right">Complejo Educativo....</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="../files/img/onuva.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Grados</h5>
                      <span class="description-text">___________</span>
                    </div>

                    <?php
                    // $coneion = new mysqli('localhost', 'root', '', 'sistema_asistencia');

                     $contargrados = mysqli_query($coneion,"SELECT COUNT(*) as grados FROM grado ");
 $resultado = mysqli_fetch_array($contargrados);
 $grados = $resultado['grados'];


  

 $sql_M = mysqli_query($coneion,"SELECT COUNT(*) as NA FROM alumnos WHERE idsexo='2'");
 $resultado = mysqli_fetch_array($sql_M);
 $NA = $resultado['NA'];


// include "coneion.php";
 $sql_H = mysqli_query($coneion,"SELECT COUNT(*) as Ni FROM alumnos WHERE idsexo='1'");
 $resultado = mysqli_fetch_array($sql_H);
 $Ni = $resultado['Ni'];


$Tniños = $NA + $Ni;
 ?>
                    <!-- /.description-block -->
                  <div align="center"><?php echo $grados; ?></div>



                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Niños</h5>
                      <span class="description-text">___________</span>
                    </div>
                    <!-- /.description-block -->
                     <div align="center"><span  class=" badge bg-success"><?php echo $Ni; ?></span></div>


                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3">
                    <div class="description-block">
                        <h5 class="description-header">Niñas</h5>
                      <span class="description-text">___________</span>
                    </div>
                    <!-- /.description-block -->
                       <div align="center"><span style="color:#fff; background:#f012be;" class=" badge"><?php echo $NA; ?></span> </div>       



                  </div>
                  <!-- /.col -->

                   <div class="col-sm-3">
                    <div class="description-block">
                      <h5 class="description-header">Total</h5>
                       <span class="description-text">___________</span>
                    </div>
                    <!-- /.description-block -->
                          <div align="center"><span  class="badge bg-primary "><?php echo $Tniños; ?></span> </div>
                           

                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->


              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->





          <!-- ////////////////////////////////////////////////////////////////////////////////// -->
        
      





</div><!-- /containeeer -->


</div><!-- /contenedooooo -->





</div>





    <a id="back-to-top" href="#" class="btn btn-secondary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->














  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Mas Opciones del Sistema.</h5>
      <p><a href="../vistas/Dnotificaciones.php" target="blank">Ir a Notificaciones</a></p>

        <p><a href="../vistas/Dgraficos.php" target="blank">Ir a Graficos</a></p>
      
        <p><a href="../MarcadorAsistencia-V3.1.4/" target="blank">Ir a Marcar asistencia</a></p>
      
        <p><a href="../vistas/DCalendario.php" target="blank">Ir a Calendario</a></p>

        <p><a href="../vistas/DContactos.php" target="blank">Ir a Contactos</a></p>


    </div>
  </aside>
  <!-- /.control-sidebar -->







  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <b>Version</b> 0.0.1 <i  class="fas fa-moon"></i>:
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="#">Sistema de Asistencia</a>.</strong> All rights reserved.
  </footer>



</div>






<!-- DataTables --><script src="../public/datatables/datatables.min.js"></script>

<!-- popper.min.js.map -->
<!-- <script src="../public/bootstrap/js/segundo.js"></script> -->
<!-- Bootstrap -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- <script src="../public/bootstrap/js/bootstrap.min.js"></script> -->

<!-- AdminLTE App --> <script src="../public/js/adminlte.js"></script>




<!-- para precarga de la pagina -->
<script src="../public/precargaP/Fcargar.js"></script>

<!-- libreria que imprime cualquier area de la pagina -->
<script  src="../public/libImprimidora/jquery.PrintArea.js"></script>

<script src="inprimidor.js"></script>


</body>
</html>
