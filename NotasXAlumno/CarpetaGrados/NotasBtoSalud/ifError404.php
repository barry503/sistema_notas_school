<?php 
#la variable $varSeleccion esta declarada en reportes/error404.php
if ($periodo==0) 
  {
    $varSeleccion = "periodo"; 
    include '../error404.php';  
  } else if ($grado==0)
  { 
    $varSeleccion = "Grado";  
    include '../error404.php';  
  }
 ?>