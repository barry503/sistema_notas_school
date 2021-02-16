<?php 




"





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
M3M.idmaterias,M3M.NOMMAT as CienciasFisicas,/*Campos para comparar  y NOMMAT  a CienciasFisicas*/



/* M4 para notas y M4M para materias */
M4.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M4.EVA1P1 as Socnota1,
M4.EVA2P1 as Socnota2,
M4.EVA3P1 as Socnota3,
M4.EVA4P1 as Socnota4,
M4.EVA5P1 as Socnota5,
M4.NRP1 as SocnotaRecu,
M4.idmaterias,/*campo para comparacion*/
M4M.idmaterias,M4M.NOMMAT as Sociales,/*Campos para comparar  y NOMMAT  a Sociales*/



/* M5 para notas y M5M para materias */
M5.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M5.EVA1P1 as Semnota1,
M5.EVA2P1 as Semnota2,
M5.EVA3P1 as Semnota3,
M5.EVA4P1 as Semnota4,
M5.EVA5P1 as Semnota5,
M5.NRP1 as SemnotaRecu,
M5.idmaterias,/*campo para comparacion*/
M5M.idmaterias,M5M.NOMMAT as Seminario,/*Campos para comparar  y NOMMAT  a Seminario*/



/* M6 para notas y M6M para materias */
M6.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M6.EVA1P1 as Edunota1,
M6.EVA2P1 as Edunota2,
M6.EVA3P1 as Edunota3,
M6.EVA4P1 as Edunota4,
M6.EVA5P1 as Edunota5,
M6.NRP1 as EdunotaRecu,
M6.idmaterias,/*campo para comparacion*/
M6M.idmaterias,M6M.NOMMAT as EducacionFisica,/*Campos para comparar  y NOMMAT  a EducacionFisica*/



/* M7 para notas y M7M para materias */
M7.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M7.EVA1P1 as Infonota1,
M7.EVA2P1 as Infonota2,
M7.EVA3P1 as Infonota3,
M7.EVA4P1 as Infonota4,
M7.EVA5P1 as Infonota5,
M7.NRP1 as InfonotaRecu,
M7.idmaterias,/*campo para comparacion*/
M7M.idmaterias,M7M.NOMMAT as Informatica,/*Campos para comparar  y NOMMAT  a Informatica*/



/* M8 para notas y M8M para materias */
M8.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M8.EVA1P1 as Ingnota1,
M8.EVA2P1 as Ingnota2,
M8.EVA3P1 as Ingnota3,
M8.EVA4P1 as Ingnota4,
M8.EVA5P1 as Ingnota5,
M8.NRP1 as IngnotaRecu,
M8.idmaterias,/*campo para comparacion*/
M8M.idmaterias,M8M.NOMMAT as Ingles,/*Campos para comparar  y NOMMAT  a Ingles*/



/* M9 para notas y M9M para materias */
M9.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M9.EVA1P1 as Tecnnota1,
M9.EVA2P1 as Tecnnota2,
M9.EVA3P1 as Tecnnota3,
M9.EVA4P1 as Tecnnota4,
M9.EVA5P1 as Tecnnota5,
M9.NRP1 as TecnnotaRecu,
M9.idmaterias,/*campo para comparacion*/
M9M.idmaterias,M9M.NOMMAT as Tecnologia,/*Campos para comparar  y NOMMAT  a Tecnologia*/



/* M10 para notas y M10M para materias */
M10.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M10.EVA1P1 as Qybnota1,
M10.EVA2P1 as Qybnota2,
M10.EVA3P1 as Qybnota3,
M10.EVA4P1 as Qybnota4,
M10.EVA5P1 as Qybnota5,
M10.NRP1 as QybnotaRecu,
M10.idmaterias,/*campo para comparacion*/
M10M.idmaterias,M10M.NOMMAT as QUimicaYBiologia,/*Campos para comparar  y NOMMAT  a QUimicaYBiologia*/



