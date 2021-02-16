<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: login.php");
}else
{
 ?>
<!-- cabezera -->
<?php require'includes/header.php'; ?>
 



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ver Notificaciones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">Notificaciones</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detalles del Sistema</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Notas</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $año; ?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Abreviatura</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $AInstitucion; ?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Asistencias.</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $año; ?><span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">

              <?php 

/* Conexion ala base de datos*/
  require_once ("../config/conexionPDOcontacto.php");


 ?>


<?php 

$todNotifi=$base->query("SELECT n.usuario, n.notificacion, n.fecha, n.enlace, u.usuario, u.imagen FROM notificaciones n INNER JOIN usuario u  ON n.usuario=u.usuario ")->fetchAll(PDO::  FETCH_OBJ);
      


 ?>    	
                  <h4>Todas las Notificaciones</h4><br><br>

<!----------------------------------------notificaciones inicio------------------------------------- -->
<?php foreach ($todNotifi as $noti){ ?> 
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../files/usuarios/<?php echo $noti->imagen;  ?>" alt="user image">
                        <span class="username">
                          <a href="#"><?php echo $noti->usuario;  ?>.</a>
                        </span>
                        <span class="description"> <?php echo $noti->fecha;  ?></span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                       <!-- la notificacion-->
                       <?php echo $noti->notificacion;  ?>.
                      </p>

                      <p>
                        <a href="<?php echo $noti->enlace;  ?>" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Enlace sugerido</a>
                      </p>
                    </div>
 

<?php } ?>
<!------------------------------------------notificaciones-fin------------------------------------- -->

                    


                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Sistemas <br>de Notas y Asistencia.</h3>
              <p class="text-muted">En esta pagina del sistema recibiran todas las  notificaciones  y comunicados de parte de los administradores.</p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Istitucion academica
                  <b class="d-block">CoMPLEJO EDUCATIVO <?php echo $NombreIns; ?>.</b>
                </p>
                <p class="text-sm">Director de la Istitucion
                	<!-- todos los autores -->
                 <!--  <b class="d-block">Jorge Aparicio.</b>
                  <b class="d-block">Jose Ramirez.</b> -->
                  <b class="d-block"><?php echo $director; ?>.</b> 
                </p>
              </div>

              <h5 class="mt-5 text-muted">Archivos de Ayuda</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary" ><i class="far fa-fw fa-file-word"></i> Manual-del-Sistema.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> Manual-del-Sistema.pdf</a>
                </li>
                <li>
                  <a href="mailto:<?php echo $correo; ?>" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> <?php echo $correo; ?></a>
                </li>
                <li>
                  <a href="../files/imgInstitucion/<?php echo $ImGI; ?>" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.jpg</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Manual de Usuario.docx</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="Descritorio.php" class="btn btn-sm btn-primary">Escritorio</a>
                <a href="#" class="btn btn-sm btn-warning">Aserca de...</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->







<!-- pie de pajina -->
  <?php require'includes/footer.php'; ?>

  
<?php
 } 
ob_end_flush();
 ?>