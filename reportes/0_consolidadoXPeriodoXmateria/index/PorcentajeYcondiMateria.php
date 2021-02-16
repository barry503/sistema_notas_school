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
// CONSULTA DE GRADO Y MATERIA

#si materia es menor o igual a 16 
 if ($materia <=16){

  $sqlGradMater = mysqli_query($coneion,"SELECT  g.idgrado,g.nombre_grado as grado,/*campos de grado*/
 M.idmaterias,M.NOMMAT as MateriaA/*Campos para comparar  y NOMMAT  a MateriaA*/  
 FROM  grado g /*personalizando grado a g*/
  INNER JOIN materias M ON  g.idgrado='$grado'
 AND M.idmaterias= '$materia' ");
 $gradmater = mysqli_fetch_array($sqlGradMater);

 $Agrado= $gradmater['grado'];
 $NombreMateria= $gradmater['MateriaA'];
 $TXTMateria='MATERIA';
 }
#si materia es igual a 41, 42, 44
 else if ($materia ==41 || $materia ==42 || $materia ==44 || $materia ==45) {
  $sqlGradMater = mysqli_query($coneion,"SELECT  g.idgrado,g.nombre_grado as grado,/*campos de grado*/
 M.idmaterias,M.NOMMAT as MateriaA/*Campos para comparar  y NOMMAT  a MateriaA*/  
 FROM  grado g /*personalizando grado a g*/
  INNER JOIN materias M ON  g.idgrado='$grado'
 AND M.idmaterias= '$materia' ");
 $gradmater = mysqli_fetch_array($sqlGradMater);

 $Agrado= $gradmater['grado'];
 $NombreMateria= $gradmater['MateriaA'];
 $TXTMateria='MATERIA';
 }
#si materia es mayor o igual a 17
 else if ($materia >=17) {
  $sqlGradMater = mysqli_query($coneion,"SELECT  g.idgrado,g.nombre_grado as grado,/*campos de grado*/
  M.idmaterias,M.CODMAT as MateriaA/*Campos para comparar  y CODMAT  a MateriaA*/  
  FROM  grado g /*personalizando grado a g*/
  INNER JOIN materias M ON  g.idgrado='$grado'
  AND M.idmaterias= '$materia' ");
  $gradmater = mysqli_fetch_array($sqlGradMater);

  $Agrado= $gradmater['grado'];
  $NombreMateria= $gradmater['MateriaA'];
  $TXTMateria= 'MODULO';
 }
######################################################################################################################
 ?>