/* M11 para notas y M11M para materias */
M11.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M11.EVA1P1 as Opvnota1,
M11.EVA2P1 as Opvnota2,
M11.EVA3P1 as Opvnota3,
M11.EVA4P1 as Opvnota4,
M11.EVA5P1 as Opvnota5,
M11.NRP1 as OpvnotaRecu,
M11.idmaterias,/*campo para comparacion*/
M11M.idmaterias,M11M.NOMMAT as Opv,/*Campos para comparar  y NOMMAT  a Opv*/



/* M12 para notas y M12M para materias */
M12.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M12.EVA1P1 as Ldcnota1,
M12.EVA2P1 as Ldcnota2,
M12.EVA3P1 as Ldcnota3,
M12.EVA4P1 as Ldcnota4,
M12.EVA5P1 as Ldcnota5,
M12.NRP1 as LdcnotaRecu,
M12.idmaterias,/*campo para comparacion*/
M12M.idmaterias,M12M.NOMMAT as LaboratorioDeCreatividad,/*Campos para comparar  y NOMMAT  a LaboratorioDeCreatividad*/



/* M13 para notas y M13M para materias */
M13.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M13.EVA1P1 as Forcrisnota1,
M13.EVA2P1 as Forcrisnota2,
M13.EVA3P1 as Forcrisnota3,
M13.EVA4P1 as Forcrisnota4,
M13.EVA5P1 as Forcrisnota5,
M13.NRP1 as ForcrisnotaRecu,
M13.idmaterias,/*campo para comparacion*/
M13M.idmaterias,M13M.NOMMAT as FormacionCristiana,/*Campos para comparar  y NOMMAT  a FormacionCristiana*/



/* M14 para notas y M14M para materias */
M14.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M14.EVA1P1 as Presunota1,
M14.EVA2P1 as Presunota2,
M14.EVA3P1 as Presunota3,
M14.EVA4P1 as Presunota4,
M14.EVA5P1 as Presunota5,
M14.NRP1 as PresunotaRecu,
M14.idmaterias,/*campo para comparacion*/
M14M.idmaterias,M14M.NOMMAT as Presupuesto,/*Campos para comparar  y NOMMAT  a Presupuesto*/



/* M15 para notas y M15M para materias */
M15.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M15.EVA1P1 as Comernota1,
M15.EVA2P1 as Comernota2,
M15.EVA3P1 as Comernota3,
M15.EVA4P1 as Comernota4,
M15.EVA5P1 as Comernota5,
M15.NRP1 as ComernotaRecu,
M15.idmaterias,/*campo para comparacion*/
M15M.idmaterias,M15M.NOMMAT as Comercializacion,/*Campos para comparar  y NOMMAT  a Comercializacion*/



