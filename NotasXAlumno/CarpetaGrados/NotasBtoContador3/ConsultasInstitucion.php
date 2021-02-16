
<!-- deben ir antes de todas las demas consultas -->

<!-- CASI TODAS LAS CONSULTAS SON ESTATICAS OSEA DIRECTAS A UNA SOLA CONDICION  -->
<?php 

######################################################################################################################
// porcentajes de actividades de la institucion
$porcentaj = mysqli_query($coneion,"SELECT  * FROM porcentaje WHERE   id='1' ");
 $por = mysqli_fetch_array($porcentaj);

 $p1= $por['p1'];
 $p2= $por['p2'];
 $p3= $por['p3'];
 $p4= $por['p4'];
 $p5= $por['p5'];
######################################################################################################################





######################################################################################################################
#consulta para Director
$queryDirect = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='2' ");
 $dyqsa = mysqli_fetch_array($queryDirect);

$director= $dyqsa['nombre'];
######################################################################################################################





######################################################################################################################
#consulta para la imagen de la institucion 
$queryImageInstutu = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='3' ");
 $ImGins = mysqli_fetch_array($queryImageInstutu);

$imgInstitucion= $ImGins['nombre'];
######################################################################################################################





######################################################################################################################
#consulta para la imagen de la institucion 
$queryImageNombreInstutu = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='4' ");
 $NombreIns = mysqli_fetch_array($queryImageNombreInstutu);

$NombreInstitucion= $NombreIns['nombre'];
######################################################################################################################





######################################################################################################################
#consulta para año escolar
$queryAEscolar = mysqli_query($coneion,"SELECT  * FROM gestion_citio WHERE   id='5' ");
 $AIEscolar = mysqli_fetch_array($queryAEscolar);

$añoEscolar = $AIEscolar['nombre'];
######################################################################################################################





###########################################################
# condicionales y bucles para la opcionCarrera
// arreglos para conparar educacion basica y bachillerato

$opcionCarrera= 'CONTADOR';
###########################################################

 ?>