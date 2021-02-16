<?php 

// datos para conducta perido 2
$QueryOrientador = mysqli_query($coneion,"SELECT  C.carnet,	C.CDCA1P3, 	C.CDCA2P3, 	C.CDCA3P3, 	C.CDCA4P3, 	C.CDCA5P3, 	C.CDCA6P3  FROM alumnos a INNER JOIN conducta C   ON C.carnet='$alumno' ");
 $ori = mysqli_fetch_array($QueryOrientador);



 


$cta1= $ori['CDCA1P3'];
$cta2= $ori['CDCA2P3'];
$cta3= $ori['CDCA3P3'];
$cta4= $ori['CDCA4P3'];
$cta5= $ori['CDCA5P3'];
$cta6= $ori['CDCA6P3'];




 ?>