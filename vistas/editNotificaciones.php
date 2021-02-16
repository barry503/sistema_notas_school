<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: login.php");
}else
{


if($_SESSION['administrador']==1)
{  



 ?>
 <?php require'includes/header.php'; ?>



<!-- Contenedor de todo -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
                <h1 >Crud de notificaciones</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">notificaciones</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- seccion del contenido -->
<section class="content">










<!-- inicio card -->
 <div class="card">
              <div class="card-header"> <!-- inicio card-header-->
                 <h3 class="card-title">notificaciones  
                  <button class="btn btn-info" id="btnagregar" onclick="mostrarform(true)" >
                    
                    <i class="fa fa-plus-circle"></i>Agregar
                  
                  </button>

                  </h3>

                  <br>
        <br>      
    


      <!-- inicio card-body  -->
     <div class="card-body" >





      
      <div class="box-tools pull-right">  
        <!-- nose si es necesario en esta version -->
      </div>
       
        <!-- inicio panel-body o cuerpo de tabla -->
        <div class="panel-body table-responsive" id="listadoregistros">
              <!-- inicio tabla -->
          <table id="tbllistado" class=" table table-striped table-bordered  table-condensed table-hover" >
              <thead >
                 <th>Opciones</th>
                 <th>Usuario</th>
                 <th>notificacion</th> 
                 <th>Fecha</th>
                 <th>enlace</th>
                 
                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/sexo.js -->
                    </tbody>

              <tfoot >
                 <th>Opciones</th>
                 <th>Usuario</th>
                 <th>notificacion</th> 
                 <th>Fecha</th>
                 <th>enlace</th>
                 
               
                            
              </tfoot>


          </table>
          <!-- / fin tabla -->

        </div>
       



       <!-- inicio panel-body -->
       <div class="panel-body"  id="formularioregistros">
            <!--inicio del formulario de registrar y editar -->
            <form name="formulario" id="formulario" method="POST">
    
                

     <div class="row mb-2">
            <div class="col-md-4 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Usuario:</label>
                     <!-- para trabajar con el id -->
                <input type="hidden" name="idnotificaciones" id="idnotificaciones">
             
                <input type="text" class="form-control" value="<?php echo $_SESSION['usuario']; ?>"  name="usuario" id="usuario"  >

             </div>
           </div>

            <div class="col-md-12 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Notificacion:</label>
               <textarea class="form-control" name="notificacion" id="notificacion"></textarea>




             </div>
           </div>

     </div>


      <div class="row mb-2">
            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Enlace <i class="fa  fa-unlink "></i>:</label>
           
             
                <input type="text" class="form-control" name="enlace" id="enlace"  placeholder="enlace" required>

             </div>
           </div>

            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Fecha:</label>
               <input  type="text" class="form-control " name="fecha" id="fecha"  placeholder="fecha" >




             </div>
           </div>

     </div>



    
             
             
             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-info " type="submit" id="btnGuardar">
                    <i class="fa fa-save"></i> Guardar
                </button>

                <button class="btn btn-danger"  onclick="cancelarform()" type="button">
                    <i class="fa fa-arrow-circle-left"></i> Cancelar
                </button>



                </div>
            </form>

       </div><!-- fin panel-body -->

     </div> <!-- / card body fin -->


<br><br><br>

 </div>  <!-- / fin card  -->


</section>
  <!--fin de  seccion del contenido -->


</div>
<!-- fin  Contenedor de todo -->




<?php
  }
 else {
  // require '';
  header("Location: noacceso.php");

 }
  ?>




<?php require'includes/footer.php'; ?>

<script  src="../public/sweetalert2@9/sweetalert2@9.js"></script>
<script src="scripts/editablas/script_notificaciones.js"></script>

<?php
 } 
ob_end_flush();
 ?>