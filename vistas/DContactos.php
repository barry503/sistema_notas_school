
<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: login.php");
}else
{


if($_SESSION['administracionA']==1)
{  



 ?>



 <?php require'includes/header.php'; ?>




  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Miembros del sistema</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">Contactos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <section class="content">

<?php 

/* Conexion ala base de datos*/
  require_once ("../config/conexionPDOcontacto.php");


 ?>


<?php 

$todos=$base->query("SELECT * FROM usuario ")->fetchAll(PDO::  FETCH_OBJ);
      


 ?>  
      <!-- Default box -->
      <div class="card card-solid">
      
        <div class="card-body pb-0">


          <div class="row d-flex align-items-stretch">
            
              <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">

             <?php foreach ($todos as $usu){ ?> 
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Perfil de  <?php echo $usu->usuario;  ?> 
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b></b></h2>
                      <p class="text-muted text-sm"><b>Nombre: </b>  <?php echo $usu->nombre;  ?> </p>
                      <p class="text-muted text-sm"><b>Apellido: </b>  <?php echo $usu->apellido;  ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Direccion: <?php echo $usu->direccion;  ?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono #: + <?php echo $usu->telefono;  ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img width="110px" src="../files/usuarios/<?php echo $usu->imagen; ?>" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    
                   <!--   <button title="numero de telefono" type="button" class="btn btn-sm bg-success" data-toggle="modal" data-target="#modal-success">
                  <i class="fas fa-phone"></i>
                </button>  -->

      
                  <?php echo ($usu->condicion)?'<button class="btn btn-sm bg-success">Activo<button>': '<button class="btn btn-sm bg-danger">Desactivado<button>'; ?>
         
                
                   <button class="btn btn-sm bg-info">
                    <a href="mailto:<?php echo $usu->email;  ?>" >
                      Enviar un Mail <i class="fas  fa-envelope"></i> </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          
        <!-- /.card-body -->
        <div class="card-footer">
          
          


           


        </div>
        <!-- /.card-footer -->
   

    <!-- <div class="modal fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Llamar a <?php //echo $usu->nombre;  ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <p>Numero de telefono:503+<?php //echo $usu->telefono;  ?> &hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
              
            </div>
          </div> -->
          <!-- /.modal-content -->
        <!-- </div> -->
        <!-- /.modal-dialog -->
      <!-- </div> -->
<?php } #cierre de consulta ?>

      </div>
      <!-- /.card -->
       

    </div>


  </div>


    </section>
    <!-- /.content -->
    </div>





<?php
  }
 else {
  // require '';
  header("Location: noacceso.php");

 }
  ?>




<?php require'includes/footer.php'; ?>






<?php
 } 
ob_end_flush();
 ?>