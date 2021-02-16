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
            
                <h1 >Crud Materias</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">Materias</li>
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
                 <h3 class="card-title">Materias  
                  <button class="btn btn-info" id="btnagregar" onclick="mostrarform(true)" >
                    
                    <i class="fa fa-plus-circle"></i>Agregar
                  
                  </button>
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
          <table id="tbllistado" class=" table table-striped table-bordered  table-condensed table-hover" >
              <thead >
                 <th>Opciones</th>
                 <th>Descripcion</th><!-- Campo Codigo en base de datos -->
                 <th>Nombre</th>
                 <th>Docente</th>
                 <th>Condicion</th>
                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo de la carpeta scripts js -->
                    </tbody>

              <tfoot >
                 <th>Opciones</th>
                 <th>Descripcion</th><!-- Campo Codigo en base de datos -->
                 <th>Nombre</th>
                 <th>Docente</th>
                 <th>Condicion</th>
               
                            
              </tfoot>


          </table>
          <!-- / fin tabla -->

        </div>
       



       <!-- inicio panel-body -->
       <div class="panel-body"  id="formularioregistros">
            <!--inicio del formulario de registrar y editar -->
            <form name="formulario" id="formulario" method="POST">
    
                

     <div class="row mb-2">
            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <label>Descripcion de la materia(*):</label><!-- Codigo en bd-->
                     <!-- para trabajar con el id -->
                <input type="hidden" name="idmaterias" id="idmaterias">
                
             <!-- <input type="text"> --><textarea  class="form-control" name="CODMAT" id="CODMAT"  placeholder="Escribe  la Descripcion de la materia" required>
               
             </textarea>
                 </div>

                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">

                  
                
                  <label>Nombre de la materia(*):</label>
                
                <input type="text" class="form-control" name="NOMMAT" id="NOMMAT" maxlength="50" placeholder="Escribe nombre de la materia " required>

             </div>

            
           </div>

           <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <label>Docente:</label>
               <select name="iddocentes" id="iddocentes"  class="form-control selectpicker" data-live-search="true" ></select>

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



<!-- libreria para el boton de  guardarYactualizar=btnGuardar  para usar actualizacion de pagina-->
<script  src="../public/sweetalert2@9/sweetalert2@9.js"></script>

<!-- contiene todo el contenido del DataTable -->
<script  src="scripts/editablas/script_materias.js"></script>

<?php
 } 
ob_end_flush();
 ?>