<?php if(strlen(session_id()) < 1)
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- consultas para el proyecto -->
<?php require'../config/conexionPDOcontacto.php'; ?>
<?php require'../asistencia-diaria/Gestionar_citio/Consultas-sql.php'; ?>
  <title>Sistemas | Notas y Asistencia | <?php echo $AInstitucion; ?></title>
  <link rel="shortcut icon" href="../files/imgInstitucion/<?php echo $ImGI; ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css"> -->

  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  
  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css"> -->
<link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">


<!-- pace-progress barra de progreso verde de arriba -->
  <link rel="stylesheet" href="../public/css/pace-progress/themes/black/pace-theme-flat-top.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  


 <!--datatables CSS básico-->
     <!-- DataTables -->
  <link rel="stylesheet" href="../public/datatables/datatables.min.css">

<!-- Fin datatables -->

<!-- para usar el select con otra tabla -->
<link rel="stylesheet" type="text/css" href="../public/bootstrap-select/css/bootstrap-select.min.css">


<!-- para precargar de la pagina -->
<link rel="stylesheet" media="screen" href="../public/precargaP/cargar.css">



</head>
<body id="bodyman" class="hold-transition sidebar-mini pace-gray bodyman">



<div class="wrapper">




  <!-- Page Preloder precarga de pagina -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



<!-----------------------------------------Inicio MenuCabezera--------------------------------------->



<?php require'includes/header/MenuCabezera.php'; ?>


<!--------------------------------------Fin MenuCabezera------------------------------------->








<!-- ------------------------------------Inicio MenuDerecho-------------------------------------- -->
  <!-- Main Sidebar Container -->
  <!-- estilo defecto <aside class="main-sidebar sidebar-dark-primary elevation-4"> -->
  <aside class="main-sidebar sidebar-dark-info  elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../files/imgInstitucion/<?php echo $ImGI; ?>" alt="<?php echo $AInstitucion; ?>" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $AInstitucion; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar " > <!-- badge-info -->
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle elevation-2" alt="usuario Img">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['usuario']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
   <li class="nav-item has-treeview ">  <!--menu-open-->
            <a href="#" class="nav-link active">
              <i class="nav-icon fas  fa fa-th "></i>
              <p>
                Sistema
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>   

            <ul class="nav nav-treeview">
              
             <li class="nav-item">
                <a href="Descritorio.php" class="nav-link bg-success active">
                  <i class="fa fa-desktop nav-icon"></i>
                  <p>Escritorio</p>
                </a>

                <a href="Dperfil.php" class="nav-link bg-gray active">
                  <i class="far fa-user nav-icon"></i>
                  <p>Perfil</p>
                </a>
              </li>

            </ul>


          </li>



<!-- Permisos para el Administrador de todo el portal -->
  <?php require'includes/header/administrador.php'; ?>

<!--/ Permisos para el Administrador de todo el portal -->


<!-----------permoso para ver las asistencias de hoy los alumnos y todas las tablas del sistema----------------------------->

   <?php require'includes/header/administracionA.php'; ?>


<!-------- /  permoso para ver las asistencias de hoy los alumnos y todas las tablas del sistema------------------------------->


<li class="nav-header"><i class="nav-icon fa  fa-sitemap "></i> Grados </li>

<!---------------------------------------------Menus  por  de los grados ------------------------------------------------>

<!-- aqui va el contenedor de de la tabla y el formulario -->
<?php require'includes/header/Menu_grados.php'; ?>


<!------------------------------------------/ Menus  por  de los grados ------------------------------------------------>



<!-- Apartado de mas herramientas de sistema -->

          <li class="nav-header"><i class="nav-icon fa  fa-wrench"></i> Mas herramientas </li>

<!-------------------------------------- Mas herramientas del sistema------------------------------------------  -->
<?php require'includes/header/MasHerramientas.php'; ?>

<!------------------------------------ / Mas herramientas del sistema------------------------------------------  -->


          <li class="nav-header">Accesos Públicos</li>
          <li class="nav-item">
            <a href="../reportes/" class="nav-link">
              <i class="nav-icon far fa fa-file-text-o text-primary"></i>
              <p class="text">Reportes</p>
               <span class="badge badge-primary right"><i class="fa  fa-print"></i></span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square text-danger"></i>
              <p class="text">Ayuda</p>
               <span class="badge badge-danger right">PDF</span>
            </a>
          </li>




          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-exclamation-circle text-warning"></i>
              <p>Aserca de...</p>
               <span class="badge badge-warning right">Proyect</span>
            </a>
          </li>

          <!-- PROGRAMADORES O DESARROLLADORES -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-coffee text-info"></i>
              <p>Programadores</p>
            </a>
          </li> -->



        </ul>
<!-- / Apartado de mas herramientas de sistema -->

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



<!-- ----------------------------------------- Fin MenuDerecho------------------------------- -->