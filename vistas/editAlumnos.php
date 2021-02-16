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
            
                <h1 >Crud Alumnos</h1>

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



<div class="card">
  
   <p align="center">
Aqui puedes activar el alumno, editar su informacion y
<br>Tambien podras asignarle materias al alumno y recuerda que cada vez que asignes materias nuevas al<br> alumno las materias cursadas anteriormente se le  eliminaran y con ellas las notas obtenidas en cada materia que <br>el alumno anteriormente alla cursado. <a href="#">Mas informacion...</a></p>
               <br>

</div>
       





<!-- inicio card -->
 <div class="card">
              <div class="card-header"> <!-- inicio card-header-->
                 <h3 class="card-title">
<!-- 
                  <button class="btn btn-info" id="btnagregar" onclick="mostrarform(true)" >
                    
                    <i class="fa fa-plus-circle"></i> Agregar
                  
                  </button> -->

                   <button class="btn btn-info" id="btnagregarNew" onclick="mostrarnew(true)" >
                    
                    <i class="fa fa-plus-circle"></i>Agregar
                  
                  </button>
                  
                  <h5 id="titleI">  ingresa el nuevo Alumno</h5>
                  
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
                 <th>Opciones</th>
                 <th>Foto</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>FechaNac</th>
                 <th>Sexo</th>
                 <th>Grado</th>
                 <th>Telefono</th>
                 <th>Direccion</th>
                 <th>Encargado</th>
                 <th>Nie</th>
                 <th>Seccion</th>
                 <th>Salud</th>
                 <th>Trabajo</th>
                 <th>Mama</th>
                 <th>Papa</th>
                 <th>Condicion familiar</th>
                 <th>Repite grado</th>
                 <th>Estado</th>

                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/script_alumnos.js -->
                    </tbody>

              <tfoot >
                 <th>Opciones</th>
                 <th>Foto</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>FechaNac</th>
                 <th>Sexo</th>
                 <th>Grado</th>
                 <th>Telefono</th>
                 <th>Direccion</th>
                 <th>Encargado</th>
                 <th>Nie</th>
                 <th>Seccion</th>
                 <th>Salud</th>
                 <th>Trabajo</th>
                 <th>Mama</th>
                 <th>Papa</th>
                 <th>Condicion familiar</th>
                 <th>Repite grado</th>
                 <th>Estado</th>
               
                            
              </tfoot>


          </table>
          <!-- / fin tabla -->

        </div>
       


      

<!-- __________________________formulario para editar los alumnos___________________________________ -->
       <!-- inicio panel-body -->
       <div class="panel-body"  id="formularioregistros">
            <!--inicio del formulario de registrar y editar -->
            <form name="formulario" id="formulario" method="POST">
    
                

     <div class="row mb-2">
            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
   <!-- mostrando la img del usuario -->
                <input type="hidden" name="imagenactual" id="imagenactual">
                <img src="" width="180px" height="150px" id="imagenmuestra"><br>
                <!-- mostrando la img del usuario fin -->


               <!-- para trabajar con el id -->
                 <!-- <label>codigo(*):</label> -->
                <input type="hidden" name="carnet" id="carnet" class="form-control"  maxlength="50" placeholder="codigo alumno" required>
               
                 <label>idasistencia:</label>
                <input type="text" class="form-control" name="idasistencia" id="idasistencia" maxlength="50" placeholder="idasistencia del alumno" >
                 

                 <label>nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="nombre del alumno" required>
                 

                       <label>apellido:</label>
                <input type="text" class="form-control" name="apellido" id="apellido" maxlength="50" placeholder="apellido del alumno" required>

                    <label>Fecha de nacimiento:</label>
                <input type="date" class="form-control" name="fechanac" id="fechanac" maxlength="50" placeholder="fecha.nac del alumno" required>

                

                  <!-- cambiar por un select -->
                  <label>Sexo:</label>
                 <select name="idsexo" id="idsexo"  class="form-control selectpicker" data-live-search="true" ></select>


    <!-- cambiar por un select -->
                   <label>Grado:</label>
               <select name="idgrado" id="idgrado"  class="form-control selectpicker" data-live-search="true" ></select>

                <label>telefono:</label>
                <input type="text" class="form-control" name="telefono" id="telefono" maxlength="50" placeholder="alguna telefono" required>


                  <label>direccion:</label>
                <!-- <input type="text" > -->
                <textarea class="form-control" name="direccion" id="direccion"  placeholder="direccion" required></textarea>
                   
                 

             </div>
           </div>

           <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              	



