<?php 

// CONSULTAS PARA LOS NOMBRES DE LAS materias

#_____________________________________________MATERIAS BASICAS 1 A 6_______________________________________________________________ 

    $query_lenguaje = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=1");
          $lenguajeArray = mysqli_fetch_array($query_lenguaje); 
   #Esta es la variable Que contiene el Nombre
  $lenguaje = $lenguajeArray['NOMMAT'];
   


    $query_matematicas = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=2");
          $matematicasArray = mysqli_fetch_array($query_matematicas); 
   #Esta es la variable Que contiene el Nombre
  $matematicas = $matematicasArray['NOMMAT'];
   


    $query_ciencias = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=3");
          $cienciasArray = mysqli_fetch_array($query_ciencias); 
   #Esta es la variable Que contiene el Nombre
  $ciencias = $cienciasArray['NOMMAT'];
   


    $query_sociales = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=4");
          $socialesArray = mysqli_fetch_array($query_sociales); 
   #Esta es la variable Que contiene el Nombre
  $sociales = $socialesArray['NOMMAT'];



// --------------------------------------
  # seminario
   $query_seminario = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=5");
          $seminarioArray = mysqli_fetch_array($query_seminario); 
   #Esta es la variable Que contiene el Nombre
  $seminario = $seminarioArray['NOMMAT'];
// --------------------------------------
#____________________________________________________MAS MATERIAS________________________________________________________________ 

    $query_EducacionFisica = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=6");
          $EducacionFisicaArray = mysqli_fetch_array($query_EducacionFisica); 
  
  $EducacionFisica = $EducacionFisicaArray['NOMMAT'];
   
  
  
    $query_Informatica = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=7");
          $InformaticaArray = mysqli_fetch_array($query_Informatica); 
  
  $Informatica = $InformaticaArray['NOMMAT'];
   
  
  
    $query_Ingles = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=8");
          $InglesArray = mysqli_fetch_array($query_Ingles); 
  
  $Ingles = $InglesArray['NOMMAT'];
   

// _____________________________________________// _____________________________________________// _____________________________________________
 
  $query_tecnologia = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=9");
          $tecnologiaArray = mysqli_fetch_array($query_tecnologia); 
  
  $tecnologia = $tecnologiaArray['NOMMAT'];


  $query_quimicaYbiologia = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=10");
          $quimicaYbiologiaArray = mysqli_fetch_array($query_quimicaYbiologia); 
  
  $quimicaYbiologia = $quimicaYbiologiaArray['NOMMAT'];

     # orientacion para la vida
    $query_OPV = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=11");
          $OPVArray = mysqli_fetch_array($query_OPV); 
  
  $OPV = $OPVArray['NOMMAT'];

   # laboratorio de creatividad
    $query_laboCreatividad = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=12");
          $laboCreatividadArray = mysqli_fetch_array($query_laboCreatividad); 
  
  $laboCreatividad = $laboCreatividadArray['NOMMAT'];






// ________________________________________________________________________________   
  
  
    $query_FormacionCristiana = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=13");
          $FormacionCristianaArray = mysqli_fetch_array($query_FormacionCristiana); 
  
  $FormacionCristiana = $FormacionCristianaArray['NOMMAT'];
   
  
#presupuesto

$query_presupuesto = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=14");
          $presupuestoArray = mysqli_fetch_array($query_presupuesto); 
  
  $presupuesto = $presupuestoArray['NOMMAT'];

#comercializacion

$query_comercializacion = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=15");
          $comercializacionArray = mysqli_fetch_array($query_comercializacion); 
  
  $comercializacion = $comercializacionArray['NOMMAT'];
#contabilidadDeCostos

$query_contabilidadDeCostos = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=16");
          $contabilidadDeCostosArray = mysqli_fetch_array($query_contabilidadDeCostos); 
  
  $contabilidadDeCostos = $contabilidadDeCostosArray['NOMMAT'];
#PracticaProfesional
 
$query_PracticaProfesional = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=45");
          $PracticaProfesionalArray = mysqli_fetch_array($query_PracticaProfesional); 
  
  $PracticaProfesional = $PracticaProfesionalArray['NOMMAT'];






    $query_MoralUrbanidadCivica = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=41");
          $MoralUrbanidadCivicaArray = mysqli_fetch_array($query_MoralUrbanidadCivica); 
  
  $MoralUrbanidadCivica = $MoralUrbanidadCivicaArray['NOMMAT'];




    $query_OrientacionVocacional = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=42");
          $OrientacionVocacionalArray = mysqli_fetch_array($query_OrientacionVocacional); 
  
  $OrientacionVocacional = $OrientacionVocacionalArray['NOMMAT'];

  
    $query_Artistica = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=44");
          $ArtisticaArray = mysqli_fetch_array($query_Artistica); 
  
  $Artistica = $ArtisticaArray['NOMMAT'];

#____________________________________________________MAS MATERIAS________________________________________________________________ 

#_____________________________________________MATERIAS BASICAS 1 A 6_______________________________________________________________ 


// MODULOS DE SALUD




