<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: login.php");
}else
{


if($_SESSION['FORMACION_CRISTIANA']==1)
{  



 ?>
<?php require'includes/header.php'; ?>

<?php 
// Para el texto del grado y la materia 
 require'includes/TextosMaYGra.php';
 $grad=$SegundoSalud;
$matria=$Mforcris;

 ?>



<!-- Contenedor de todo -->
<!-- aqui va el contenedor de de la tabla y el formulario -->
<?php require'includes/tablayform.php'; ?>
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

<?php require'includes/textoScript.php'; ?>
<!-- contiene todo el contenido del DataTable -->
<script  src="scripts/<?php echo $S14; ?>/13Aforcris.js"></script>


<?php
 } 
ob_end_flush();
 ?>