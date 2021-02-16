<?php
#variables a traer de VistaNotasXgrado.php
  include 'NotasBtoContador1A2/vYv.php'; 
?>




  <?php
  /* Connexion a la base de datos*/ 
  include '../../config/conexionPDOcontacto.php'; 
// consulta con pdo
?>


 <!-- boton para imprimir la boleta -->
 <button type="button" class="btn text-center  btn-lg btn-secondary col-md-3" onclick="inprimir()" >
 	Imprimir
 	<i class="fa fa-print"><!-- Icono de Imprimir -->
 	</i>
 </button> 

<?php 
/*ESTA INCLUSION TRAE CONSULTAS FIJAS*/ include 'NotasBtoContador1A2/ConsultasInstitucion.php'; 
?>

<!-- APARTADO DE VARIABLES DE ACTIVIDADES X PERIODO -->
     <?php 
      include 'NotasBtoContador1A2/4NombrandoVariablesXperiodo.php';
     ?>





<?php 
/*ESTA INCLUSION TRAE LAS VARIABLES DE MATERIAS FIJAS PA LAS CONSULTAS*/
include 'NotasBtoContador1A2/idMaterias.php'; 
?>

<?php if ($periodo==0) {
    $varSeleccion = "periodo";
    include '../../reportes/error404.php'; 
}elseif ($alumnoCarnet==0){
    $varSeleccion = "Grado";
    include '../../reportes/error404.php'; 
} 
?>


