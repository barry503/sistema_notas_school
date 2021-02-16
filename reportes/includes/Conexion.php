<?php

 if(isset($consolidado)){

   /* Connexion a la base de datos*/ 
  include '../../config/conexionPDOcontacto.php'; 
  include '../../asistencia-diaria/Gestionar_citio/Consultas-sql.php';
}else {
	/* Connexion a la base de datos*/ 
  include '../config/conexionPDOcontacto.php'; 
include '../asistencia-diaria/Gestionar_citio/Consultas-sql.php';
} 
?>
