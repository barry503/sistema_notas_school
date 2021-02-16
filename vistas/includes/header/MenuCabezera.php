
  <!-- Navbar   colores que puedes elegir navbar-white , navbar-yellow, navbar-green-->
  <nav class="main-header navbar navbar-expand navbar-info navbar-light"><!-- navbar-light -->
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Descritorio.php" class="nav-link">Escritorio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="DContactos.php" class="nav-link">Contactos</a>
      </li>

 <li class="nav-item d-none d-sm-inline-block">
    <!--id=TimeZone=zona horaria traida de ip-api/json -->
        <a href="#" class="nav-link" id="TimeZone"></a>
      </li>


    </ul>


<ul class="navbar-nav ml-auto">
    <!-- id=C_time=hora actual -->
        <!-- <li id="C_time" class="nav-item text-gray">

        
      </li> -->

</ul>  
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


      <?php
/* Conexion ala base de datos*/
  require_once ("../config/conexionPDOcontacto.php");
  // consulta para contar mensajes
  $sqlcountSms = mysqli_query($coneion,"SELECT COUNT(*) as countMensajs FROM comentarios_perfil ");
 $objSms = mysqli_fetch_array($sqlcountSms);
 $countMensajs = $objSms['countMensajs'];
  ?>

<!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"><?php echo $countMensajs; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">


<?php 

$vermensa=$base->query("SELECT Csms.usuario, Csms.comentario, Csms.fecha, U.usuario, U.imagen    FROM comentarios_perfil Csms INNER JOIN usuario U  ON Csms.usuario=U.usuario   ")->fetchAll(PDO::  FETCH_OBJ);
      

 ?>   

        
          <a href="Dperfil.php" class="dropdown-item">
            <?php foreach ($vermensa as $ASsms){ ?> 
            <!-- Message Start -->
            <div class="media">
              <img src="../files/usuarios/<?php echo $ASsms->imagen;  ?>" alt="Foto" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php echo $ASsms->usuario;  ?> 
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Nuevo mensaje...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <?php echo $ASsms->fecha;  ?></p>
              </div>
            </div>

             <div class="dropdown-divider"></div>
            <!-- Message End -->
          <?php } ?>
          </a>
         

           





          <div class="dropdown-divider"></div>
          <a href="Dperfil.php" class="dropdown-item dropdown-footer">
            <?php if($countMensajs == 0){ echo '<i class="fa fa-warning"></i> mensajeria vacia'; }else { echo $countMensajs.' nuevos mensajes';  } ?></a>
        </div>
      </li>



      <!-- Messages Dropdown Menu -->
    
<?php
/* Conexion ala base de datos*/
  // require_once ("../config/conexionPDOcontacto.php");
  // consulta para notificaciones
  $sqlcountNoti = mysqli_query($coneion,"SELECT COUNT(*) as notificaciones FROM notificaciones ");
 $objNotifi = mysqli_fetch_array($sqlcountNoti);
 $CountNotificacion = $objNotifi['notificaciones'];
  ?>



      <!-- Notificaciones Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?php echo $CountNotificacion; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo $CountNotificacion; ?> Notificaciones</span>
          <div class="dropdown-divider"></div>

<?php 
#consulta en la tabla de notificaciones
$sqlNotifi=$base->query("SELECT usuario, fecha FROM notificaciones  ")->fetchAll(PDO::  FETCH_OBJ);
      


 ?>   
<?php foreach ($sqlNotifi as $Noti){ ?> 
          <a href="Dnotificaciones.php" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>Notificacion de <?php echo $Noti->usuario;  ?>
            <span class="float-right text-muted text-sm"><?php echo $Noti->fecha;  ?></span>
          </a>
         <div class="dropdown-divider"></div>
<?php } ?>



          

          <!-- <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 nuevos reportes 
            <span class="float-right text-muted text-sm">2 dias</span>
          </a> -->


          <div class="dropdown-divider"></div>



          <a href="#" class="dropdown-item dropdown-footer">todas las Notificaciones</a>
        </div>
      </li>


<!-- perfil en cabezera -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" >
         
          <img  src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image img-circle elevation-2" alt="usuario">


          <span class="d-none d-md-inline"><?php echo $_SESSION['usuario']; ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header  Opsoletobg-secondary bg-info">
            
            <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle elevation-2" alt="usuario">

            <p>
              <?php echo $_SESSION['nombre']; ?>,<?php echo $_SESSION['apellido']; ?>
              <small ><!--id="Contadorfecha" 2020 El salvador-santa Tecla -->
                <!-- p para ver fecha de hoy -->
               <!-- <p id="C_date"></p> -->

               <?php echo date("D-d-M-Y")/*, strtotime("+ HOURS")*/ ?>
               

              </small>
            </p>
          </li>
           <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#">Bienvenido:</a>
              </div>
              <div class="col-4 text-center">
                <a href="#"><i class="fa fa-users"></i></a>
              </div>
              <div class="col-4 text-center">
                <a href="#">sistema <i class="icon-deno"></i></a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          </li>


          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="Dperfil.php" class="btn btn-default btn-flat">
                       Perfil 
          </a>
             <!-- href="../ajax/editablas/ajax_Usuario.php?op=salir" No funciona en el hosting-->
             <?php /*Variable para cerrar la session*/ $usuario0salirXD = $_SESSION['usuario']; ?>
             <?php /*Variable para cerrar la session*/ $ImgSalirXD = $_SESSION['imagen']; ?>

             <input type="hidden" name="usuario0salirXD" value="<?php echo $usuario0salirXD; ?>">
             <input type="hidden" name="ImgSalirXD" value="<?php echo $ImgSalirXD; ?>"> 
           
           <a  onclick="FCerrandOSecion()" class="btn float-right  btn-default btn-flat"> 
                   Cerrar Sesión <i class=" fa  fa-power-off"></i>  
           
           </a>

          </li>
        </ul>
      </li>
<!-- Fin de perfil en cabezera -->


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->