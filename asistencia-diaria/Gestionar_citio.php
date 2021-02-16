<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: ../index.php");
}else
{


if($_SESSION['administrador']==1)
{  



 ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestionar citio web</title>
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
<!-- <link rel="stylesheet" media="screen" href="../public/precargaP/cargar.css"> -->

<link rel="stylesheet" type="text/css" href="Gestionar_citio/css/estilos.css">

</head>


<body class="hold-transition layout-top-nav">

     <?php  include ("../config/conexionPDOcontacto.php"); ?>
<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

<div class="wrapper">
<!-- include -->
<?php include 'Gestionar_citio/Consultas-sql.php'; ?>



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white  ">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../files/imgInstitucion/<?php echo $ImGI; ?>" alt="<?php echo $AInstitucion; ?>" class="brand-image img-circle elevation-3"
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
            <a href="../vistas/Descritorio.php" class="nav-link ">Escritorio</a>
          </li>
          <li class="nav-item">
            <a href="../vistas/Dperfil.php" class="nav-link ">My Perfil</a>
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


    <div class="container py-3"><!-- containeeer -->
<br>

      

<div class="card card-info card-outline ">
          <div class="card-header">
            <h2 class="card-title">
              <h3>
                <i class="fas fa-edit"></i>
                Editar Aspectos del Sistema
              </h3>
            </h2>
          </div>
          <div class="card-body">
            <h5>Informacion de la Institucion</h5>
            <div class="row ">
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <!-- enlaces para cada contenido -->
                  <!-- Enlace 1 -->
                  <a class="nav-link active" id="vert-tabs-logo-tab" data-toggle="pill" href="#vert-tabs-logo" role="tab" aria-controls="vert-tabs-logo" aria-selected="true">Logo-Institucion</a>
                  <!-- Enlace 2 -->
                  <a class="nav-link" id="vert-tabs-general-tab" data-toggle="pill" href="#vert-tabs-general" role="tab" aria-controls="vert-tabs-general" aria-selected="false">Informacion-General</a>
                  <!-- Enlace 3 -->
                  <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Mas Ajustes</a>


                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">

                  <div class="tab-pane text-left fade active show" id="vert-tabs-logo" role="tabpanel" aria-labelledby="vert-tabs-logo-tab">

                    <div class="container">
                      <div class="row">

                        <div class="col-lg-6 col-md py-3 col-sm-12 text-center" align="center" >  

                          <label for="imagefile" class="pointerAct">
                            <i  class="fas fa-image icoIsti"></i>
                            
                          </label>
                          <div class="custom-file">

                        <input class="custom-file-input pointerAct" type="file" name="imagefile" id="imagefile" onchange="upload_image();" >
                         
                        <label class="custom-file-label pointerAct" for="imagefile">Cambiar Logo-Institucion </label>
                      </div>


                        </div> 


                        <div class="col-lg-6 col-md py-3 col-sm-12 text-center" id="load_img"> 
                          
                        <!-- poner imagen de su perfil -->
                          <img class="img-circle imgILogo " src="../files/imgInstitucion/<?php echo $ImGI; ?>" alt="<?php echo $AInstitucion; ?>" > 
                        </div>

                      </div>
                      
                    </div>


                    <div class="py-3"></div>
                    <div class="py-3"></div>

                    <div class="py-3"></div>
                    <div class="py-3"></div>

                  </div>
                  <div class="tab-pane fade" id="vert-tabs-general" role="tabpanel" aria-labelledby="vert-tabs-general-tab">


                           <div id="respuesta_ajax">

                             <div class="text-center">
                               <h6 class="text-left text-secondary">Nombre de la institucion:</h6>
                                <h3 >COMPLEJO EDUCATIVO <?php echo $NombreIns; ?></h3>

                    
                               <h6 class="text-left text-secondary">Abreviatura de la institucion:</h6>
                               <h2 class="text-left"><?php echo $AInstitucion; ?></h2>


                               <h6 class="text-left text-secondary">Director de la institucion:</h6>
                               <h4 class="text-left"><?php echo $director; ?></h4>

                               <div class="py-3"></div>    



                            

                               <h6 class="text-left text-secondary">Año escolar:</h6>
                               <h2 class="text-left"><?php echo $año; ?></h2>

                               <div class="py-3"></div> 

                               
                               <h6 class="text-left text-secondary"> Informacion de la Institucion <i class="fa fa-exclamation"></i>:</h6>
                               <h2 class="text-left"><?php echo $informacion; ?></h2>

                               <div class="py-3"></div> 


                               

                           

                             </div>  

                           </div>  

                               <button type="button" class="btn btn-lg btn-info " data-toggle="modal" data-target="#ModalInstitucion"  >
                                 Edit Informacion-General
                               </button>

                               <div class="py-3"></div>    


                  </div>
                  
                  <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                      <div id="res_ajax">


                         <h6 style="font-size: 50px;"  class="text-left text-secondary"> <i class="text-orange fa  fa-envelope"></i> correo de la institucion :</h6>
                               <h2 class="text-left"><?php echo $correo; ?></h2>

                               <div class="py-3"></div> 

                         <h6 style="font-size: 50px;" class="text-left text-secondary"> <i class="text-danger  fas fa-map-marker-alt mr-1"></i> Direccion de la institucion:</h6>
                               <h2 class="text-left"><?php echo $direccion; ?></h2>

                               <div class="py-3"></div> 

                          <h6 style="font-size: 50px;" class="text-left text-secondary"> <i class="text-success fa fa-whatsapp"></i>  <i class="fa fa-tablet"></i> Telefono de la institucion:</h6>
                               <h2 class="text-left">503 + <?php echo $telefono; ?></h2>

                          <div class="py-3"></div> 

                          <div class="text-center">
                                 <h1 class="text-info">Urls Redes Sociales.</h1>
                                <h6 style="font-size: 50px;" class=" text-secondary"> <i style="color: #428BCA !important;" class="colorface fa  fa-facebook-square "></i> Facebook:</h6>
                                <h2 ><?php echo $facebook; ?></h2>
                                <h6 style="font-size: 50px;"  class=" text-primary"> <i class="fa  fa-twitter"></i> Twitter:</h6>
                                <h2 ><?php echo $twitter; ?></h2>
                               </div>


                         </div>



                               <button type="button" class="btn btn-lg btn-success " data-toggle="modal" data-target="#Modalseting"  >
                                 Editar Mas ajustes
                               </button>
                  </div>


                </div>
              </div>
            </div>


        
          </div>
          <!-- /.card -->
        </div>






</div><!-- /containeeer -->


</div><!-- /contenedooooo -->





</div>




     





<!-- Tablas modales -->



<!-- ventanas modales -->
 <div class="modal fade " id="ModalInstitucion" tabindex="-1" rol="">
  <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h4 class="modal-title">Modificar Informacion-General</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <!-- formulario de compra -->
              <form   method="post" id="formularioXD" >

                  
                <div class="form-row">
                  <div class="form-grup col">
                    <label > Nombre de la institucion:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="fa fa-building-o"></i></span>
                        </div>

                         <input type="text" class="form-control" name="Ninstitucion" arial-label="#basic-addon1" 
                         value='<?php echo utf8_encode($NombreIns); ?>'>

                    </div>  
                  </div>
                </div>



                <div class="form-row">
                  <div class="form-grup col">
                    <label > Abreviatura  de la institucion:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon2"><i class="fa fa-font "></i></span>
                        </div>

                         <input type="text" class="form-control" name="Abreviatura" arial-label="#basic-addon2" maxlength="8"
                         value='<?php echo $AInstitucion; ?>'>

                    </div>  
                  </div>
                </div>




                <div class="form-row">
                  <div class="form-grup col">
                    <label > Director de la institucion:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon3"><i class="fa fa-user "></i></span>
                        </div>

                         <input type="text" class="form-control" name="Idirector" arial-label="#basic-addon3" 
                         value='<?php echo $director; ?>'>

                    </div>  
                  </div>
                </div>


                <div class="form-row">
                  <div class="form-grup col">
                    <label > Año Escolar:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon3"><i class="fa  fa-calendar "></i></span>
                        </div>

                         <input type="text" class="form-control" name="Aescolar" arial-label="#basic-addon3" maxlength="4" value="<?php echo $año; ?> ">

                    </div>  
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-grup col">
                    <label > Informacion de la institucion:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon3"><i class="fa  fa-exclamation "></i></span>
                        </div>

                        
                       <textarea  class="form-control" name="informacion" arial-label="#basic-addon3" ><?php echo $informacion; ?></textarea>  

                    </div>  
                  </div>
                </div>



                <div id="respuesta_modal"> </div>
             


                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-info ">Cambiar</button>
                    </div>   

              </form>
              <!-- / formulario de compra -->

                 
                  


            </div>
            <div class="modal-footer justify-content-between">
              
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
 </div>
<!-- / ventanas modales -->



<!-- ventanas modales -->
 <div class="modal fade " id="Modalseting" tabindex="-1" rol="">
  <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h4 class="modal-title">Modificar Mas-Ajustes</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <!-- formulario de compra -->
              <form   method="post" id="ModalConfig" >

                  
                <div class="form-row">
                  <div class="form-grup col">
                    <label > Correo Electronico  de la institucion:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="bbasic-addon1"><i class="text-orange fa  fa-envelope"></i></span>
                        </div>

                         <input type="email" class="form-control" name="correo" arial-label="#bbasic-addon1" 
                         value='<?php echo utf8_encode($correo); ?>' required>

                    </div>  
                  </div>
                </div>



                <div class="form-row">
                  <div class="form-grup col">
                    <label > Direccion  de la institucion:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="bbasic-addon2"><i class="text-danger  fas fa-map-marker-alt mr-1"></i></span>
                        </div>

                         <input type="text" class="form-control" name="direccion" arial-label="#bbasic-addon2" 
                         value='<?php echo $direccion; ?>' required>

                    </div>  
                  </div>
                </div>




                <div class="form-row">
                  <div class="form-grup col">
                    <label > (WhatsApp)Telefono de la institucion:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="bbasic-addon3"><i class="text-success fa fa-whatsapp"></i></span>
                        </div>

                         <input type="text" class="form-control" name="telefono" arial-label="#bbasic-addon3" 
                         value='<?php echo $telefono; ?>' required>

                    </div>  
                  </div>
                </div>


                <div class="form-row">
                  <div class="form-grup col">
                    <label > Facebook de la institucion:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="bbasic-addon4"> <i style="color: #428BCA !important;" class="colorface fa  fa-facebook-square "></i></span>
                        </div>
 
                         <input type="text" class="form-control" name="facebook" arial-label="#bbasic-addon4"  value="<?php echo $facebook; ?> " required>

                    </div>  
                  </div>
                </div>



                 <div class="form-row">
                  <div class="form-grup col">
                    <label > Twitter  de la institucion:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="bbasic-addon5"> <i class=" text-primary fa  fa-twitter"></i></span>
                        </div>
 
                         <input type="text" class="form-control" name="twitter" arial-label="#bbasic-addon5"  value="<?php echo $twitter; ?> " required>

                    </div>  
                  </div>
                </div>



                

                <div id="res_modal"> </div>
             


                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-success ">Cambiar</button>
                    </div>   

              </form>
              <!-- / formulario de compra -->

                 
                  


            </div>
            <div class="modal-footer justify-content-between">
              
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
 </div>
<!-- / ventanas modales -->

<!-- fin modales -->








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
    <strong>Copyright &copy; 2020 <a href="#">Sistema de Notas y asistencia</a>.</strong> Todos los derechos reservados.
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


<script src="Gestionar_citio/js/p_ajax.js"></script>


</body>
</html>

 <?php
  }
 else {
  // require '';
  header("Location: ../vistas/noacceso.php");

 }
  ?>




<?php
 } 
ob_end_flush();
 ?>
