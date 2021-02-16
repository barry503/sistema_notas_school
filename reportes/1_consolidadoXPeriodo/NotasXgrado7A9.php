<?php
  /* Connexion a la base de datos*/ 
  include '../../config/conexionPDOcontacto.php'; 
// consulta con pdo
?>
<?php
#variables a traer de VistaNotasXgrado.php
  include 'ArchivosConstantes/vYv.php'; 
?>


  <link rel="stylesheet" type="text/css" href="../bootstrap-temas/css/bootstrap.min.css">



 <!-- boton para imprimir la boleta -->
 <!-- <button type="button" class="btn text-center  btn-lg btn-secondary col-md-3" onclick="inprimir()" >
 	Imprimir
 	<i class="fa fa-print">
 	</i>
 </button> --> <!--Icono de Imprimir  -->

<?php 
/*ESTA INCLUSION TRAE CONSULTAS FIJAS*/ include 'ArchivosConstantes/ConsultasInstitucion.php'; 
?>

<!-- APARTADO DE VARIABLES DE ACTIVIDADES X PERIODO -->
     <?php 
      include 'ArchivosConstantes/4NombrandoVariablesXperiodo.php';
     ?>




<?php 
/*ESTA INCLUSION TRAE LAS VARIABLES DE MATERIAS FIJAS PA LAS CONSULTAS*/
include 'NotasXgrado7A9/idMaterias.php'; 
?>

<?php if ($periodo==0) {
	$varSeleccion = "periodo";
	include '../error404.php'; 
}elseif ($grado==0){
    $varSeleccion = "Grado";
    include '../error404.php'; 
} 
?>


