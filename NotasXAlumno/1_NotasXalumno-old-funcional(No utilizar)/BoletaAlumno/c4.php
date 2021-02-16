<?php 

// datos para conducta perido 2
$QueryOrientador = mysqli_query($coneion,"SELECT  C.carnet,	C.CDCA1P4, 	C.CDCA2P4, 	C.CDCA3P4, 	C.CDCA4P4, 	C.CDCA5P4, 	C.CDCA6P4  FROM alumnos a INNER JOIN conducta C   ON C.carnet='$alumno' ");
 $ori = mysqli_fetch_array($QueryOrientador);



 


$cta1= $ori['CDCA1P4'];
$cta2= $ori['CDCA2P4'];
$cta3= $ori['CDCA3P4'];
$cta4= $ori['CDCA4P4'];
$cta5= $ori['CDCA5P4'];
$cta6= $ori['CDCA6P4'];







 ?>