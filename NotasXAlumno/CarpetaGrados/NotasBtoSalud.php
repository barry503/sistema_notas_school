<!--traida de variables periodo y grado y validacion de las variables.  -->
 <?php
   include 'NotasBtoSalud/1validacionYvariabesPost.php'; 
 ?>
 <!-- Connexion a la base de datos -->
 <?php
   include '../../config/conexionPDOcontacto.php'; 
  // consulta con pdo ?>


<!-- Condicional para EROR404 en pantalla -->
 <?php
     include 'NotasBtoSalud/ifError404.php';
 ?>


<!-- Condicional para traer paginas de bachillerato salud -->
 <?php

 if ($grado==13) {
 	 # codigo de 1bto salud...
 	 #ESTA INCLUSION TRAE LAS VARIABLES DE MATERIAS FIJAS PARA LAS CONSULTAS
     require 'NotasBtoSalud/1.btosalud.idMaterias.php';
 	 include 'Notas1Salud.php';

 }else if ($grado==14) {
 	 #ESTA INCLUSION TRAE LAS VARIABLES DE MATERIAS FIJAS PARA LAS CONSULTAS
     require 'NotasBtoSalud/2.btosalud.idMaterias.php';
 	 # codigo de 2bto salud...
 	 include 'Notas2Salud.php';
 }else if ($grado==15) {
 	 #ESTA INCLUSION TRAE LAS VARIABLES DE MATERIAS FIJAS PARA LAS CONSULTAS
     require 'NotasBtoSalud/3.btosalud.idMaterias.php';
 	 # codigo de 3bto salud...
 	 include 'Notas3Salud.php';
 }
 ?>
 

