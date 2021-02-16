<?php   


/* Connexion a la base de datos*/ 
  include '../../config/conexionPDOcontacto.php'; 





// Prueba  periodo 1





//la consulta tendra todos sus parametros 
//personalizados para  todas las materias 
$query_Consultas=$base->query("

SELECT
/*____________________________________________Datos del alumno___________________________________________*/
	/*La tabla sexo traigo el idsexo y su nombre*/
	x.idsexo,x.nombre_sexo as sexo, /*pesonalizo nombre_sexo a sexo*/ 

	/*La tabla grado traigo el idgrado y su nombre*/
	g.idgrado,g.nombre_grado as grado,

	/*La tabla alumnos traigo todos sus campos*/ 
	a.carnet,/*Campo como identificador */
	a.foto,/*para la foto del alumno*/
	a.nombre,a.apellido,a.encargado,a.nie, /*Datos personales*/
	a.idsexo,a.idgrado,/*Campos para comparar con su respectiva tabla*/
	 a.seccion,/*Campo de la seccion del alumno*/

	/*La tabla orientadores traigo  2 campos*/ 
	o.iddocentes, o.idgrado,/*Campos para comparar con su respectiva tabla*/
	 /*La tabla docentes traigo  2 campos*/ 
    d.iddocentes, CONCAT(d.nombre,' , ',d.apellido)as DocenteOrientador,/*Campos para iddocentes  y personalizando nombre y apellido a DocenteOrientador*/
/*____________________________________________Empiesan las materias___________________________________________*/




/*lenguaje M1 para notas y M1M para materias */
M1.carnet,/*campo de comparacion de la tabla 'notas' de la materia lenguaje*/
/*Campos de la tabla 'notas' de la materia lenguaje */
M1.EVA1P1 as Lnota1,
M1.EVA2P1 as Lnota2,
M1.EVA3P1 as Lnota3,
M1.EVA4P1 as Lnota4,
M1.EVA5P1 as Lnota5,
M1.NRP1 as LnotaRecu,
M1.idmaterias,/*campo para comparacion*/
M1M.idmaterias,M1M.NOMMAT as Lleng,/*Campos para comparar  y NOMMAT  a Lleng*/



/* M2 para notas y M2M para materias */
M2.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M2.EVA1P1 as Mnota1,
M2.EVA2P1 as Mnota2,
M2.EVA3P1 as Mnota3,
M2.EVA4P1 as Mnota4,
M2.EVA5P1 as Mnota5,
M2.NRP1 as MnotaRecu,
M2.idmaterias,/*campo para comparacion*/
M2M.idmaterias,M2M.NOMMAT as Matematicas,/*Campos para comparar  y NOMMAT  a Matematicas*/



/* M3 para notas y M3M para materias */
M3.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M3.EVA1P1 as CFnota1,
M3.EVA2P1 as CFnota2,
M3.EVA3P1 as CFnota3,
M3.EVA4P1 as CFnota4,
M3.EVA5P1 as CFnota5,
M3.NRP1 as CFnotaRecu,
M3.idmaterias,/*campo para comparacion*/
M3M.idmaterias,M3M.NOMMAT as CienciasFisicas/*Campos para comparar  y NOMMAT  a CienciasFisicas*/





/*____________________________________________Empiesa las personalizaciones de las tablas___________________________________________*/        
	   FROM sexo x /*personalizando sexo a x*/
	    INNER JOIN grado g /*personalizando grado a g*/
	    INNER JOIN alumnos a /*personalizando alumnos a a*/ 
	    INNER JOIN orientadores o  /*personalizando orientadores a o*/ 
	    INNER JOIN docentes d /*personalizando docentes a d*/

	    INNER JOIN notas M1 /*personalizando notas a M1*/
	    INNER JOIN materias M1M  /*personalizando materias a M1M*/

	    INNER JOIN notas M2 /*personalizando notas a M1*/
	    INNER JOIN materias M2M  /*personalizando materias a M2M*/

	    INNER JOIN notas M3 /*personalizando notas a M3*/
	    INNER JOIN materias M3M  /*personalizando materias a M3M*/


	    



/*____________________________________________Empiesan las comparaciones entre tablas___________________________________________*/	    
	    ON x.idsexo=a.idsexo /* comparacion entre sexo y alumnos*/
	    AND g.idgrado=a.idgrado /* comparacion entre grado y alumnos*/
        AND a.idgrado='12' /* comparacion entre alumnos y Variable grado*/
	    AND g.idgrado='12' /*comparacion entre grado y Variable grado*/
	    AND o.iddocentes=d.iddocentes /*comparacion entre orientadores y docentes*/
	    AND o.idgrado='12' /*comparacion entre orientadores y Variable grado*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M1.carnet
	    AND M1.idmaterias= '1' /* comparacion entre notas y variable M1*/
	    AND M1M.idmaterias= '1'/* comparacion entre materia y variable M1*/
	     /*Comparaciones para una materia*/
	     AND a.carnet=M2.carnet
	    AND M2.idmaterias= '2' /* comparacion entre notas y variable M2*/
	    AND M2M.idmaterias= '2'/* comparacion entre materia y variable M2*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M3.carnet
	    AND M3.idmaterias= '3' /* comparacion entre notas y variable M3*/
	    AND M3M.idmaterias= '3'/* comparacion entre materia y variable M3*/

	   


	")->fetchAll(PDO::  FETCH_OBJ);
      
?>

