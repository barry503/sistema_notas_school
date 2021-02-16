
<!-- boton para imprimir la boleta -->
   <button type="button" class="btn text-center  btn-lg btn-secondary col-md-3" onclick="inprimir()" >
   	 Imprimir
   	 <i class="fa fa-print"><!-- Icono de Imprimir -->
   	 	
   	 </i>
   </button>




	<!-- APARTADO DE VARIABLES DE ACTIVIDADES X PERIODO -->
     <?php 
      include 'NotasBtoSalud/4NombrandoVariablesXperiodo.php';
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

 <!-- consultas para porcentaje, director, img de la institucion, 
 Nombre de la institucion, Año escolar y Ciclos para la opcion del grado   -->
     <?php  
     include 'NotasBtoSalud/2ConsultasInstitucion.php';  
     ?>


 <?php
 /************************************* Consultas de materias **************************************/


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
 $Materia18=$base->query("SELECT    

     /* M18 para notas y M18M para materias */
     M18.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     M18.$A1/'$p1'as OVnota1,
     M18.$A2/'$p2'as OVnota2,
     M18.$A3/'$p3'as OVnota3,
     M18.$A4/'$p4'as OVnota4,
     M18.$A5/'$p5'as OVnota5,
     M18.NRP1 as OVnotaRecu,
     M18.idmaterias,/*campo para comparacion*/
     M18M.idmaterias,M18M.NOMMAT as OrientacionVocacional/*Campos para comparar  y NOMMAT  a FormacionCristiana*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas M18 /*personalizando notas a M18*/
        INNER JOIN materias M18M  /*personalizando materias a M18M*/
     ON
            /*Comparaciones para una materia*/
         M18.carnet='$carnet'
        AND M18.idmaterias= '$M18' /* comparacion entre notas y variable M18*/
        AND M18M.idmaterias= '$M18'/* comparacion entre materia y variable M18*/
         /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($Materia18 as $tds18 ):


#???????????????????Falta Consulta de materia MORAL URBANIDAD Y CÍVICA ¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿
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


 /******************************//*Consultas de Modulos*//* ******************************/ 
 #------------------------------------------------------
 $CModulo1=$base->query("SELECT    

     /* Modulos1 para notas y Modulos1M para materias */
     Modulos1.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     Modulos1.$A1/'$p1'as mod1,
     Modulos1.$A2/'$p2'as mod2,
     Modulos1.$A3/'$p3'as mod3,
     Modulos1.$A4/'$p4'as mod4,
     Modulos1.$A5/'$p5'as mod5,
     Modulos1.NRP1 as modnotaRecu,
     Modulos1.idmaterias,/*campo para comparacion*/
     Modulos1M.idmaterias,Modulos1M.CODMAT as Modulo/*Campos para comparar  y CODMAT  a Modulo*/


      /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas Modulos1 /*personalizando notas a Modulos1*/
       INNER JOIN materias Modulos1M  /*personalizando materias a Modulos1M*/
     ON
           /*Comparaciones para una materia*/
        Modulos1.carnet='$carnet'
       AND Modulos1.idmaterias= '$Modulos1' /* comparacion entre notas y variable Modulos1*/
       AND Modulos1M.idmaterias= '$Modulos1'/* comparacion entre materia y variable Modulos1*/
        /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ)   ;

     foreach ($CModulo1 as $ModulConsult1 ):

 #------------------------------------------------------
 $CModulo2=$base->query("SELECT    

     /* Modulos2 para notas y Modulos2M para materias */
     Modulos2.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     Modulos2.$A1/'$p1'as mod1,
     Modulos2.$A2/'$p2'as mod2,
     Modulos2.$A3/'$p3'as mod3,
     Modulos2.$A4/'$p4'as mod4,
     Modulos2.$A5/'$p5'as mod5,
     Modulos2.NRP1 as modnotaRecu,
     Modulos2.idmaterias,/*campo para comparacion*/
     Modulos2M.idmaterias,Modulos2M.CODMAT as Modulo/*Campos para comparar  y CODMAT  a Modulo*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas Modulos2 /*personalizando notas a Modulos2*/
        INNER JOIN materias Modulos2M  /*personalizando materias a Modulos2M*/
     ON
            /*Comparaciones para una materia*/
         Modulos2.carnet='$carnet'
        AND Modulos2.idmaterias= '$Modulos2' /* comparacion entre notas y variable Modulos2*/
        AND Modulos2M.idmaterias= '$Modulos2'/* comparacion entre materia y variable Modulos2*/
         /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($CModulo2 as $ModulConsult2 ):

 #------------------------------------------------------
 $CModulo3=$base->query("SELECT    

     /* Modulos3 para notas y Modulos3M para materias */
     Modulos3.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     Modulos3.$A1/'$p1'as mod1,
     Modulos3.$A2/'$p2'as mod2,
     Modulos3.$A3/'$p3'as mod3,
     Modulos3.$A4/'$p4'as mod4,
     Modulos3.$A5/'$p5'as mod5,
     Modulos3.NRP1 as modnotaRecu,
     Modulos3.idmaterias,/*campo para comparacion*/
     Modulos3M.idmaterias,Modulos3M.CODMAT as Modulo/*Campos para comparar  y CODMAT  a Modulo*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas Modulos3 /*personalizando notas a Modulos3*/
        INNER JOIN materias Modulos3M  /*personalizando materias a Modulos3M*/
     ON
            /*Comparaciones para una materia*/
         Modulos3.carnet='$carnet'
        AND Modulos3.idmaterias= '$Modulos3' /* comparacion entre notas y variable Modulos3*/
        AND Modulos3M.idmaterias= '$Modulos3'/* comparacion entre materia y variable Modulos3*/
         /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($CModulo3 as $ModulConsult3 ):

 #------------------------------------------------------
 $CModulo4=$base->query("SELECT    

     /* Modulos4 para notas y Modulos4M para materias */
     Modulos4.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     Modulos4.$A1/'$p1'as mod1,
     Modulos4.$A2/'$p2'as mod2,
     Modulos4.$A3/'$p3'as mod3,
     Modulos4.$A4/'$p4'as mod4,
     Modulos4.$A5/'$p5'as mod5,
     Modulos4.NRP1 as modnotaRecu,
     Modulos4.idmaterias,/*campo para comparacion*/
     Modulos4M.idmaterias,Modulos4M.CODMAT as Modulo/*Campos para comparar  y CODMAT  a Modulo*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas Modulos4 /*personalizando notas a Modulos4*/
        INNER JOIN materias Modulos4M  /*personalizando materias a Modulos4M*/
     ON
            /*Comparaciones para una materia*/
         Modulos4.carnet='$carnet'
        AND Modulos4.idmaterias= '$Modulos4' /* comparacion entre notas y variable Modulos4*/
        AND Modulos4M.idmaterias= '$Modulos4'/* comparacion entre materia y variable Modulos4*/
         /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

      foreach ($CModulo4 as $ModulConsult4 ):

 #------------------------------------------------------
 $CModulo5=$base->query("SELECT    

      /* Modulos5 para notas y Modulos5M para materias */
     Modulos5.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     Modulos5.$A1/'$p1'as mod1,
     Modulos5.$A2/'$p2'as mod2,
     Modulos5.$A3/'$p3'as mod3,
     Modulos5.$A4/'$p4'as mod4,
     Modulos5.$A5/'$p5'as mod5,
     Modulos5.NRP1 as modnotaRecu,
     Modulos5.idmaterias,/*campo para comparacion*/
     Modulos5M.idmaterias,Modulos5M.CODMAT as Modulo/*Campos para comparar  y CODMAT  a Modulo*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas Modulos5 /*personalizando notas a Modulos5*/
        INNER JOIN materias Modulos5M  /*personalizando materias a Modulos5M*/
     ON
       /*Comparaciones para una materia*/
        Modulos5.carnet='$carnet'
        AND Modulos5.idmaterias= '$Modulos5' /* comparacion entre notas y variable Modulos5*/
        AND Modulos5M.idmaterias= '$Modulos5'/* comparacion entre materia y variable Modulos5*/
        /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

      foreach ($CModulo5 as $ModulConsult5 ):

 #------------------------------------------------------
 $CModulo6=$base->query("SELECT    

     /* Modulos6 para notas y Modulos6M para materias */
     Modulos6.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
      Modulos6.$A1/'$p1'as mod1,
      Modulos6.$A2/'$p2'as mod2,
      Modulos6.$A3/'$p3'as mod3,
      Modulos6.$A4/'$p4'as mod4,
      Modulos6.$A5/'$p5'as mod5,
      Modulos6.NRP1 as modnotaRecu,
      Modulos6.idmaterias,/*campo para comparacion*/
      Modulos6M.idmaterias,Modulos6M.CODMAT as Modulo/*Campos para comparar  y CODMAT  a Modulo*/


      /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas Modulos6 /*personalizando notas a Modulos6*/
        INNER JOIN materias Modulos6M  /*personalizando materias a Modulos6M*/
     ON
            /*Comparaciones para una materia*/
         Modulos6.carnet='$carnet'
        AND Modulos6.idmaterias= '$Modulos6' /* comparacion entre notas y variable Modulos6*/
        AND Modulos6M.idmaterias= '$Modulos6'/* comparacion entre materia y variable Modulos6*/
         /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($CModulo6 as $ModulConsult6 ):

 #------------------------------------------------------
 $CModulo7=$base->query("SELECT    

     /* Modulos7 para notas y Modulos7M para materias */
     Modulos7.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /*Campos de la tabla 'notas' de la materia  */
     Modulos7.$A1/'$p1'as mod1,
     Modulos7.$A2/'$p2'as mod2,
     Modulos7.$A3/'$p3'as mod3,
     Modulos7.$A4/'$p4'as mod4,
     Modulos7.$A5/'$p5'as mod5,
     Modulos7.NRP1 as modnotaRecu,
     Modulos7.idmaterias,/*campo para comparacion*/
     Modulos7M.idmaterias,Modulos7M.CODMAT as Modulo/*Campos para comparar  y CODMAT  a Modulo*/


      /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas Modulos7 /*personalizando notas a Modulos7*/
        INNER JOIN materias Modulos7M  /*personalizando materias a Modulos7M*/
     ON
            /*Comparaciones para una materia*/
         Modulos7.carnet='$carnet'
        AND Modulos7.idmaterias= '$Modulos7' /* comparacion entre notas y variable Modulos7*/
        AND Modulos7M.idmaterias= '$Modulos7'/* comparacion entre materia y variable Modulos7*/
         /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($CModulo7 as $ModulConsult7 ):

 #------------------------------------------------------
 $CModulo8=$base->query("SELECT    

     /* Modulos8 para notas y Modulos8M para materias */
     Modulos8.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
     /* Campos de la tabla 'notas' de la materia  */
     Modulos8.$A1/'$p1'as mod1,
     Modulos8.$A2/'$p2'as mod2,
     Modulos8.$A3/'$p3'as mod3,
     Modulos8.$A4/'$p4'as mod4,
     Modulos8.$A5/'$p5'as mod5,
     Modulos8.NRP1 as modnotaRecu,
     Modulos8.idmaterias,/*campo para comparacion*/
     Modulos8M.idmaterias,Modulos8M.CODMAT as Modulo/*Campos para comparar  y CODMAT  a Modulo*/


     /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
       FROM notas Modulos8 /*personalizando notas a Modulos8*/
        INNER JOIN materias Modulos8M  /*personalizando materias a Modulos8M*/
     ON
            /*Comparaciones para una materia*/
         Modulos8.carnet='$carnet'
        AND Modulos8.idmaterias= '$Modulos8' /* comparacion entre notas y variable Modulos8*/
        AND Modulos8M.idmaterias= '$Modulos8'/* comparacion entre materia y variable Modulos8*/
         /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     foreach ($CModulo8 as $ModulConsult8 ):




/******************************//*Consultas de Modulos*//******************************/



 ################################## / EMPIEZAN LAS CONSULTAS ##################################

 ?>


  
 
 <!-- AQUI VA LA TABLA  DE DATOS PARA NOTAS DEL ALUMNO -->
     <?php 
     include 'Notas3Salud/4.TablaNotas.php'; 
     ?>


 <?php
 #Cierre de bucles

     #QueryAlum
     endforeach;
     #Materia5
     endforeach;
     #Materia6
     endforeach;
     #Materia7
     endforeach;
     #Materia18
     endforeach;
     

     #Materia13
     endforeach;
     #Conductasql
     endforeach;
 #Cierre bucles de Modulos
      #CModulo1
      endforeach;
      #CModulo2
      endforeach;
      #CModulo3
      endforeach;
      #CModulo4
      endforeach;
      #CModulo5
      endforeach;
      #CModulo6
      endforeach;
      #CModulo7
      endforeach;
      #CModulo8
      endforeach;

     



 ?>
 
</div><!--/ div para que  sea adaptable y para imprimir -->