<!-- datos del encargado  -->
                <label>Encargado del alumno:</label>
                <input type="text" class="form-control" name="encargado" id="encargado" maxlength="50" placeholder="encargado" required>
<!--fin  datos del encargado  -->

                <label>nie del alumno:</label>
                <input type="text" class="form-control" name="nie" id="nie" maxlength="50" placeholder="nie" required>

 <label>seccion del alumno:</label>
                <input type="text" class="form-control" name="seccion" id="seccion" maxlength="50" placeholder="seccion" required>



                <label>Estado de salud:</label>
                <input type="text" class="form-control" name="salud" id="salud" maxlength="50" placeholder="salud" required>




                <label>trabajo del encargado:</label>
                <input type="text" class="form-control" name="trabajo" id="trabajo" maxlength="50" placeholder="trabajo" required>


                <label>madre del alumno:</label>
                <input type="text" class="form-control" name="mama" id="mama" maxlength="50" placeholder="mama" required>

                <label>padre del alumno:</label>
                <input type="text" class="form-control" name="papa" id="papa" maxlength="50" placeholder="papa" required>

                
    <label>condicion familiar:</label>

      <select class="form-control" name="codfam" id="codfam" required>
          <option value="ninguno">ninguno</option>
          <option value="papa y mama">papa y mama</option>
          <option value="papa">solo papa</option>
          <option value="mama">solo mama</option>

      </select>

                <!-- <label>repite grado:</label> -->
                <label>repite grado:</label>
                <select class="form-control" name="repetidor" id="repetidor" >
                  <option value="0">no</option>
                  <option value="1">si</option>
                  <option >sin seleccion</option>
                </select>
                
                <!-- <input type="text" class="form-control" name="repetidor" id="repetidor" maxlength="50" placeholder="repetidor" required> -->

               <!-- fin datos del papa -->
 <!-- input de la imagen -->   <label>fotografia del alumno:</label>
                
                <input type="file" class="form-control" name="foto" id="foto"  placeholder="foto" >


                



             </div>
           </div>

            

     </div>

<!-- Targeta -->
<div class="card card-warning collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Todas las materias que puede cursar el alumno</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">


                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <label>Materias:</label>
                
                <ul style="list-style: none;" id="materias" >
                  
                </ul>

             </div>




              </div>
              <!-- /.card-body -->
            </div>
<!-- Fin Targeta -->






     <!-- <div class="row mb-2">
       <div class=" col-md-6 col-md-6 text-muted">
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label>Materias:</label>
                
                <ul style="list-style: none;" id="materias">
                  
                </ul>

             </div>

            </div>
     </div> -->

    
             
             
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
<!-- _____________________Fin__formulario para editar los alumnos___________________________________ -->




      

