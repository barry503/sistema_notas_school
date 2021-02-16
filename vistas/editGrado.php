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
            
                <h1 >Crud grados</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">grados</li>
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
                  <!-- <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)" >
                    
                    <i class="fa fa-plus-circle"></i>Agregar
                  
                  </button> -->

                   <button class="btn btn-info" id="btnagregarNew" onclick="mostrarnew(true)" >
                    
                    <i class="fa fa-plus-circle"></i>Agregar
                  
                  </button>
                  <h5 id="titleI">ingresa el nuevo grado</h5>
                  
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
                 <th>Grado</th>
                 <th>Descripcion</th>
                 <!-- <th>Turno</th> -->
                 <th>Seccion</th>
                 <th>Docente</th>
                 <th>condicion</th>
                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/sexo.js -->
                    </tbody>

              <tfoot >
                 <th>Opciones</th>
                 <th>Grado</th>
                 <th>Descripcion</th>
                 <!-- <th>Turno</th> -->
                 <th>Seccion</th>
                 <th>Docente</th>
                 <th>condicion</th>
               
                            
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
               <!-- para trabajar con el id -->
                 <!-- <label>codigo(*):</label> -->
                <input type="hidden" name="idgrado" id="idgrado" class="form-control"  maxlength="50" placeholder="codigo grado" required>


                 <label>nombre del grado:</label>
                <input type="text" class="form-control" name="nombre_grado" id="nombre_grado" maxlength="50" placeholder="nombre del grado" required>
                      
                       <label>descripcion:</label>
                <input type="text" class="form-control" name="descripcion_grado" id="descripcion_grado" maxlength="50" placeholder="descripcion del grado" required>
                   
                 

             </div>
           </div>

           <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              	


                <label>Seccion:</label>
                <input type="text" class="form-control" name="seccion" id="seccion" maxlength="50" placeholder="seccion del grado" required>

                  <!-- cambiar por un select -->
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





        <!-- formunuevo para ingresar nuevo grado -->

       <!-- inicio panel-body -->
       <div class="panel-body"  id="formularionuevo">
            <!--inicio del formulario de registrar y editar -->
            <form name="formunuevo" id="formunuevo" method="POST">
    
                

     <div class="row mb-2">
            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <!-- para trabajar con el id -->
                 <label>codigo(*):</label>
                <input type="text" name="idgrado"  class="form-control"  maxlength="50" placeholder="codigo grado" required>


                 <label>nombre del grado:</label>
                <input type="text" class="form-control" name="nombre_grado" maxlength="50" placeholder="nombre del grado" required>
                      
                       <label>descripcion:</label>
                <input type="text" class="form-control" name="descripcion_grado"  maxlength="50" placeholder="descripcion del grado" required>
                   
                 

             </div>
           </div>

           <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                


                <label>Seccion:</label>
                <input type="text" class="form-control" name="seccion"  maxlength="50" placeholder="seccion del grado" required>

                  <!-- cambiar por un select -->
                   <label>Docente:</label>
               <select name="iddocentes" id="iddocentes1"  class="form-control selectpicker" data-live-search="true" ></select>
                



             </div>
           </div>

            

     </div>

    
             
             
             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-info " type="submit" id="btnGuardarNuevo">
                    <i class="fa fa-save"></i> Guardar
                </button>

                <button class="btn btn-danger"  onclick="cancelarform()" type="button">
                    <i class="fa fa-arrow-circle-left"></i> Cancelar
                </button>



                </div>
            </form>

       </div><!-- fin panel-body -->
       <!-- fin form alumno -->







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
<script  src="scripts/editablas/script_grado.js"></script>


<?php
 } 
ob_end_flush();
 ?>