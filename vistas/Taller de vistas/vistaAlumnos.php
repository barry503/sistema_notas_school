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
            
                <h1 > Alumnos</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">Alumnos</li>
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
                 <h3 class="card-title">
                  
 
                  <h5 >Alumno registrados en el sistema</h5>
                  
                  </h3>
              
              </div><!-- / fin card-header-->
 
          
      <!-- inicio card-body  -->
     <div class="card-body" >



      
      <div class="box-tools pull-right">  
        <!-- nose si es necesario en esta version -->
      </div>
       
        <!-- inicio panel-body o cuerpo de tabla -->
        <div class="panel-body table-responsive" id="listadoregistros">
              <!-- inicio tabla -->
          <!-- <table id="tbllistado" class=" table table-striped table-bordered  table-condensed table-hover" > -->
                 <table id="tbllistado"  class=" table table-bordered table-hover">
              <thead >
                 <th>Nie</th>
                 <th>Foto</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Sexo</th>
                 <th>Grado</th>
                 <th>Discapacidad</th>
                 <th>Direccion</th>
                 <th>madre</th>
                 <th>CelMadre</th>
                 <th>Padre</th>
                 <th>Celpadre</th>
                 <th>condicion</th>

                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/sexo.js -->
                    </tbody>

              <tfoot >
                  <th>Nie</th>
                 <th>Foto</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Sexo</th>
                 <th>Grado</th>
                 <th>Discapacidad</th>
                 <th>Direccion</th>
                 <th>madre</th>
                 <th>CelMadre</th>
                 <th>Padre</th>
                 <th>Celpadre</th>
                 <th>condicion</th>
               
                            
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

<!-- contiene todo el contenido del DataTable -->
<script  src="scripts/vistaAlumnos.js"></script>



<?php
 } 
ob_end_flush();
 ?>