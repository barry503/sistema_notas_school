<?php 
session_start();
$usu= $_SESSION['admi'];//VARIABLE DE SESIÓN NOMBRE DE USUARIO

session_unset(); //LIMPIAR VARIABLES DE SESIÓN
	session_destroy();//DESTRUIR LA SESIÓN

header("Location: ../index.php" );












 ?>