<?php 
$errores='';

if(isset($_POST['entrar']))
{
$codigo =$_POST['codigo'];
$acceso = 'ce68077';
if($codigo === $acceso){

header("Location: marcador.php");// ACCEDER AL CONTADOR

session_start();
		$_SESSION['admi']=$codigo; 

}else{
	 $errores .='el codigo es  incorrecto.<br><strong style="color: #dc3545;">Introduce el codigo correcto del marcador de asistencia</strong>. ';
	 $errores .='<br><strong style="color: #20c997;">Intentelo nuevamente...</strong>. ';

}




}


















 ?>
 <p ></p>