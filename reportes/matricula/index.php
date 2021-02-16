<!DOCTYPE html>
<html>
<head>
  <title>Matricula en linea</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" type="text/css" href="../bootstrap-temas/Lux/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="../css/album.css">

    <!--external css iconos-->
  <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="../../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- DataTables -->
  <link rel="stylesheet" href="../../public/datatables/datatables.min.css">

</head>
<body>

<?php $titulo = 'matricula' ?>

 <?php  /* Connexion a la base de datos*/ 
  include '../../config/conexionPDOcontacto.php'; ?>


<?php include '../../asistencia-diaria/Gestionar_citio/Consultas-sql.php'; ?>
<!-- header -->
<header>
  <div class="collapse bg-primary" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Informacion</h4>
          <p class="text-muted"><?php echo $informacion; ?>.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contacto</h4>
          <ul class="list-unstyled">
            <li><a href="<?php echo $twitter; ?>" class="text-white">siguenos en  Twitter</a></li>
            <li><a href="<?php echo $facebook; ?>" class="text-white">Danos like en Facebook</a></li>
            <li><a href="mailto:<?php echo $correo; ?>" class="text-white">Escribenos al Email</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-primary shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
             <i style="font-size: 40px;" class=" fa fa-files-o"></i> 
        <strong><?php echo $titulo; ?></strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<!-- final de  header  -->


<!-- boton para volver al indice -->
     <div class="container">
       <div class="mb-3 mt-3 row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="../index.php" class="btn btn-primary" title="Volver al indice de los Reportes"><< VOLVER AL INDICE</a>
                </div>
            </div>
        </div>
    </div>

<!-- final de  header  -->



<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Matricula</h1>
      <p class="lead text-muted">En esta pagina podras matricular o ingresar alumnos al sistema.</p>
      <p>

        <button href="#" class="btn btn-primary my-2" data-toggle="modal" data-target="#ModalREgistro" > <i style="font-size: 80px;" class=" fa fa-users"></i>
          <h3 class="text-white">nuevo alumno</h3> </button>
        <h2>Pulsa el boton "nuevo alumno" para ingresar un nuevo alumno</h2>
        <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
         <div id="imprimirDataAjax"> </div>


      </p>
    </div>
  </section>

 <section >
   <div class="container">
     <div class="row " align="center">
         <h1 >alumnos matriculados hoy...</h1>

           <!-- inicio panel-body o cuerpo de tabla -->
        <div class="panel-body table-responsive" id="listadoregistros">
              <!-- inicio tabla -->
          <table id="tablaAlumnos" class=" table table-striped table-bordered  table-condensed table-hover" >
              <thead >
                 <th>Codigo(NIE)</th>
                 <th>Foto</th>
                 <th >Nombre-completo</th>
                 <th>FechaNac</th>
                 <th>Sexo</th>
                 <th>Grado</th>
                 <th>Nie</th>
                 <th>Encargado</th>
                 <th>Estado</th>

                 
                            
              </thead>  
                    <tbody>
                        <!-- datos de bd en el archivo url: scripts/script_alumnos.js -->
                    </tbody>

              <tfoot >
                 <th>Codigo(NIE)</th>
                 <th>Foto</th>
                 <th >Nombre-completo</th>
                 <th>FechaNac</th>
                 <th>Sexo</th>
                 <th>Grado</th>
                 <th>Nie</th>
                 <th>Encargado</th>
                 <th>Estado</th>
               
                            
              </tfoot>


          </table>
          <!-- / fin tabla -->
        </div>










     </div>
   </div>
  </section>

</main>
<br><br><br><br><br><br>
<!-- pie de pagina -->


<!-- pie de pagina -->
<footer class="text-muted bg-primary ">
  
  <div class="container">
    <p class="float-right back-link back-backend">
     <a href="#" class="btn btn-info">Volver arriba </a>
    </p>
    <p class="text-white">Pagina de Matricula</p>
    <p class="text-white"><a href="#" class="text-info">Volver ala homepage  &copy;</a> #### <a href="#" class="text-info">para cada tipo de reporte</a>.</p>
  </div>
  
</footer>

<!-- fin  pie de pagina -->