<!-- div para que  sea adaptable y para imprimir -->
<div class="table-responsive " id="idTablaprint">

    

 <?php 
    ################################### EMPIEZAN LAS CONSULTAS ###################################
     // PRIMERA CONSULTA
    $QueryAlum=$base->query("SELECT
      /*_________________________________________Datos del alumno______________________________________*/
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
      d.iddocentes, CONCAT(d.nombre,' , ',d.apellido) as DocenteOrientador/*Campos para iddocentes  y personalizando nombre y apellido a DocenteOrientador*/

       /*_______________________Empiesa las personalizaciones de las tablas_________________________*/        
       FROM sexo x /*personalizando sexo a x*/
        INNER JOIN grado g /*personalizando grado a g*/
        INNER JOIN alumnos a /*personalizando alumnos a a*/ 
        INNER JOIN orientadores o  /*personalizando orientadores a o*/ 
        INNER JOIN docentes d /*personalizando docentes a d*/

      /*_______________________Empiesan las comparaciones entre tablas________________________*/        
        ON x.idsexo=a.idsexo /* comparacion entre sexo y alumnos*/
        AND g.idgrado=a.idgrado /* comparacion entre grado y alumnos*/
      AND a.carnet='$alumnoCarnet'
        AND a.idgrado='$grado' /* comparacion entre alumnos y Variable grado*/
        AND g.idgrado='$grado' /*comparacion entre grado y Variable grado*/
        AND o.iddocentes=d.iddocentes /*comparacion entre orientadores y docentes*/
        AND o.idgrado='$grado' /*comparacion entre orientadores y Variable grado*/
      ")->fetchAll(PDO::  FETCH_OBJ);
      // foreach Alumnos
      foreach ($QueryAlum as $tds)://$tds -> puede ser cualquier frase y los dos puntos es para cortar esperando que se cierre con endforeach


      # Asignacion a variables de Mostrar Informacion Del Alumno
      $carnet= $tds->carnet;
      $Anie     = $tds->nie;
      $Afoto     = $tds->foto;
      $Anombre  = $tds->nombre;
      $Aapellido= $tds->apellido; 
      $Agrado= $tds->grado; 
      $Aseccion= $tds->seccion; 
      $Aencargado= $tds->encargado;
      $Orientador= $tds->DocenteOrientador;
      //Asignacion a variables de Mostrar Informacion Del Alumno 

 ?>




<?php
 /************************************* Consultas de materias **************************************/


 #------------------------------------------------------	
 $Materia1=$base->query("SELECT 
     /*lenguaje M1 para notas y M1M para materias */
     M1.carnet,/*campo de comparacion de la tabla 'notas' de la materia lenguaje*/
     /*Campos de la tabla 'notas' de la materia lenguaje */
     M1.$A1/'$p1'as Lnota1,
     M1.$A2/'$p2'as Lnota2,
     M1.$A3/'$p3'as Lnota3,
     M1.$A4/'$p4'as Lnota4,
     M1.$A5/'$p5'as Lnota5,
     M1.NRP1 as LnotaRecu,
     M1.idmaterias,/*campo para comparacion*/
     M1M.idmaterias,M1M.NOMMAT as Lleng/*Campos para comparar  y NOMMAT  a Lleng*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M1 /*personalizando notas a M1*/
	    INNER JOIN materias M1M  /*personalizando materias a M1M*/
     ON
	        /*Comparaciones para una materia*/
	     M1.carnet='$carnet'
	    AND M1.idmaterias= '$M1' /* comparacion entre notas y variable M1*/
	    AND M1M.idmaterias= '$M1'/* comparacion entre materia y variable M1*/
	     /*Comparaciones para una materia*/")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia1 as $tds1 ):

#------------------------------------------------------	
$Materia2=$base->query("SELECT    
 
     /* M2 para notas y M2M para materias */
     M2.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M2.$A1/'$p1'as Mnota1,
     M2.$A2/'$p2'as Mnota2,
     M2.$A3/'$p3'as Mnota3,
     M2.$A4/'$p4'as Mnota4,
     M2.$A5/'$p5'as Mnota5,
     M2.NRP1 as MnotaRecu,
     M2.idmaterias,/*campo para comparacion*/
     M2M.idmaterias,M2M.NOMMAT as Matematicas/*Campos para comparar  y NOMMAT  a Matematicas*/

     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M2 /*personalizando notas a M2*/
	    INNER JOIN materias M2M  /*personalizando materias a M2M*/
     ON
	        /*Comparaciones para una materia*/
	     M2.carnet='$carnet'
	    AND M2.idmaterias= '$M2' /* comparacion entre notas y variable M2*/
	    AND M2M.idmaterias= '$M2'/* comparacion entre materia y variable M2*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia2 as $tds2 ):

 #------------------------------------------------------
 $Materia3=$base->query("SELECT    

     /* M3 para notas y M3M para materias */
     M3.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M3.$A1/'$p1'as CFnota1,
     M3.$A2/'$p2'as CFnota2,
     M3.$A3/'$p3'as CFnota3,
     M3.$A4/'$p4'as CFnota4,
     M3.$A5/'$p5'as CFnota5,
     M3.NRP1 as CFnotaRecu,
     M3.idmaterias,/*campo para comparacion*/
     M3M.idmaterias,M3M.NOMMAT as CienciasFisicas/*Campos para comparar  y NOMMAT  a CienciasFisicas*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M3 /*personalizando notas a M3*/
	    INNER JOIN materias M3M  /*personalizando materias a M3M*/
     ON
	        /*Comparaciones para una materia*/
	     M3.carnet='$carnet'
	    AND M3.idmaterias= '$M3' /* comparacion entre notas y variable M3*/
	    AND M3M.idmaterias= '$M3'/* comparacion entre materia y variable M3*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia3 as $tds3 ):

 #------------------------------------------------------
 $Materia4=$base->query("SELECT    

     /* M4 para notas y M4M para materias */
     M4.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M4.$A1/'$p1'as Socnota1,
     M4.$A2/'$p2'as Socnota2,
     M4.$A3/'$p3'as Socnota3,
     M4.$A4/'$p4'as Socnota4,
     M4.$A5/'$p5'as Socnota5,
     M4.NRP1 as SocnotaRecu,
     M4.idmaterias,/*campo para comparacion*/
     M4M.idmaterias,M4M.NOMMAT as Sociales/*Campos para comparar  y NOMMAT  a Sociales*/

     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M4 /*personalizando notas a M4*/
	    INNER JOIN materias M4M  /*personalizando materias a M4M*/
     ON
	        /*Comparaciones para una materia*/
	     M4.carnet='$carnet'
	    AND M4.idmaterias= '$M4' /* comparacion entre notas y variable M4*/
	    AND M4M.idmaterias= '$M4'/* comparacion entre materia y variable M4*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia4 as $tds4 ):

 #------------------------------------------------------
 $Materia5=$base->query("SELECT    

     /* M5 para notas y M5M para materias */
     M5.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M5.$A1/'$p1'as Semnota1,
     M5.$A2/'$p2'as Semnota2,
     M5.$A3/'$p3'as Semnota3,
     M5.$A4/'$p4'as Semnota4,
     M5.$A5/'$p5'as Semnota5,
     M5.NRP1 as SemnotaRecu,
     M5.idmaterias,/*campo para comparacion*/
     M5M.idmaterias,M5M.NOMMAT as Seminario/*Campos para comparar  y NOMMAT  a Seminario*/

     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M5 /*personalizando notas a M5*/
	    INNER JOIN materias M5M  /*personalizando materias a M5M*/
     ON
	        /*Comparaciones para una materia*/
	     M5.carnet='$carnet'
	    AND M5.idmaterias= '$M5' /* comparacion entre notas y variable M5*/
	    AND M5M.idmaterias= '$M5'/* comparacion entre materia y variable M5*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia5 as $tds5 ):

 #------------------------------------------------------
 $Materia6=$base->query("SELECT    

     /* M6 para notas y M6M para materias */
     M6.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M6.$A1/'$p1'as Edunota1,
     M6.$A2/'$p2'as Edunota2,
     M6.$A3/'$p3'as Edunota3,
     M6.$A4/'$p4'as Edunota4,
     M6.$A5/'$p5'as Edunota5,
     M6.NRP1 as EdunotaRecu,
     M6.idmaterias,/*campo para comparacion*/
     M6M.idmaterias,M6M.NOMMAT as EducacionFisica/*Campos para comparar  y NOMMAT  a EducacionFisica*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M6 /*personalizando notas a M6*/
	    INNER JOIN materias M6M  /*personalizando materias a M6M*/
     ON
	        /*Comparaciones para una materia*/
	     M6.carnet='$carnet'
	    AND M6.idmaterias= '$M6' /* comparacion entre notas y variable M6*/
	    AND M6M.idmaterias= '$M6'/* comparacion entre materia y variable M6*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia6 as $tds6 ):

 #------------------------------------------------------
 $Materia7=$base->query("SELECT    

     /* M7 para notas y M7M para materias */
     M7.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M7.$A1/'$p1'as Infonota1,
     M7.$A2/'$p2'as Infonota2,
     M7.$A3/'$p3'as Infonota3,
     M7.$A4/'$p4'as Infonota4,
     M7.$A5/'$p5'as Infonota5,
     M7.NRP1 as InfonotaRecu,
     M7.idmaterias,/*campo para comparacion*/
     M7M.idmaterias,M7M.NOMMAT as Informatica/*Campos para comparar  y NOMMAT  a Informatica*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M7/*personalizando notas a M1*/
	    INNER JOIN materias M7M  /*personalizando materias a M7M*/
     ON
	        /*Comparaciones para una materia*/
	     M7.carnet='$carnet'
	    AND M7.idmaterias= '$M7' /* comparacion entre notas y variable M7*/
	    AND M7M.idmaterias= '$M7'/* comparacion entre materia y variable M7*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia7 as $tds7 ):

 #------------------------------------------------------
 $Materia8=$base->query("SELECT    

     /* M8 para notas y M8M para materias */
     M8.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M8.$A1/'$p1'as Ingnota1,
     M8.$A2/'$p2'as Ingnota2,
     M8.$A3/'$p3'as Ingnota3,
     M8.$A4/'$p4'as Ingnota4,
     M8.$A5/'$p5'as Ingnota5,
     M8.NRP1 as IngnotaRecu,
     M8.idmaterias,/*campo para comparacion*/
     M8M.idmaterias,M8M.NOMMAT as Ingles/*Campos para comparar  y NOMMAT  a Ingles*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M8 /*personalizando notas a M8*/
	    INNER JOIN materias M8M  /*personalizando materias a M8M*/
     ON
	        /*Comparaciones para una materia*/
	     M8.carnet='$carnet'
	    AND M8.idmaterias= '$M8' /* comparacion entre notas y variable M8*/
	    AND M8M.idmaterias= '$M8'/* comparacion entre materia y variable M8*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia8 as $tds8 ):

#------------------------------------------------------
$Materia9=$base->query("SELECT    

     /* M9 para notas y M9M para materias */
     M9.carnet, /*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M9.$A1/'$p1'as Tecnnota1,
     M9.$A2/'$p2'as Tecnnota2,
     M9.$A3/'$p3'as Tecnnota3,
     M9.$A4/'$p4'as Tecnnota4,
     M9.$A5/'$p5'as Tecnnota5,
     M9.NRP1 as TecnnotaRecu,
     M9.idmaterias,/*campo para comparacion*/
     M9M.idmaterias,M9M.NOMMAT as Tecnologia/*Campos para comparar  y NOMMAT  a Tecnologia*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M9 /*personalizando notas a M9*/
	    INNER JOIN materias M9M  /*personalizando materias a M9M*/
     ON
	        /*Comparaciones para una materia*/
	     M9.carnet='$carnet'
	    AND M9.idmaterias= '$M9' /* comparacion entre notas y variable M9*/
	    AND M9M.idmaterias= '$M9'/* comparacion entre materia y variable M9*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia9 as $tds9 ):

#------------------------------------------------------
// $Materia10=$base->query("SELECT    

//      --/* M10 para notas y M10M para materias */
//      --M10.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
//      --/*Campos de la tabla 'notas' de la materia  */
//      --M10.$A1/'$p1'as Qybnota1,
//      --M10.$A2/'$p2'as Qybnota2,
//      --M10.$A3/'$p3'as Qybnota3,
//      --M10.$A4/'$p4'as Qybnota4,
//      --M10.$A5/'$p5'as Qybnota5,
//      --M10.NRP1 as QybnotaRecu,
//      --M10.idmaterias,/*campo para comparacion*/
//      --M10M.idmaterias,M10M.NOMMAT as QUimicaYBiologia/*Campos para comparar  y NOMMAT  a QUimicaYBiologia*/


//      --/*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
// 	 --  FROM notas M10 /*personalizando notas a M10*/
// 	 --   INNER JOIN materias M10M  /*personalizando materias a M10M*/
//      --ON
// 	 --       /*Comparaciones para una materia*/
// 	 --    M10.carnet='$carnet'
// 	 --   AND M10.idmaterias= '$M10' /* comparacion entre notas y variable M10*/
// 	 --   AND M10M.idmaterias= '$M10'/* comparacion entre materia y variable M10*/
// 	 --    /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

//      foreach ($Materia10 as $tds10 ):

#------------------------------------------------------
$Materia11=$base->query("SELECT    

     /* M11 para notas y M11M para materias */
     M11.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M11.$A1/'$p1'as Opvnota1,
     M11.$A2/'$p2'as Opvnota2,
     M11.$A3/'$p3'as Opvnota3,
     M11.$A4/'$p4'as Opvnota4,
     M11.$A5/'$p5'as Opvnota5,
     M11.NRP1 as OpvnotaRecu,
     M11.idmaterias,/*campo para comparacion*/
     M11M.idmaterias,M11M.NOMMAT as Opv/*Campos para comparar  y NOMMAT  a Opv*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M11 /*personalizando notas a M11*/
	    INNER JOIN materias M11M  /*personalizando materias a M11M*/
     ON
	        /*Comparaciones para una materia*/
	     M11.carnet='$carnet'
	    AND M11.idmaterias= '$M11' /* comparacion entre notas y variable M11*/
	    AND M11M.idmaterias= '$M11'/* comparacion entre materia y variable M11*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia11 as $tds11 ):

#------------------------------------------------------
$Materia12=$base->query("SELECT    

     /* M12 para notas y M12M para materias */
     M12.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M12.$A1/'$p1'as Ldcnota1,
     M12.$A2/'$p2'as Ldcnota2,
     M12.$A3/'$p3'as Ldcnota3,
     M12.$A4/'$p4'as Ldcnota4,
     M12.$A5/'$p5'as Ldcnota5,
     M12.NRP1 as LdcnotaRecu,
     M12.idmaterias,/*campo para comparacion*/
     M12M.idmaterias,M12M.NOMMAT as LaboratorioDeCreatividad/*Campos para comparar  y NOMMAT  a LaboratorioDeCreatividad*/

     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M12 /*personalizando notas a M12*/
	    INNER JOIN materias M12M  /*personalizando materias a M12M*/
     ON
	        /*Comparaciones para una materia*/
	     M12.carnet='$carnet'
	    AND M12.idmaterias= '$M12' /* comparacion entre notas y variable M12*/
	    AND M12M.idmaterias= '$M12'/* comparacion entre materia y variable M12*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia12 as $tds12 ):

#------------------------------------------------------
$Materia13=$base->query("SELECT    

     /* M13 para notas y M13M para materias */
     M13.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M13.$A1/'$p1'as Forcrisnota1,
     M13.$A2/'$p2'as Forcrisnota2,
     M13.$A3/'$p3'as Forcrisnota3,
     M13.$A4/'$p4'as Forcrisnota4,
     M13.$A5/'$p5'as Forcrisnota5,
     M13.NRP1 as ForcrisnotaRecu,
     M13.idmaterias,/*campo para comparacion*/
     M13M.idmaterias,M13M.NOMMAT as FormacionCristiana/*Campos para comparar  y NOMMAT  a FormacionCristiana*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
	   FROM notas M13 /*personalizando notas a M13*/
	    INNER JOIN materias M13M  /*personalizando materias a M13M*/
     ON
	        /*Comparaciones para una materia*/
	     M13.carnet='$carnet'
	    AND M13.idmaterias= '$M13' /* comparacion entre notas y variable M13*/
	    AND M13M.idmaterias= '$M13'/* comparacion entre materia y variable M13*/
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

      foreach ($Materia13 as $tds13 ):

#------------------------------------------------------
// $Materia14=$base->query("SELECT    

//     -- /* M14 para notas y M14M para materias */
//     -- M14.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
//     -- /*Campos de la tabla 'notas' de la materia  */
//     -- M14.$A1/'$p1'as Presunota1,
//     -- M14.$A2/'$p2'as Presunota2,
//     -- M14.$A3/'$p3'as Presunota3,
//     -- M14.$A4/'$p4'as Presunota4,
//     -- M14.$A5/'$p5'as Presunota5,
//     -- M14.NRP1 as PresunotaRecu,
//     -- M14.idmaterias,/*campo para comparacion*/
//     -- M14M.idmaterias,M14M.NOMMAT as Presupuesto/*Campos para comparar  y NOMMAT  a Presupuesto*/


//     -- /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
// 	--   FROM notas M14 /*personalizando notas a M14*/
// 	--    INNER JOIN materias M14M  /*personalizando materias a M14M*/
//     --  ON
// 	--        /*Comparaciones para una materia*/
// 	--     M14.carnet='$carnet'
// 	--    AND M14.idmaterias= '$M14' /* comparacion entre notas y variable M14*/
// 	--    AND M14M.idmaterias= '$M14'/* comparacion entre materia y variable M14*/
// 	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

//      foreach ($Materia14 as $tds14 ):

#------------------------------------------------------
// $Materia15=$base->query("SELECT    

//     -- /* M15 para notas y M15M para materias */
//     -- M15.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
//     -- /*Campos de la tabla 'notas' de la materia  */
//     -- M15.$A1/'$p1'as Comernota1,
//     -- M15.$A2/'$p2'as Comernota2,
//     -- M15.$A3/'$p3'as Comernota3,
//     -- M15.$A4/'$p4'as Comernota4,
//     -- M15.$A5/'$p5'as Comernota5,
//     -- M15.NRP1 as ComernotaRecu,
//     -- M15.idmaterias,/*campo para comparacion*/
//     -- M15M.idmaterias,M15M.NOMMAT as Comercializacion/*Campos para comparar  y NOMMAT  a Comercializacion*/
// --
//     -- /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
// 	--   FROM notas M15 /*personalizando notas a M15*/
// 	--    INNER JOIN materias M15M  /*personalizando materias a M15M*/
//     -- ON
// 	--        /*Comparaciones para una materia*/
// 	--     M15.carnet='$carnet'
// 	--    AND M15.idmaterias= '$M15' /* comparacion entre notas y variable M15*/
// 	--    AND M15M.idmaterias= '$M15'/* comparacion entre materia y variable M15*/
// 	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

//      foreach ($Materia15 as $tds15 ):

#------------------------------------------------------
// $Materia16=$base->query("SELECT    

//      --/* M16 para notas y M16M para materias */
//      --M16.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
//      --/*Campos de la tabla 'notas' de la materia  */
//      --M16.$A1/'$p1'as Contanota1,
//      --M16.$A2/'$p2'as Contanota2,
//      --M16.$A3/'$p3'as Contanota3,
//      --M16.$A4/'$p4'as Contanota4,
//      --M16.$A5/'$p5'as Contanota5,
//      --M16.NRP1 as ContanotaRecu,
//      --M16.idmaterias,/*campo para comparacion*/
//      --M16M.idmaterias,M16M.NOMMAT as ContabilidadDeCostos/*Campos para comparar  y NOMMAT  a ContabilidadDeCostos*/
// --
// --
//      --/*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
// 	 --  FROM notas M16 /*personalizando notas a M16*/
// 	 --   INNER JOIN materias M16M  /*personalizando materias a M16M*/
//      --ON
// 	 --       /*Comparaciones para una materia*/
// 	 --    M16.carnet='$carnet'
// 	 --   AND M16.idmaterias= '$M16' /* comparacion entre notas y variable M16*/
// 	 --   AND M16M.idmaterias= '$M16'/* comparacion entre materia y variable M16*/
// 	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

//      foreach ($Materia16 as $tds16 ):

#------------------------------------------------------
$Materia45=$base->query("SELECT    

     /* M45 para notas y M45M para materias */
     M45.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M45.$A1/'$p1'as Ppnota1,
     M45.$A2/'$p2'as Ppnota2,
     M45.$A3/'$p3'as Ppnota3,
     M45.$A4/'$p4'as Ppnota4,
     M45.$A5/'$p5'as Ppnota5,
     M45.NRP1 as PpnotaRecu,
     M45.idmaterias,/*campo para comparacion*/
     M45M.idmaterias,M45M.NOMMAT as PracticaProfesional/*Campos para comparar  y NOMMAT  a PracticaProfesional*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas M45 /*personalizando notas a M45*/
        INNER JOIN materias M45M  /*personalizando materias a M45M*/
     ON
            /*Comparaciones para una materia*/
         M45.carnet='$carnet'
        AND M45.idmaterias= '$M45' /* comparacion entre notas y variable M45*/
        AND M45M.idmaterias= '$M45'/* comparacion entre materia y variable M45*/
         /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia45 as $tds45 ):


/*******************************************//*Consultas de materias*//*********************************************/
 #----------------------ciclo para conducta--------------------------------
 $Conductasql=$base->query("SELECT    

     /*  para conducta  */
     C.carnet,/*campo de comparacion de la tabla 'conducta' */
     /*Campos de la tabla 'conducta' traidos desde las variables */
     C.$Actividad1 as cta1,
     C.$Actividad2 as cta2, 	
     C.$Actividad3 as cta3, 	
     C.$Actividad4 as cta4, 	
     C.$Actividad5 as cta5, 	
     C.$Actividad6 as cta6    
	   FROM conducta C  WHERE C.carnet= '$carnet' ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Conductasql as $Condu ):




####################################### / EMPIEZAN LAS CONSULTAS #########################################

 ?>



  
  

<!-- AQUI VA LA TABLA  DE DATOS PARA NOTAS DEL ALUMNO -->
<?php 
include 'NotasBtoContador1A2/TablaDeNotas.php'; ?>






<?php 
#QueryAlum
endforeach;
#Materia1
endforeach;
#Materia2
endforeach;
#Materia3
endforeach;
#Materia4
endforeach;
#Materia5
endforeach;
#Materia6
endforeach;
#Materia7
endforeach;
#Materia8
endforeach;
#Materia9
endforeach;
#Materia10
//endforeach;
#Materia11
endforeach;
#Materia12
endforeach;
#Materia13
endforeach;
#Materia14
//endforeach;
#Materia15
//endforeach;
#Materia16
//endforeach;
#Materia45
endforeach;
 
#Conductasql
endforeach;



?>


</div><!--/ div para que  sea adaptable y para imprimir -->



<!-- -------------------------------------------------------------------------------------------------------------------- -->








           