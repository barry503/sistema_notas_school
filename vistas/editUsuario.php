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
 <?php
/*contiene los estilos, la cabezera y el menu*/
require'includes/header.php'; ?>


<!-- Contenedor de todo -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
                <h1 >Crud usuario</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">usuario</li>
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
                 <h3 class="card-title">usuario  
                  <button class="btn btn-info" id="btnagregar" onclick="mostrarform(true)">
                    
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
                 <th>Usuario</th>
                 <th>Nombre</th>
                 <th>apellido</th>
                 <th>Telefono</th>
                 <th>Email</th>
                 <th>Imagen</th>
                 <th>Direccion</th>
                 <th>condicion</th>
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/articulo.js -->
                    </tbody>

              <tfoot >
                 <th>Opciones</th>
                 <th>Usuario</th>
                 <th>Nombre</th>
                 <th>apellido</th>
                 <th>Telefono</th>
                 <th>Email</th>
                 <th>Imagen</th>
                 <th>Direccion</th>
                 <th>condicion</th>
                            
              </tfoot>


          </table>
          <!-- / fin tabla -->

        </div>
       



       <!-- inicio panel-body -->
       <div class="panel-body"  id="formularioregistros">
            <!--inicio del formulario de registrar y editar -->
            <form name="formulario" id="formulario" method="POST">
    

<input type="hidden" name="imagenactual" id="imagenactual">
                <img src="" width="180px" height="150px" id="imagenmuestra">
<div class="row mb-2">


            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <label>Nombre(*):</label>
                     <!-- para trabajar con el id -->
                <input type="hidden" name="idusuario" id="idusuario">
             
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>

             </div>
           </div>

            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Apellido(*):</label>
                     <input type="text" class="form-control" name="apellido" id="apellido" maxlength="100" placeholder="apellido" required>
            


             </div>
           </div>

</div>


<div class="row mb-2">
   <div class=" col-md-6 col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
             
                <label>Usuario(*):</label>
              
              
               <input type="text" class="form-control" id="usuario" name="usuario" maxlength="20"  placeholder="usuario" required>

             </div>
           </div>


 <div class=" col-md-6 col-md-6 text-muted">
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Clave(*):</label>
                
                <input type="password" class="form-control" name="clave" id="clave" maxlength="64" placeholder="clave" required>

             </div>

            </div>


</div>

<div class="row mb-2">

            <div class=" col-md-6 col-md-6 text-muted">
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Email:</label>
                
                <input type="email" class="form-control" name="email" id="email" maxlength="50" placeholder="email" >

             </div>

            </div>

            <div class=" col-md-6 col-md-6 text-muted">
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Telefono:</label>
                
                <input type="text" class="form-control" name="telefono" id="telefono" maxlength="20" placeholder="telefono" >

             </div>

            </div>


  
</div>


<div class="row mb-2">
   <div class=" col-md-6 col-md-6 text-muted">
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Direccion:</label>
                
                <input type="text" class="form-control" name="direccion" id="direccion" maxlength="20" placeholder="escribe tu direccion" >

             </div>

            </div>

            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Imagen:</label>
                
                <input type="file" class="form-control" name="imagen" id="imagen"  placeholder="imagen" >
                <br>
                
               </div> 
        </div>
</div>



<div class="card card-success collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Todos los permisos que puede tener el usuario </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">


                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <label>permisos(*):</label>
                
                <ul style="list-style: none;" id="permisos">
                  
                </ul>

         

             </div>




              </div>
              <!-- /.card-body -->
            </div>






<div class="row mb-2">
   

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
 

<!-- contiene el pie de pajina y los scripts -->
  <?php require'includes/footer.php'; ?>


<!-- contiene todo el contenido del DataTable -->
<script  src="scripts/editablas/script_usuario.js"></script>



<?php
 } 
ob_end_flush();
 ?>
 