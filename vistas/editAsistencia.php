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
            
                <h1 >Crud de Asistencias</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sexos</li>
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
                 <h3 class="card-title">Asistencias  
                 <!--  <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)" >
                    
                    <i class="fa fa-plus-circle"></i>Agregar
                  
                  </button> -->

                  </h3>
        <br>      
    <p id="titleI">
    No podras editar los datos por que los campos son llaves foranes pero si podras borrarlos 
  </p>           </div><!-- / fin card-header-->
  <p class="text-center" id="titleI1">
   comentario:  La fecha esta compuesta por el formato Año-Mes-Dia  <!-- Hora:Minutos:Segundos --> 
  </p>  


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
                 <th>Foto</th>
                 <th>Carnet</th>
                 <th>Nombre-Completo</th>
                 <th>Fecha</th>
                 <th>Hora y Fecha</th>
                 <th>Grado</th>
                 <th>Estado</th>
                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/sexo.js -->
                    </tbody>

              <tfoot >
                 <th>Opciones</th>
                 <th>Foto</th>
                 <th>Carnet</th>
                 <th>Nombre-Completo</th>
                 <th>Fecha</th>
                 <th>Hora y Fecha</th>
                 <th>Grado</th>
                 <th>Estado</th>
               
                            
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
                <label>Carnet(*):</label>
                     <!-- para trabajar con el id -->
                <input type="hidden" name="idasistencia" id="idasistencia">
             
                <input type="text" class="form-control" name="carnet" id="carnet" maxlength="50" placeholder="carnet" required>

             </div>
           </div>

            <div class="col-md-8 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Fecha(*):</label>
               <input  type="timestamp" class="form-control datetimefield" name="fecha" id="fecha" maxlength="50" placeholder="fecha" required>




             </div>
           </div>

     </div>

    
             
             
             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-primary " type="submit" id="btnGuardar">
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
<script src="scripts/editablas/script_asistencia.js"></script>



<?php
 } 
ob_end_flush();
 ?>