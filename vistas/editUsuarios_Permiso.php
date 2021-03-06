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
<!-- cabezera -->
<?php require'includes/header.php'; ?>


  
<!-- Contenedor de todo -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
                <h1>Permisos de los usuarios</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">editar-Permisos</li>
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
                 <h3 class="card-title">permisos  
                  <button class="btn btn-info" id="btnagregar" onclick="mostrarform(true)" >
                    
                    <i class="fa fa-plus-circle"></i>Agregar
                  
                  </button>
                  </h3>
              
              </div><!-- / fin card-header-->
 
          
      <!-- inicio card-body  -->
     <div class="card-body" >

      <div class="mb-4" id="textoPlano">Bienvenidos administradores en esta pagina  pueden ver, agregar y eliminar permisos a los usuarios del sistema que se encuentren activos.</div>
<div class="mb-4" id="TextoInformat">
  selecciona el usuario y el permiso para agregar un nuevo <br>permiso al usuario revisa que el usuario no lo tenga agregado aun  o editalo si el permiso ya existe. 
</div>


      
      <div class="box-tools pull-right">  
        <!-- nose si es necesario en esta version -->
      </div>
       
        <!-- inicio panel-body o cuerpo de tabla -->
        <div class="panel-body table-responsive" id="listadoregistros">
              <!-- inicio tabla -->
          <table id="tbllistado" class=" table table-striped table-bordered  table-condensed table-hover" >
              <thead >
                 <th title="opciones que puede ejecutar el usuario">Opciones</th>
                 <th title="nombre completo del usuario">Nombre-Completo</th>
                 <th title="usuario del sistema">Usuario</th>
                 <th title="permiso que el usuario posee">Permiso-asignado</th>
                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/sexo.js -->
                    </tbody>

              <tfoot >
                 <th title="opciones que puede ejecutar el usuario">Opciones</th>
                 <th title="nombre completo del usuario">Nombre-Completo</th>
                 <th title="usuario del sistema">Usuario</th>
                 <th title="permiso que el usuario posee">Permiso-asignado</th>
              
               
                            
              </tfoot>


          </table>
          <!-- / fin tabla -->

        </div>
       



       <!-- inicio panel-body -->
       <div class="panel-body"  id="formularioregistros">
            <!--inicio del formulario de registrar y editar -->
            <form name="formulario" id="formulario" method="POST">
    
                

     <div class="row mb-2">
            <!-- <div class="col-md-6 text-muted"> -->
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nombre del Usuario(*):</label>
                     <!-- para trabajar con el id -->
                <input type="text" name="idusuario_permiso" id="idusuario_permiso" disabled="">
                <br><br>
                <!-- select para los usuarios -->
                <select name="idusuario" id="idusuario"  class="form-control selectpicker" data-live-search="true" ></select>


               

             </div>
           <!-- </div> -->

     </div>

 <div class="row mb-2">
            <!-- <div class="col-md-6 text-muted"> -->
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nombre del permiso(*):</label>
                <select name="idpermiso" id="idpermiso"  class="form-control selectpicker" data-live-search="true" ></select>

               

             </div>
           <!-- </div> -->

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
 
<!-- pie de pajina -->
  <?php require'includes/footer.php'; ?>


<!-- libreria para el boton de  guardarYactualizar=btnGuardar  para usar actualizacion de pagina-->
<script  src="../public/sweetalert2@9/sweetalert2@9.js"></script>
<script  src="scripts/editablas/script_usuario_permiso.js"></script>

 

<?php
 } 
ob_end_flush();
 ?>