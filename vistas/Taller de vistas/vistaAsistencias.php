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


<!-- Contenedor de todo -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
                <h1 >ver Asistencias</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">asistencias</li>
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
    <p id="titleI" class="text-center">
   comentario:  La fecha esta compuesta por el formato Año-Mes-Dia  <!-- Hora:Minutos:Segundos -->
  </p>           </div><!-- / fin card-header-->
 


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
                 <th>Nie</th>
                 <th>Nombre-Completo</th>
                 <th>Fecha</th>
                 <th>Grado</th>
                 <th>Estado</th>
                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/sexo.js -->
                    </tbody>

              <tfoot >
                 <th>Opciones</th>
                 <th>Foto</th>
                 <th>Nie</th>
                 <th>Nombre-Completo</th>
                 <th>Fecha</th>
                 <th>Grado</th>
                 <th>Estado</th>
               
                            
              </tfoot>


          </table>
          <!-- / fin tabla -->

        </div>
       




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
<script src="scripts/vistaAsistencia.js"></script>

<?php
 } 
ob_end_flush();
 ?>