<!-- ventanas modales -->
 <div class="modal fade col-sm-12 " id="ModalREgistro" tabindex="-1" rol="">
  <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h4 class="modal-title">NUEVO ALUMNO</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <!-- formulario de compra -->
              <form   id="ModalAlumnO" method="POST" enctype="multipart/form-data">

            
   


               <!-- para trabajar con el id -->
                 <label>Codigo "NIE"(*):</label>
                <input type="text" name="carnet" id="carnet" class="carnet form-control"  maxlength="50"  placeholder="Nie del alumno" required>
               
                 <!-- <label>idasistencia:</label> -->
                <!-- <input type="text" class="form-control" name="idasistencia" id="idasistencia" maxlength="50" placeholder="idasistencia del alumno" > -->
                 

                 <label>Nombres:</label>
                <input type="text" class="form-control nombre" name="nombre" id="nombre" maxlength="50" placeholder="nombre del alumno" required>
                 

                       <label>Apellidos:</label>
                <input type="text" class="form-control apellido" name="apellido" id="apellido" maxlength="50" placeholder="apellido del alumno" required>

                    <label>Fecha de nacimiento:</label>
                <input type="date" class="form-control " name="fechanac" id="fechanac" maxlength="50" placeholder="fecha.nac del alumno" required>

                

                  <!-- cambiar por un select -->
                  <label>Sexo:</label>
                 <select name="idsexo" id="idsexo"  class="idsexo1 form-control "  >
                  <option value="0">sin seleccion</option>
                   <?php   $query_Alumnos=$base->query("SELECT idsexo, nombre_sexo FROM sexo   ")->fetchAll(PDO::  FETCH_OBJ);
      foreach ($query_Alumnos as $sexo){
?>
<option value="<?php echo $sexo->idsexo; ?>"><?php echo $sexo->nombre_sexo; ?></option>   
  
<?php    } ?>
                 </select>


    <!-- cambiar por un select -->
                   <label>Grado:</label>
               <select name="idgrado" id="idgrado"  class=" form-control "  >
                <option value="0">sin seleccion</option>
                 <?php   $query_Alumnos=$base->query("SELECT idgrado, nombre_grado FROM grado ")->fetchAll(PDO::  FETCH_OBJ);
      foreach ($query_Alumnos as $grado){
?>
<option value="<?php echo $grado->idgrado; ?>"><?php echo $grado->nombre_grado; ?></option>   
  
<?php    } ?>
               </select>

                <label>Telefono:</label>
                <input type="text" class="form-control telefono" name="telefono" id="telefono" maxlength="50" placeholder="alguna telefono" required>


                  <label>Direccion:</label>
                <!-- <input type="text" > -->
                <textarea class="form-control direccion" name="direccion" id="direccion"  placeholder="direccion" required></textarea>
                   
            
              

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
            
                <select class="form-control repetidor" name="repetidor" id="repetidor" required>
                  <option >sin seleccion</option>
                  <option value="1">si</option>
                  <option value="0">no</option>
                </select>
                
                <!-- <input type="text" class="form-control" name="repetidor" id="repetidor" maxlength="50" placeholder="repetidor" required> -->

               <!-- fin datos del papa -->
                  <!-- input de la imagen -->
                  <!-- <label>fotografia del alumno:</label> -->
                    
                    <!-- <input type="file" name="imagefile" id="imagefile" class="form-control foto" required>  -->


                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-info ">Registrar</button>
                    </div>   

              </form>
              <!-- / formulario de compra -->

                 
                  


            </div>
            <div class="modal-footer justify-content-between">
              
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
 </div>
<!-- / ventanas modales -->



<!-- script -->

<!-- <script src="bootstrap-temas/js/bootstrap.min.js"></script> -->
<!-- <script src="../bootstrap-temas/js/primero.js"></script> -->
<!-- jQuery -->
<!-- <script src="../public/plugins/jquery/jquery-3.5.1.min.js"></script> -->
<!-- DataTables con jquery incluido--><script src="../../public/datatables/datatables.min.js"></script>
<script src="../bootstrap-temas/js/segundo.js"></script>
<script src="../bootstrap-temas/js/tercero.js"></script>
<!-- CARPETA DE JS -->
<!-- <script src="../js/jquery.min.js"></script> -->


<!--/ script -->



<!-- AdminLTE App --><script src="../../public/js/adminlte.js"></script>

<!-- libreria que imprime cualquier area de la pagina -->
<script  src="../../public/libImprimidora/jquery.PrintArea.js"></script>


<!-- libreria para el boton de  guardarYactualizar=btnGuardar  para usar actualizacion de pagina-->
<script  src="../../public/sweetalert2@9/sweetalert2@9.js"></script>


<script src="js/script_tabla.js"></script>

<!-- funcion para inprimir --> <!-- para la traida de la tabla  -->
<script >
  
function limpiar()
{
    $("#carnet").val("");
    $("#nombre").val("");
    $("#apellido").val("");
    $("#fechanac").val("");
    $("#idsexo").val("");
    $("#idgrado").val("0");
    $("#telefono").val("0");
    $("#direccion").val("");
    $("#encargado").val("");
    $("#nie").val("");
    $("#seccion").val("");
    $("#salud").val("");
     $("#trabajo").val("");
    $("#mama").val("");
    $("#papa").val("");
    $("#codfam").val("");
    $("#repetidor").val("");
    $(".foto").val("");

     // Swal.fire({ icon:'success', title: 'Alumno Registrado Exitosamente' });
   

}
// consulta para el archivo src=reportes/.php
$( "#ModalAlumnO" ).submit(function( event ) {
  $('.guardando_Cosult').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "peticiones.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#imprimirDataAjax").html("Mensaje: Cargando los datos...");
        },
      success: function(datos){
      $("#imprimirDataAjax").html(datos);
      $('.guardando_Cosult').attr("disabled", false);
      limpiar();
      listar();


      }
  });
  event.preventDefault();
})
</script>



   


</body>
</html>