<!-- div para que  sea adaptable y para imprimir -->
<div  id="idTablaprint"><!-- class="table-responsive" -->



 

  <!-- div para separado de 5px -->
  <div class="py-5">
    <!-- tabla con todos los datos -->
    <table border="8"   class="table table-striped table-bordered  table-condensed   text-black  table-hover text-center">
      <!-- encabezado de tabla -->
      <!-- <thead> -->
        <!-- tr para Istitucion academica -->
        <tr>
          <!-- th para la foto de la institucion cubre 2columnas y 2filas -->
          <th colspan="2" rowspan="2">
            <!-- imagen de la institucion -->
            <img  width="180px" height="200px" src="../../files/imgInstitucion/<?php echo $imgInstitucion; ?>">
          </th>
          <!-- th para el nombre de la institucion cubre 8columnas -->
          <th colspan="15">
            <!-- Nombre de la institucion -->
            CONSOLIDADO DE MATERIAS POR PERIODO DEL COMPLEJO EDUCATIVO <?php echo $NombreInstitucion; ?>
          </th>

        </tr>
        <!-- tr para año escolar Y opcionCarrera -->
        <tr>
          <!-- th para el año y cubre 4columnas -->
          <th colspan="2" >
            AÑO ESCOLAR: <?php echo $añoEscolar; ?>
          </th>
          <!-- th para la opcion o carrera a estudiar y cubre 4columnas -->
          <th colspan="5">
            Grado: <?php echo $Agrado; ?>
          </th>

          <th colspan="5">
            FECHA: <?php echo $fechaHoy; ?><br>HORA: <?php echo $HORA; ?>
          </th>


          
          
        </tr>

        <tr>
            <?php /*Consultas Para El Nombre De Las materias*/
                      include 'ArchivosConstantes/NombreMaterias.php'; ?>
          <th class="text-center"  >NIE</th>
          <th class="text-center"  >NOMBRE-COMPLETO</th>
          <th class="text-center"  ><?php echo $lenguaje; ?></th>
          <th class="text-center"  ><?php echo $matematicas; ?></th>
          <th class="text-center"  ><?php echo $ciencias; ?></th>
          <th class="text-center"  ><?php echo $sociales; ?></th>
          <th class="text-center"  ><?php echo $EducacionFisica; ?></th>
          <th class="text-center"  ><?php echo $Informatica; ?></th>
          <th class="text-center"  ><?php echo $Ingles; ?></th>
          <th class="text-center"  ><?php echo $FormacionCristiana; ?></th>
          <!-- <th class="text-center"  ><?php //echo $Artistica; ?></th> -->
        </tr>


        <!-- tr para encabezado de informacion del alumno -->
        
        <!-- tr para  informacion del alumno -->
     
      <!-- </thead> -->
      <!-- Cuerpo de la tabla -->




 <?php 
    ################################### EMPIEZAN LAS CONSULTAS ###################################
     // PRIMERA CONSULTA
    $QueryAlum=$base->query("SELECT
      /*_________________________________________Datos del alumno______________________________________*/
	 
	 /*La tabla grado traigo el idgrado y su nombre*/
	 g.idgrado,g.nombre_grado as grado,
	 /*La tabla alumnos traigo todos sus campos*/ 
	 a.carnet,/*Campo como identificador */
	 a.foto,/*para la foto del alumno*/
	 a.nombre,a.apellido,a.nie, /*Datos personales*/
	 a.idgrado,/*Campos para comparar con su respectiva tabla*/
	 a.seccion/*Campo de la seccion del alumno*/

       /*_______________________Empiesa las personalizaciones de las tablas_________________________*/        
	   FROM  grado g /*personalizando grado a g*/
	    INNER JOIN alumnos a /*personalizando alumnos a a*/ 

      /*_______________________Empiesan las comparaciones entre tablas________________________*/	    
	    ON  g.idgrado=a.idgrado /* comparacion entre grado y alumnos*/
        AND a.idgrado='$grado' /* comparacion entre alumnos y Variable grado*/
	    AND g.idgrado='$grado' /*comparacion entre grado y Variable grado*/
      ")->fetchAll(PDO::  FETCH_OBJ);
      // foreach Alumnos
      foreach ($QueryAlum as $tds)://$tds -> puede ser cualquier frase y los dos puntos es para cortar esperando que se cierre con endforeach


      # Asignacion a variables de Mostrar Informacion Del Alumno
      $carnet= $tds->carnet;
      $Anie     = $tds->nie;
      // $Afoto     = $tds->foto;
      $Anombre  = $tds->nombre;
      $Aapellido= $tds->apellido; 
      $Agrado= $tds->grado; 
      $Aseccion= $tds->seccion; 
      // $Aencargado= $tds->encargado;
      
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
// $Materia18=$base->query(" SELECT    

//  --    /* M18 para notas y M18M para materias */
//  --    M18.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
//  --    /*Campos de la tabla 'notas' de la materia  */
//  --    M18.$A1/'$p1'as Artnota1,
//  --    M18.$A2/'$p2'as Artnota2,
//  --    M18.$A3/'$p3'as Artnota3,
//  --    M18.$A4/'$p4'as Artnota4,
//  --    M18.$A5/'$p5'as Artnota5,
//  --    M18.NRP1 as ArtnotaRecu,
//  --    M18.idmaterias,/*campo para comparacion*/
//  --    M18M.idmaterias,M18M.NOMMAT as Artistica/*Campos para comparar  y NOMMAT  a Artistica*/


//  --    /*___________________________________Empiesa las personalizaciones de las tablas_________________________________*/     
//  --      FROM notas M18 /*personalizando notas a M18*/
//  --       INNER JOIN materias M18M  /*personalizando materias a M18M*/
//  --    ON
//  --           /*Comparaciones para una materia*/
//  --        M18.carnet='$carnet'
//  --       AND M18.idmaterias= '$M18' /* comparacion entre notas y variable M18*/
//  --       AND M18M.idmaterias= '$M18'/* comparacion entre materia y variable M18*/
//  --        /*Comparaciones para una materia*/ ")->fetchAll(PDO::  FETCH_OBJ);

     // foreach ($Materia18 as $tds18 ):




/*******************************************//*Consultas de materias*//*********************************************/
 #----------------------ciclo para conducta--------------------------------
// $Conductasql=$base->query("SELECT    

     /*  para conducta  */
     /*C.carnet,*//*campo de comparacion de la tabla 'conducta' */
     /*Campos de la tabla 'conducta' traidos desde las variables */
     /*C.$Actividad1 as cta1,
     C.$Actividad2 as cta2, 	
     C.$Actividad3 as cta3, 	
     C.$Actividad4 as cta4, 	
     C.$Actividad5 as cta5, 	
     C.$Actividad6 as cta6    
	   FROM conducta C  WHERE C.carnet= '$carnet'*/// ")->fetchAll(PDO::  FETCH_OBJ);

     // foreach ($Conductasql as $Condu ):




####################################### / EMPIEZAN LAS CONSULTAS #########################################

 ?>


  <!-- incluyo las variables del objeto renombradas avariables -->
<?php  include 'NotasXgrado7A9/renombroASaVariable.php';  ?>
  

<!-- AQUI VA LA TABLA  DE DATOS PARA NOTAS DEL ALUMNO -->
<?php 
//include 'NotasXgrado7A9/TablaDeNotas.php'; ?>

      <tbody>
 
       
        
       
  <tr>
    <td ><?php echo $Anie; ?></td>
    <td ><?php echo $Anombre.' , '.$Aapellido; ?></td>
    <td><?php echo $LPROMEDIO; ?></td>
    <td><?php echo $MPROMEDIO; ?></td>
    <td><?php echo $CFPROMEDIO; ?></td>
    <td><?php echo $SocPROMEDIO; ?></td>
    <td><?php echo $EduPROMEDIO; ?></td>
    <td><?php echo $InforPROMEDIO; ?></td>
    <td><?php echo $IngPROMEDIO; ?></td>
    <td><?php echo $ForcrisPROMEDIO; ?></td>
    <!-- <td><?php //echo $ArtPROMEDIO; ?></td> -->
    
    
    
  </tr>


        
        
      </tbody><!--/ Cuerpo de la tabla -->




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
#Materia6
endforeach;
#Materia7
endforeach;
#Materia8
endforeach;

#Materia13
endforeach;

#Materia18
// endforeach;

#Conductasql
#endforeach;



?>

      <!-- <tfoot> -->
        <!-- No lo Utilizo porque repito algunos tr de las materias -->
      <!-- </tfoot> -->


    </table><!--/ tabla con todos los datos -->
  </div><!--/ div para separado de 5px -->









</div><!--/ div para que  sea adaptable y para imprimir -->

<br><br><br><br><br><br>


<!-- -------------------------------------------------------------------------------------------------------------------- -->

<script >
  window.onload = function VentanaImprimir()
  {
  window.print();
  }
</script>






           