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
            
                <h1 >Crud Porcentaje</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">Porcentaje</li>
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
                 <h3 class="card-title">Porcentajes  
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
                 <th title="solo se tomara en cuenta el id=1">Opciones</th>
                 <th title="para todos los periodos"> actividad 1</th>
                 <th title="para todos los periodos"> actividad 2</th>
                 <th title="para todos los periodos"> actividad 3</th>
                 <th title="para todos los periodos"> actividad 4</th>
                 <th title="para todos los periodos"> actividad 5</th>
                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/sexo.js -->
                    </tbody>

              <tfoot >
                 <th title="solo se tomara en cuenta el id=1">Opciones</th>
                 <th title="para todos los periodos"> actividad 1</th>
                 <th title="para todos los periodos"> actividad 2</th>
                 <th title="para todos los periodos"> actividad 3</th>
                 <th title="para todos los periodos"> actividad 4</th>
                 <th title="para todos los periodos"> actividad 5</th>
               
                            
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
                <!-- <label>idPorcentaje(*):</label> -->
                     <!-- para trabajar con el id -->
                <input type="hidden" name="id" id="id">

             </div>
           </div>

            

     </div>

      <div class="col-md-12 text-muted">

              <!-- Targeta -->
<div class="card  card-gray ">
              <div class="card-header">
                <h3 class="card-title">porcentajes de actividades(para todos los periodos)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="">
             

             <!-- cuerpo de la tarjeta -->
             <div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Porcentaje Actividad 1:</label>
                    <div class="input-group">
                   
                <input type="text" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" name="p1" id="p1" maxlength="2" placeholder="0" required>
                   <div class="input-group-prepend">
                      <span class="input-group-text">%</span>
                    </div>

                      </div>
             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Porcentaje Actividad 2:</label>
                     
              <div class="input-group">
                   
                <input type="text" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" name="p2" id="p2" maxlength="2" placeholder="0" required>
                   <div class="input-group-prepend">
                      <span class="input-group-text">%</span>
                    </div>

                      </div>
             </div>



             </div>

<div class="row mb-2">
               <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Porcentaje Actividad 3:</label>
                    
              <div class="input-group">
                   
                <input type="text" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" name="p3" id="p3" maxlength="2" placeholder="0" required>
                   <div class="input-group-prepend">
                      <span class="input-group-text">%</span>
                    </div>

                      </div>
             </div>

             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Porcentaje Actividad 4:</label>
                  <div class="input-group">
                   
                <input type="text" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" name="p4" id="p4" maxlength="2" placeholder="0" required>
                   <div class="input-group-prepend">
                      <span class="input-group-text">%</span>
                    </div>

                      </div>
             </div>
             


             </div>




             <div class="row">
               <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label>Porcentaje Actividad 5:</label>
                      <div class="input-group" >
                   
                <input  type="text" class="form-control col-lg-1 col-md-1 col-sm-1 col-xs-12" name="p5" id="p5" maxlength="2" placeholder="0" required>
                   <div  class="input-group-prepend">
                      <span class="input-group-text">%</span>
                    </div>

                      </div>
             </div>

          

             </div>






              </div>
              <!-- /.card-body -->
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
<script  src="scripts/editablas/script_porcentaje.js"></script>


<?php
 } 
ob_end_flush();
 ?>