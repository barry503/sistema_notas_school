<?php 

// datos para conducta perido 2
$QueryOrientador = mysqli_query($coneion,"SELECT  C.carnet,	C.CDCA1P2, 	C.CDCA2P2, 	C.CDCA3P2, 	C.CDCA4P2, 	C.CDCA5P2, 	C.CDCA6P2  FROM alumnos a INNER JOIN conducta C   ON C.carnet='$alumno' ");
 $ori = mysqli_fetch_array($QueryOrientador);



 


$cta1= $ori['CDCA1P2'];
$cta2= $ori['CDCA2P2'];
$cta3= $ori['CDCA3P2'];
$cta4= $ori['CDCA4P2'];
$cta5= $ori['CDCA5P2'];
$cta6= $ori['CDCA6P2'];



 ?>