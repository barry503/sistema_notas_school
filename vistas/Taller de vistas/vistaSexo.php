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

<div class="content-wrapper">
  





<h1>Vista Sexo</h1>








</div>



<?php
  }
 else {
  // require '';
  header("Location: noacceso.php");

 }
  ?>




<?php require'includes/footer.php'; ?>

<?php
 } 
ob_end_flush();
 ?>