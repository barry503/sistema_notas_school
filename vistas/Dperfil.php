<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: login.php");
}else
{


// if($_SESSION['escritorio']==1)
// {  



 ?>
 <?php require'includes/header.php'; ?>

<div class="content-wrapper">
  


   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">Perfil usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">




  <!-- vista del perfil del usuario -->
            <!-- Profile Image -->
            <div class="card card-info card-outline">
              <div class="card-body box-profile">
                <div class="text-center" id="load_img">



 <!-- poner imagen de su perfil -->
          <img  class="profile-user-img img-fluid img-circle" alt="<?php echo $_SESSION['usuario']; ?>" src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" >   
                </div>


<h3 class="profile-username text-center"><?php echo $_SESSION['nombre']; ?></h3>
<p class="text-muted text-center"><?php echo $_SESSION['apellido']; ?></p>
              

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                      <b>Usuario:</b><a class="float-right"><?php echo $_SESSION['usuario']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Contraseña:</b> <a class="float-right" href="#"><b>Encriptada con el algoritmo <!-- Hash --> SHA256 </b></a>
                  </li>
                  <li class="list-group-item">
                    <b>My Correo: </b><a><?php echo $_SESSION['email']; ?></a>
                  </li>
          <p class="text-muted text-center">  enviar un correo al administrador
                       <!--   <br> admin@gmail.com --></p>
                <a href="mailto:<?php echo $correo; ?>" class="btn btn-info btn-block"><b>enviar correo </b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<!-- termina la vista del perfil -->





 
<!-- Informacion de la Istitucion. AQUI IVA ANTERIORMENTE -->




</div> <!-- /.col -->
              <div class="col-md-8">
                   <div class="card">

              	<!-- card-header tarjeta-cabeza -->
<div class="card-header p-2">
                <ul class="nav nav-pills">

                  <li class="nav-item">
                    <a class="nav-link active" href="#activity" data-toggle="tab">Mensajes</a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab">soporte</a>
                  </li>
  

                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab">ajustes de usuario</a>
                  </li>


                </ul>
</div><!-- /.card-header -->






<!-- // tarjeta cuerpo  -->




<!-- // tarjeta cuerpo  -->
                                <div class="card-body">
                                  <div class="tab-content">


	<!-- para pubicaciones -->
                  <div class="active tab-pane" id="activity">
                    



                
                    <!-- Post -->
                    <div class="post clearfix">

                       <!-- vista de los reportes -->
                       <?php include'perfil/vistaReportes.php'; ?>
                        <!-- vista de los reportes -->
              <!-- /.card-footer -->
                    </div>
                    <!-- /.post -->
   

                    <!-- Post para imagen -->
                   <?php //include'perfil/post-con-foto.php'; ?>
                   

                    <!-- /. Post para imagen  fin-->


                  </div>


  <!-- termina para pubicaciones -->

   <!-- linea de tiempo -->
                   <?php include'perfil/time_line.php'; ?>

<!-- linea de tiempo fin -->



<!-- formulario para actualizar los datos -->
   <?php include'perfil/form-edit-perfil.php'; ?>

   <!-- formulario para actualizar los datos fin -->



                  <!-- /.tab-pane -->
                                     </div>
                <!-- /.tab-content -->
                                          </div><!-- /.card-body -->




            </div>
            <!-- /.nav-tabs-custom -->



<!-- ------------------------------------------------------------------------------------------->
<div class="col-md-12">
   <!-- About Me Box -->
            <!-- informacion sobre el la istitucion -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><img src="../files/imgInstitucion/<?php echo $ImGI; ?>" alt="<?php echo $AInstitucion; ?>" class="brand-image img-circle elevation-3"
           style="opacity: .8; width: 50px;">
           Informacion de la Istitucion.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Nombre de <!-- <br> --> la institucion</strong>

                <p class="text-muted">
                 COMPLEJO EDUCATIVO <br><?php echo $NombreIns; ?>     <!-- <br> PAIS:   "EL SALVADOR" -->.
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Direccion</strong>

                <p class="text-muted"> <?php echo $direccion; ?>.</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Contactanos</strong>

                <p class="text-muted">
                  <span class="tag tag-danger"> <a style="color: #428BCA !important;" href="<?php echo $facebook; ?>"><i class="fa  fa-facebook-square"></i> Facebook </a> </span><br>


                  <span class="tag tag-success"> <a href="<?php echo $twitter; ?>"><i class="fa  fa-twitter"></i> Twitter </a></span><br>


                  <span class="tag tag-info"> <a class="text-success" href="https://api.whatsapp.com/send?phone=503<?php echo $telefono; ?>&text=Hola%20quiero%20realizar%20una%20consulta%20aserca %20del%20sistema%20de%20notas%20"><i class="fa fa-whatsapp"></i> 503 + <?php echo $telefono; ?>  </a> </span><br>


                  <span class="tag tag-warning"> <a class="text-danger" href="mailto:<?php echo $correo; ?>"><i class="fa  fa-envelope"></i> Correo Electronico </a> </span><br>


                  <!-- <span class="tag tag-primary"> <a href="">Instagram </a></span> -->
                </p>

                <hr>

                <!-- <strong><i class="far fa-file-alt mr-1"></i> Nota</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<!-- termina la informacion sobre la istitucion-->

</div>
<!----------------------------------------------------------------------------------------------- -->
          </div>
          <!-- /.col -->



        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->





    </section>
    <!-- /.content -->





    </div>
    <!-- /.content -->






<?php require'includes/footer.php'; ?>

<script src="scripts/editar_perfil.js"></script>
<script src="scripts/mensajes_perfil.js"></script>



<?php
 //  }
 // else {
 //  // require '';
 //  header("Location: noacceso.php");

 // }
  ?>






<?php
 } 
ob_end_flush();
 ?>