/* M16 para notas y M16M para materias */
M16.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
/*Campos de la tabla 'notas' de la materia  */
M16.EVA1P1 as Contanota1,
M16.EVA2P1 as Contanota2,
M16.EVA3P1 as Contanota3,
M16.EVA4P1 as Contanota4,
M16.EVA5P1 as Contanota5,
M16.NRP1 as ContanotaRecu,
M16.idmaterias,/*campo para comparacion*/
M16M.idmaterias,M16M.NOMMAT as ContabilidadDeCostos/*Campos para comparar  y NOMMAT  a ContabilidadDeCostos*/



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

	    INNER JOIN notas M4 /*personalizando notas a M1*/
	    INNER JOIN materias M4M  /*personalizando materias a M4M*/


	    INNER JOIN notas M5 /*personalizando notas a M1*/
	    INNER JOIN materias M5M  /*personalizando materias a M5M*/

	    INNER JOIN notas M6 /*personalizando notas a M1*/
	    INNER JOIN materias M6M  /*personalizando materias a M6M*/

	    INNER JOIN notas M7 /*personalizando notas a M1*/
	    INNER JOIN materias M7M  /*personalizando materias a M7M*/

	    INNER JOIN notas M8 /*personalizando notas a M1*/
	    INNER JOIN materias M8M  /*personalizando materias a M8M*/

	    INNER JOIN notas M9 /*personalizando notas a M1*/
	    INNER JOIN materias M9M  /*personalizando materias a M9M*/

	    INNER JOIN notas M10 /*personalizando notas a M1*/
	    INNER JOIN materias M10M  /*personalizando materias a M10M*/

	    INNER JOIN notas M11 /*personalizando notas a M1*/
	    INNER JOIN materias M11M  /*personalizando materias a M11M*/

	    INNER JOIN notas M12 /*personalizando notas a M1*/
	    INNER JOIN materias M12M  /*personalizando materias a M12M*/

	    INNER JOIN notas M13 /*personalizando notas a M1*/
	    INNER JOIN materias M13M  /*personalizando materias a M13M*/

	    INNER JOIN notas M14 /*personalizando notas a M1*/
	    INNER JOIN materias M14M  /*personalizando materias a M14M*/

	    INNER JOIN notas M15 /*personalizando notas a M1*/
	    INNER JOIN materias M15M  /*personalizando materias a M15M*/

	    INNER JOIN notas M16 /*personalizando notas a M1*/
	    INNER JOIN materias M16M  /*personalizando materias a M16M*/



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
	    /*Comparaciones para una materia*/
	    AND a.carnet=M4.carnet
	    AND M4.idmaterias= '4' /* comparacion entre notas y variable M4*/
	    AND M4M.idmaterias= '4'/* comparacion entre materia y variable M4*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M5.carnet
	    AND M5.idmaterias= '5' /* comparacion entre notas y variable M5*/
	    AND M5M.idmaterias= '5'/* comparacion entre materia y variable M5*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M6.carnet
	    AND M6.idmaterias= '6' /* comparacion entre notas y variable M6*/
	    AND M6M.idmaterias= '6'/* comparacion entre materia y variable M6*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M7.carnet
	    AND M7.idmaterias= '7' /* comparacion entre notas y variable M7*/
	    AND M7M.idmaterias= '7'/* comparacion entre materia y variable M7*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M8.carnet
	    AND M8.idmaterias= '8' /* comparacion entre notas y variable M8*/
	    AND M8M.idmaterias= '8'/* comparacion entre materia y variable M8*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M9.carnet
	    AND M9.idmaterias= '9' /* comparacion entre notas y variable M9*/
	    AND M9M.idmaterias= '9'/* comparacion entre materia y variable M9*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M10.carnet
	    AND M10.idmaterias= '10' /* comparacion entre notas y variable M10*/
	    AND M10M.idmaterias= '10'/* comparacion entre materia y variable M10*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M11.carnet
	    AND M11.idmaterias= '11' /* comparacion entre notas y variable M11*/
	    AND M11M.idmaterias= '11'/* comparacion entre materia y variable M11*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M12.carnet
	    AND M12.idmaterias= '12' /* comparacion entre notas y variable M12*/
	    AND M12M.idmaterias= '12'/* comparacion entre materia y variable M12*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M13.carnet
	    AND M13.idmaterias= '13' /* comparacion entre notas y variable M13*/
	    AND M13M.idmaterias= '13'/* comparacion entre materia y variable M13*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M14.carnet
	    AND M14.idmaterias= '14' /* comparacion entre notas y variable M14*/
	    AND M14M.idmaterias= '14'/* comparacion entre materia y variable M14*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M15.carnet
	    AND M15.idmaterias= '15' /* comparacion entre notas y variable M15*/
	    AND M15M.idmaterias= '15'/* comparacion entre materia y variable M15*/
	    /*Comparaciones para una materia*/
	    AND a.carnet=M16.carnet
	    AND M16.idmaterias= '16' /* comparacion entre notas y variable M16*/
	    AND M16M.idmaterias= '16'/* comparacion entre materia y variable M16*/



















"




 ?>