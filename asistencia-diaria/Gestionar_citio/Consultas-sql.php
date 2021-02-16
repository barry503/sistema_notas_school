<?php 
#IDENTIFICADORES DE LOS CAMPOS PARA LAS CONSULTAS 
  $idSQL1 = 4;#nombre institucion
  $idSQL2 = 1;#abreviatura de la institucion
  $idSQL3 = 3;#Imagen de la institucion
  $idSQL4 = 2;#Director de la institucion
  $idSQL5 = 5;#Año escolar
  $idSQL6 = 6;#correo
  $idSQL7 = 7;#Direccion
  $idSQL8 = 8;#telefono
  $idSQL9 = 9;#facebook
  $idSQL10 = 10;#twitter
  $idSQL11 = 11;#informacion
#





######################################################################################################################
#consulta para Nonbre de la institusion
 $queryN = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL1' ");
 $NC = mysqli_fetch_array($queryN);

 $NombreIns= $NC['nombre'];
######################################################################################################################


######################################################################################################################
#consulta para Abreviatura
 $queryIns = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL2' ");
 $Ins = mysqli_fetch_array($queryIns);

 $AInstitucion= $Ins['nombre'];
######################################################################################################################


######################################################################################################################
#consulta para Imagen de la institucion
 $queryIMG = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL3' ");
 $IMAGE = mysqli_fetch_array($queryIMG);

 $ImGI= $IMAGE['nombre'];
######################################################################################################################



######################################################################################################################
#consulta para Director
 $queryD = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL4' ");
 $dd = mysqli_fetch_array($queryD);

 $director= $dd['nombre'];
######################################################################################################################

######################################################################################################################
#consulta para Año escolar
 $queryAño = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL5' ");
 $An = mysqli_fetch_array($queryAño);

 $año= $An['nombre'];
######################################################################################################################




######################################################################################################################
#consulta para correo
 $querymail = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL6' ");
 $gmail = mysqli_fetch_array($querymail);

 $correo= $gmail['nombre'];
######################################################################################################################




######################################################################################################################
#consulta para la direccion
 $queryDireccon = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL7' ");
 $Direccion = mysqli_fetch_array($queryDireccon);

 $direccion= $Direccion['nombre'];
######################################################################################################################



######################################################################################################################
#consulta para Telefono
 $querycel = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL8' ");
 $pho = mysqli_fetch_array($querycel);

 $telefono= $pho['nombre'];
######################################################################################################################



######################################################################################################################
#consulta para facebook
 $queryface = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL9' ");
 $fabook = mysqli_fetch_array($queryface);

 $facebook= $fabook['nombre'];
######################################################################################################################



######################################################################################################################
#consulta para  twitter
 $querytwit = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL10' ");
 $tter = mysqli_fetch_array($querytwit);

 $twitter= $tter['nombre'];
######################################################################################################################





######################################################################################################################
#consulta para informacion
 $queryInFor = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='$idSQL11' ");
 $in11 = mysqli_fetch_array($queryInFor);

 $informacion= $in11['nombre'];
######################################################################################################################





// las variables de salida ya con su contenido 

/*

 #Nombre completo de la institucion
 $NombreIns

 #Abreviatura de la institusion
 $AInstitucion

 #Imagen de la institucion
 $ImGI

 #director de la institucion
 $director

 #Año escolar 
 $año

*/
?>