// modulos de 1° salud
  
  $query_s1M1odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=17");
          $s1M1oduloArray = mysqli_fetch_array($query_s1M1odulo); 
   #Esta es la variable Que contiene el Nombre
  $s1M1odulo = utf8_encode($s1M1oduloArray['CODMAT']);

 $query_s1M2odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=18");
          $s1M2oduloArray = mysqli_fetch_array($query_s1M2odulo); 
   #Esta es la variable Que contiene el Nombre
  $s1M2odulo = utf8_encode($s1M2oduloArray['CODMAT']);

   $query_s1M3odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=19");
          $s1M3oduloArray = mysqli_fetch_array($query_s1M3odulo); 
   #Esta es la variable Que contiene el Nombre
  $s1M3odulo = utf8_encode($s1M3oduloArray['CODMAT']);

   $query_s1M4odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=20");
          $s1M4oduloArray = mysqli_fetch_array($query_s1M4odulo); 
   #Esta es la variable Que contiene el Nombre
  $s1M4odulo = utf8_encode($s1M4oduloArray['CODMAT']);


 $query_s1M5odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=21");
          $s1M5oduloArray = mysqli_fetch_array($query_s1M5odulo); 
   #Esta es la variable Que contiene el Nombre
  $s1M5odulo = utf8_encode($s1M5oduloArray['CODMAT']);


 $query_s1M6odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=22");
          $s1M6oduloArray = mysqli_fetch_array($query_s1M6odulo); 
   #Esta es la variable Que contiene el Nombre
  $s1M6odulo = utf8_encode($s1M6oduloArray['CODMAT']);


 $query_s1M7odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=23");
          $s1M7oduloArray = mysqli_fetch_array($query_s1M7odulo); 
   #Esta es la variable Que contiene el Nombre
  $s1M7odulo = utf8_encode($s1M7oduloArray['CODMAT']);

 $query_s1M8odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=24");
          $s1M8oduloArray = mysqli_fetch_array($query_s1M8odulo); 
   #Esta es la variable Que contiene el Nombre
  $s1M8odulo = utf8_encode($s1M8oduloArray['CODMAT']);


// segundo año salud
  $query_s2M1odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=25");
          $s2M1oduloArray = mysqli_fetch_array($query_s2M1odulo); 
   #Esta es la variable Que contiene el Nombre
  $s2M1odulo = utf8_encode($s2M1oduloArray['CODMAT']);

 $query_s2M2odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=26");
          $s2M2oduloArray = mysqli_fetch_array($query_s2M2odulo); 
   #Esta es la variable Que contiene el Nombre
  $s2M2odulo = utf8_encode($s2M2oduloArray['CODMAT']);

   $query_s2M3odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=27");
          $s2M3oduloArray = mysqli_fetch_array($query_s2M3odulo); 
   #Esta es la variable Que contiene el Nombre
  $s2M3odulo = utf8_encode($s2M3oduloArray['CODMAT']);

   $query_s2M4odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=28");
          $s2M4oduloArray = mysqli_fetch_array($query_s2M4odulo); 
   #Esta es la variable Que contiene el Nombre
  $s2M4odulo = utf8_encode($s2M4oduloArray['CODMAT']);


 $query_s2M5odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=29");
          $s2M5oduloArray = mysqli_fetch_array($query_s2M5odulo); 
   #Esta es la variable Que contiene el Nombre
  $s2M5odulo = utf8_encode($s2M5oduloArray['CODMAT']);


 $query_s2M6odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=30");
          $s2M6oduloArray = mysqli_fetch_array($query_s2M6odulo); 
   #Esta es la variable Que contiene el Nombre
  $s2M6odulo = utf8_encode($s2M6oduloArray['CODMAT']);


 $query_s2M7odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=31");
          $s2M7oduloArray = mysqli_fetch_array($query_s2M7odulo); 
   #Esta es la variable Que contiene el Nombre
  $s2M7odulo = utf8_encode($s2M7oduloArray['CODMAT']);

 $query_s2M8odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=32");
          $s2M8oduloArray = mysqli_fetch_array($query_s2M8odulo); 
   #Esta es la variable Que contiene el Nombre
  $s2M8odulo = utf8_encode($s2M8oduloArray['CODMAT']);


//modulos tercer año salud
  $query_s3M1odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=33");
          $s3M1oduloArray = mysqli_fetch_array($query_s3M1odulo); 
   #Esta es la variable Que contiene el Nombre
  $s3M1odulo = utf8_encode($s3M1oduloArray['CODMAT']);

 $query_s3M2odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=34");
          $s3M2oduloArray = mysqli_fetch_array($query_s3M2odulo); 
   #Esta es la variable Que contiene el Nombre
  $s3M2odulo = utf8_encode($s3M2oduloArray['CODMAT']);

   $query_s3M3odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=35");
          $s3M3oduloArray = mysqli_fetch_array($query_s3M3odulo); 
   #Esta es la variable Que contiene el Nombre
  $s3M3odulo = utf8_encode($s3M3oduloArray['CODMAT']);

   $query_s3M4odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=36");
          $s3M4oduloArray = mysqli_fetch_array($query_s3M4odulo); 
   #Esta es la variable Que contiene el Nombre
  $s3M4odulo = utf8_encode($s3M4oduloArray['CODMAT']);


 $query_s3M5odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=37");
          $s3M5oduloArray = mysqli_fetch_array($query_s3M5odulo); 
   #Esta es la variable Que contiene el Nombre
  $s3M5odulo = utf8_encode($s3M5oduloArray['CODMAT']);


 $query_s3M6odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=38");
          $s3M6oduloArray = mysqli_fetch_array($query_s3M6odulo); 
   #Esta es la variable Que contiene el Nombre
  $s3M6odulo = utf8_encode($s3M6oduloArray['CODMAT']);


 $query_s3M7odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=39");
          $s3M7oduloArray = mysqli_fetch_array($query_s3M7odulo); 
   #Esta es la variable Que contiene el Nombre
  $s3M7odulo = utf8_encode($s3M7oduloArray['CODMAT']);

 $query_s3M8odulo = mysqli_query($coneion,"SELECT * FROM materias  WHERE idmaterias=40");
          $s3M8oduloArray = mysqli_fetch_array($query_s3M8odulo); 
   #Esta es la variable Que contiene el Nombre
  $s3M8odulo = utf8_encode($s3M8oduloArray['CODMAT']);





?>