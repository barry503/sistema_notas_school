<?php 

// datos para conducta perido 1
$QueryOrientador = mysqli_query($coneion,"SELECT  C.carnet,	C.CDCA1P1, 	C.CDCA2P1, 	C.CDCA3P1, 	C.CDCA4P1, 	C.CDCA5P1, 	C.CDCA6P1  FROM alumnos a INNER JOIN conducta C   ON C.carnet='$alumno' ");
 $ori = mysqli_fetch_array($QueryOrientador);



 


$cta1= $ori['CDCA1P1'];
$cta2= $ori['CDCA2P1'];
$cta3= $ori['CDCA3P1'];
$cta4= $ori['CDCA4P1'];
$cta5= $ori['CDCA5P1'];
$cta6= $ori['CDCA6P1'];





 ?>