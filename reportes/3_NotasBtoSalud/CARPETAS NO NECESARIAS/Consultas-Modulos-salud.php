<?php
/*******************************************//*Consultas de Modulos*//*********************************************/ 
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
	     /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

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
/*Campos de la tabla 'notas' de la materia  */
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





/*******************************************//*Consultas de Modulos*//*********************************************/



 ?>








<!-- AQUI VA LA TABLA  DE DATOS PARA NOTAS DEL ALUMNO -->
<?php 
include 'include/TablaDeNotas.php';



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