<!-- __________________________formulario para Nuevos alumnos___________________________________ -->
  <!-- formunuevo para ingresar nuevo alumno -->

       <!-- inicio panel-body -->
       <div class="panel-body"  id="formularionuevo">
            <!--inicio del formulario de registrar y editar -->
            <form name="formunuevo" id="formunuevo" method="POST">
    
                

    <div class="row mb-2">
            <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
   


               <!-- para trabajar con el id -->
                 <label>codigo(*):</label>
                <input type="text" name="carnet" id="carnet" class="carnet form-control"  maxlength="5" placeholder="codigo alumno" required>
               
                 <!-- <label>idasistencia:</label> -->
                <!-- <input type="text" class="form-control" name="idasistencia" id="idasistencia" maxlength="50" placeholder="idasistencia del alumno" > -->
                 

                 <label>nombre:</label>
                <input type="text" class="form-control nombre" name="nombre" id="nombre" maxlength="50" placeholder="nombre del alumno" required>
                 

                       <label>apellido:</label>
                <input type="text" class="form-control apellido" name="apellido" id="apellido" maxlength="50" placeholder="apellido del alumno" required>

                    <label>Fecha de nacimiento:</label>
                <input type="date" class="form-control fechanac" name="fechanac" id="fechanac" maxlength="50" placeholder="fecha.nac del alumno" required>

                

                  <!-- cambiar por un select -->
                  <label>Sexo:</label>
                 <select name="idsexo" id="idsexo1"  class="idsexo1 form-control selectpicker" data-live-search="true" ></select>


    <!-- cambiar por un select -->
                   <label>Grado:</label>
               <select name="idgrado" id="idgrado1"  class="idgrado1 form-control selectpicker" data-live-search="true" ></select>

                <label>telefono:</label>
                <input type="text" class="form-control telefono" name="telefono" id="telefono" maxlength="50" placeholder="alguna telefono" required>


                  <label>direccion:</label>
                <!-- <input type="text" > -->
                <textarea class="form-control direccion" name="direccion" id="direccion"  placeholder="direccion" required></textarea>
                   
                 

             </div>
           </div>

           <div class="col-md-6 text-muted">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                



<!-- datos del encargado  -->
                <label>Encargado del alumno:</label>
                <input type="text" class="form-control encargado" name="encargado" id="encargado" maxlength="50" placeholder="encargado" required>
<!--fin  datos del encargado  -->

                <label>nie del alumno:</label>
                <input type="text" class="form-control nie" name="nie" id="nie" maxlength="50" placeholder="nie" required>



<label>seccion del alumno:</label>
                <input type="text" class="form-control" name="seccion" id="seccion" maxlength="50" placeholder="seccion" required>


                <label>Estado de salud:</label>
                <input type="text" class="form-control salud" name="salud" id="salud" maxlength="50" placeholder="salud" required>




                <label>trabajo del encargado:</label>
                <input type="text" class="form-control trabajo" name="trabajo" id="trabajo" maxlength="50" placeholder="trabajo" required>


                <label>madre del alumno:</label>
                <input type="text" class="form-control mama" name="mama" id="mama" maxlength="50" placeholder="mama" required>

                <label>padre del alumno:</label>
                <input type="text" class="form-control papa" name="papa" id="papa" maxlength="50" placeholder="papa" required>

                
     <label>condicion familiar:</label>
                
                <select class="form-control" name="codfam" id="codfam" required>
          <option value="ninguno">ninguno</option>
          <option value="papa y mama">papa y mama</option>
          <option value="papa">solo papa</option>
          <option value="mama">solo mama</option>
                </select>

                <label>repite grado:</label>
            
                <select class="form-control repetidor" name="repetidor" id="repetidor" >
                  <option >sin seleccion</option>
                  <option value="1">si</option>
                  <option value="0">no</option>
                </select>
                
                <!-- <input type="text" class="form-control" name="repetidor" id="repetidor" maxlength="50" placeholder="repetidor" required> -->

               <!-- fin datos del papa -->
 <!-- input de la imagen -->   <label>fotografia del alumno:</label>
                
                <input type="file" class="form-control foto" name="foto" id="foto"  placeholder="foto" >


                



             </div>
           </div>

            

     </div>

     

    
             
             
             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-info " type="submit" id="btnGuardarNuevo">
                    <i class="fa fa-save"></i> Guardar
                </button>

                <button class="btn btn-info " type="button" onclick="vaciar()">
                    <i class="fa fa-circle"></i> vaciar
                </button>

                <button class="btn btn-danger"  onclick="cancelarform()" type="button">
                    <i class="fa fa-arrow-circle-left"></i> Cancelar
                </button>



                </div>
            </form>

       </div><!-- fin panel-body -->
       <!-- fin form alumno -->
<!-- _________________Fin______formulario para Nuevos alumnos___________________________________ -->






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
<script  src="scripts/editablas/script_alumnos.js"></script>


<?php
 } 
ob_end_flush();
 ?>