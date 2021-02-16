<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: login.php");
}else
{


if($_SESSION['conducta']==1)
{  



 ?>
<?php require'includes/header.php'; ?>


<?php 
// Para el texto del grado y la materia 
 require'includes/TextosMaYGra.php';
 $grad=$QuintoG;

 ?>









<?php 

// Para la tabla y el formulario de la conducta
 require'includes/Ctablayform.php';
 ?>













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
<script  src="scripts/<?php echo $S5; ?>/A5_C.js"></script>


<?php
 } 
ob_end_flush();
 ?>