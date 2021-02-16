<!-- peticiones de el archivo index.php -->
<?php 
#inclusiones 
  //Conexion a la base de datos
  include 'conexion.php'; 

#limpiando variables

 include 'variablesDatos.php'; 


  //las variables de las materias
  include 'idMaterias.php'; 

#Variables Constantes
  #Fecha del dia de hoy
  $fechaHoy = date_default_timezone_set('America/El_Salvador');# Zona Horaria 
  $fechaHoy = date("Y-m-d");
  #le doy el valor de la fecha de hoy 
  $idasistencia = $fechaHoy;


#codicional para Ingresar alumno
 if ($carnet) {

#si sexo es igual a 1 Hombre
if ($idsexo == 1) { 
  $foto='hombre.png';
 }else{
  $foto='mujer.png';
 }

  
  #si existe el carnet
   $sqlInfoAlumno = "
   INSERT INTO alumnos (carnet,idasistencia,foto,nombre,apellido,fechanac,idsexo,idgrado,telefono,direccion,encargado,nie,salud,trabajo,mama,papa,codfam,repetidor)
   VALUES('$carnet','$idasistencia','$foto','$nombre','$apellido','$fechanac','$idsexo','$idgrado','$telefono','$direccion','$encargado','$nie','$salud','$trabajo','$mama','$papa','$codfam','$repetidor')
   ";
    $sqlConducta="INSERT INTO conducta (carnet) VALUES('$carnet')";


  }


#condicional para materias EDUCACION BASICA
if ($idgrado <= 9) {
 	# Consultas sql...

  #lenguaje
  $sqlM1="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M1')";
  #matematicas
  $sqlM2="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M2')";
  #ciencias fisicas
  $sqlM3="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M3')";
  #estudios sociales
  $sqlM4="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M4')";
  #seminario
  $sqlM5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M5')";
  #educacion fisica
  $sqlM6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M6')";
  #informatica
  $sqlM7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M7')";
  #ingles
  $sqlM8="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M8')";
  #tecnologia
  $sqlM9="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M9')";
  #quimica y biologia
  $sqlM10="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M10')";
  #orientacion para la vida
  $sqlM11="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M11')";
  #laboratorio de creatividad
  $sqlM12="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M12')";
  #formacion cristiana
  $sqlM13="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M13')";
  #MORAL URBANIDAD Y CIVICA
  $sqlM17="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M17')";
  #EDUCACION ARTISTICA
  $sqlM18="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M18')";
  
  
    
  #querys
   $queryInfoAlumno = mysqli_query($con,$sqlInfoAlumno);
   $queryConducta = mysqli_query($con,$sqlConducta);
   #lenguaje
   $queryM1 = mysqli_query($con,$sqlM1);
   #matematicas
   $queryM2 = mysqli_query($con,$sqlM2);
   #ciencias fisicas
   $queryM3 = mysqli_query($con,$sqlM3);
   #estudios sociales
   $queryM4 = mysqli_query($con,$sqlM4);
   #seminario
   $queryM5 = mysqli_query($con,$sqlM5);
   #educacion fisica
   $queryM6 = mysqli_query($con,$sqlM6);
   #informatica
   $queryM7 = mysqli_query($con,$sqlM7);
   #ingles
   $queryM8 = mysqli_query($con,$sqlM8);
   #tecnologia
   $queryM9 = mysqli_query($con,$sqlM9);
   #quimica y biologia
   $queryM10 = mysqli_query($con,$sqlM10);
   #orientacion para la vida
   $queryM11 = mysqli_query($con,$sqlM11);
   #laboratorio de creatividad
   $queryM12 = mysqli_query($con,$sqlM12);
   #formacion cristiana
   $queryM13 = mysqli_query($con,$sqlM13);
   #MORAL URBANIDAD Y CIVICA
   $queryM17 = mysqli_query($con,$sqlM17);
   #EDUCACION ARTISTICA
   $queryM18= mysqli_query($con,$sqlM18);
 
   if($queryInfoAlumno || $queryConducta || $queryM1 || $queryM2 || $queryM3 || $queryM4 || $queryM5 || $queryM6 || $queryM7 || $queryM8 || $queryM9 || $queryM10|| $queryM11|| $queryM12|| $queryM13 || $queryM17 || $queryM18){
 
 ?>

  <script >
 /* Alerta para envio exitoso*/
 Swal.fire({
 icon:'success',
 title:'Alumno Registrado Exitosamente...',
 html: ' Todos los datos del <br> Alumno se Registraron...',
 grow: 'fullscreen',
 footer: 'ALUMNO DE EDUCACION BASICA... '
 });
 </script>
 <?php 
 }

 } 

?>
<!-- _________________________________________________________________________________________________________________________________ -->
<?php
#condicional para materias 1Bto Contador
if ($idgrado == 10) {
  # Consultas sql...

  #lenguaje
  $sqlM1="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M1')";
  #matematicas
  $sqlM2="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M2')";
  #ciencias fisicas
  $sqlM3="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M3')";
  #estudios sociales
  $sqlM4="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M4')";
  #seminario
  $sqlM5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M5')";
  #educacion fisica
  $sqlM6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M6')";
  #informatica
  $sqlM7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M7')";
  #ingles
  $sqlM8="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M8')";
  #tecnologia
  $sqlM9="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M9')";
  #quimica y biologia
  $sqlM10="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M10')";
  #orientacion para la vida
  $sqlM11="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M11')";
  #laboratorio de creatividad
  $sqlM12="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M12')";
  #formacion cristiana
  $sqlM13="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M13')";
  #presupuesto
  $sqlM14="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M14')";
  #comercializacion
  $sqlM15="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M15')";
  #contabilidad de costos
  $sqlM16="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M16')";
  #MORAL URBANIDAD Y CIVICA
  $sqlM17="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M17')";


  
  
    
  #querys
   $queryInfoAlumno = mysqli_query($con,$sqlInfoAlumno);
   $queryConducta = mysqli_query($con,$sqlConducta);
   #lenguaje
   $queryM1 = mysqli_query($con,$sqlM1);
   #matematicas
   $queryM2 = mysqli_query($con,$sqlM2);
   #ciencias fisicas
   $queryM3 = mysqli_query($con,$sqlM3);
   #estudios sociales
   $queryM4 = mysqli_query($con,$sqlM4);
   #seminario
   $queryM5 = mysqli_query($con,$sqlM5);
   #educacion fisica
   $queryM6 = mysqli_query($con,$sqlM6);
   #informatica
   $queryM7 = mysqli_query($con,$sqlM7);
   #ingles
   $queryM8 = mysqli_query($con,$sqlM8);
   #tecnologia
   $queryM9 = mysqli_query($con,$sqlM9);
   #quimica y biologia
   $queryM10 = mysqli_query($con,$sqlM10);
   #orientacion para la vida
   $queryM11 = mysqli_query($con,$sqlM11);
   #laboratorio de creatividad
   $queryM12 = mysqli_query($con,$sqlM12);
   #formacion cristiana
   $queryM13 = mysqli_query($con,$sqlM13);
   #presupuesto
  $queryM14= mysqli_query($con,$sqlM14);
  #comercializacion
  $queryM15= mysqli_query($con,$sqlM15);
  #contabilidad de costos
  $queryM16= mysqli_query($con,$sqlM16);
  #MORAL URBANIDAD Y CIVICA
  $queryM17 = mysqli_query($con,$sqlM17);
 
   if($queryInfoAlumno || $queryConducta || $queryM1 || $queryM2 || $queryM3 || $queryM4 || $queryM5 || $queryM6 || $queryM7 || $queryM8 || $queryM9 || $queryM10|| $queryM11 || $queryM12 || $queryM13 || $queryM14 || $queryM15 || $queryM16 || $queryM17){
 
 ?>

  <script >
 /* Alerta para envio exitoso*/
 Swal.fire({
 icon:'success',
 title:'Alumno Registrado Exitosamente...',
 html: ' Todos los datos del <br> Alumno se registraron...',
 grow: 'fullscreen',
 footer: 'ALUMNO DE BACHILLERATO CONTADOR... '
 });
 </script>
 <?php 
 }

 } 

?>
<!-- _________________________________________________________________________________________________________________________________ -->
<?php
#condicional para materias 2Bto Contador
if ($idgrado == 11) {
  # Consultas sql...

  #lenguaje
  $sqlM1="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M1')";
  #matematicas
  $sqlM2="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M2')";
  #ciencias fisicas
  $sqlM3="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M3')";
  #estudios sociales
  $sqlM4="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M4')";
  #seminario
  $sqlM5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M5')";
  #educacion fisica
  $sqlM6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M6')";
  #informatica
  $sqlM7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M7')";
  #ingles
  $sqlM8="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M8')";
  #tecnologia
  $sqlM9="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M9')";
  #quimica y biologia
  $sqlM10="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M10')";
  #orientacion para la vida
  $sqlM11="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M11')";
  #laboratorio de creatividad
  $sqlM12="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M12')";
  #formacion cristiana
  $sqlM13="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M13')";
  #presupuesto
  $sqlM14="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M14')";
  #comercializacion
  $sqlM15="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M15')";
  #contabilidad de costos
  $sqlM16="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M16')";
  #MORAL URBANIDAD Y CIVICA
  $sqlM17="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M17')";


  
  
    
  #querys
   $queryInfoAlumno = mysqli_query($con,$sqlInfoAlumno);
   $queryConducta = mysqli_query($con,$sqlConducta);
   #lenguaje
   $queryM1 = mysqli_query($con,$sqlM1);
   #matematicas
   $queryM2 = mysqli_query($con,$sqlM2);
   #ciencias fisicas
   $queryM3 = mysqli_query($con,$sqlM3);
   #estudios sociales
   $queryM4 = mysqli_query($con,$sqlM4);
   #seminario
   $queryM5 = mysqli_query($con,$sqlM5);
   #educacion fisica
   $queryM6 = mysqli_query($con,$sqlM6);
   #informatica
   $queryM7 = mysqli_query($con,$sqlM7);
   #ingles
   $queryM8 = mysqli_query($con,$sqlM8);
   #tecnologia
   $queryM9 = mysqli_query($con,$sqlM9);
   #quimica y biologia
   $queryM10 = mysqli_query($con,$sqlM10);
   #orientacion para la vida
   $queryM11 = mysqli_query($con,$sqlM11);
   #laboratorio de creatividad
   $queryM12 = mysqli_query($con,$sqlM12);
   #formacion cristiana
   $queryM13 = mysqli_query($con,$sqlM13);
   #presupuesto
  $queryM14= mysqli_query($con,$sqlM14);
  #comercializacion
  $queryM15= mysqli_query($con,$sqlM15);
  #contabilidad de costos
  $queryM16= mysqli_query($con,$sqlM16);
  #MORAL URBANIDAD Y CIVICA
  $queryM17 = mysqli_query($con,$sqlM17);
 
   if($queryInfoAlumno || $queryConducta || $queryM1 || $queryM2 || $queryM3 || $queryM4 || $queryM5 || $queryM6 || $queryM7 || $queryM8 || $queryM9 || $queryM10|| $queryM11 || $queryM12 || $queryM13 || $queryM14 || $queryM15 || $queryM16 || $queryM17){
 
 ?>

  <script >
 /* Alerta para envio exitoso*/
 Swal.fire({
 icon:'success',
 title:'Alumno Registrado Exitosamente...',
 html: ' Todos los datos del <br> Alumno se registraron...',
 grow: 'fullscreen',
 footer: 'ALUMNO DE BACHILLERATO CONTADOR... '
 });
 </script>
 <?php 
 }

 } 

?>
<!-- _________________________________________________________________________________________________________________________________ -->
<?php
#condicional para materias 3Bto Contador
if ($idgrado == 12) {
  # Consultas sql...

  #lenguaje
  $sqlM1="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M1')";
  #matematicas
  $sqlM2="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M2')";
  #ciencias fisicas
  $sqlM3="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M3')";
  #estudios sociales
  $sqlM4="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M4')";
  #seminario
  $sqlM5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M5')";
  #educacion fisica
  $sqlM6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M6')";
  #informatica
  $sqlM7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M7')";
  #ingles
  $sqlM8="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M8')";
  #tecnologia
  $sqlM9="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M9')";
  #quimica y biologia
  $sqlM10="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M10')";
  #orientacion para la vida
  $sqlM11="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M11')";
  #laboratorio de creatividad
  $sqlM12="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M12')";
  #formacion cristiana
  $sqlM13="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M13')";
  #presupuesto
  $sqlM14="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M14')";
  #comercializacion
  $sqlM15="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M15')";
  #contabilidad de costos
  $sqlM16="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M16')";
  #MORAL URBANIDAD Y CIVICA
  $sqlM17="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M17')";


  
  
    
  #querys
   $queryInfoAlumno = mysqli_query($con,$sqlInfoAlumno);
   $queryConducta = mysqli_query($con,$sqlConducta);
   #lenguaje
   $queryM1 = mysqli_query($con,$sqlM1);
   #matematicas
   $queryM2 = mysqli_query($con,$sqlM2);
   #ciencias fisicas
   $queryM3 = mysqli_query($con,$sqlM3);
   #estudios sociales
   $queryM4 = mysqli_query($con,$sqlM4);
   #seminario
   $queryM5 = mysqli_query($con,$sqlM5);
   #educacion fisica
   $queryM6 = mysqli_query($con,$sqlM6);
   #informatica
   $queryM7 = mysqli_query($con,$sqlM7);
   #ingles
   $queryM8 = mysqli_query($con,$sqlM8);
   #tecnologia
   $queryM9 = mysqli_query($con,$sqlM9);
   #quimica y biologia
   $queryM10 = mysqli_query($con,$sqlM10);
   #orientacion para la vida
   $queryM11 = mysqli_query($con,$sqlM11);
   #laboratorio de creatividad
   $queryM12 = mysqli_query($con,$sqlM12);
   #formacion cristiana
   $queryM13 = mysqli_query($con,$sqlM13);
   #presupuesto
  $queryM14= mysqli_query($con,$sqlM14);
  #comercializacion
  $queryM15= mysqli_query($con,$sqlM15);
  #contabilidad de costos
  $queryM16= mysqli_query($con,$sqlM16);
  #MORAL URBANIDAD Y CIVICA
  $queryM17 = mysqli_query($con,$sqlM17);
 
   if($queryInfoAlumno || $queryConducta || $queryM1 || $queryM2 || $queryM3 || $queryM4 || $queryM5 || $queryM6 || $queryM7 || $queryM8 || $queryM9 || $queryM10|| $queryM11 || $queryM12 || $queryM13 || $queryM14 || $queryM15 || $queryM16 || $queryM17){
 
 ?>

  <script >
 /* Alerta para envio exitoso*/
 Swal.fire({
 icon:'success',
 title:'Alumno Registrado Exitosamente...',
 html: ' Todos los datos del <br> Alumno se registraron...',
 grow: 'fullscreen',
 footer: 'ALUMNO DE BACHILLERATO CONTADOR... '
 });
 </script>
 <?php 
 }

 } 

?>
<!-- _________________________________________________________________________________________________________________________________ -->

<?php
#condicional para materias 1bto salud
if ($idgrado == 13) {
  # Consultas sql...

  #lenguaje
  $sqlM1="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M1')";
  #matematicas
  $sqlM2="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M2')";
  #ciencias fisicas
  $sqlM3="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M3')";
  #estudios sociales
  $sqlM4="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M4')";
  #seminario
  $sqlM5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M5')";
  #educacion fisica
  $sqlM6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M6')";
  #informatica
  $sqlM7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M7')";
  #ingles
  $sqlM8="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M8')";
  #formacion cristiana
  $sqlM13="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M13')";
  #MORAL URBANIDAD Y CIVICA
  $sqlM17="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M17')";
   #modulo 1
     $sqlModulos1="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos1')";
     #modulo 2
     $sqlModulos2="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos2')";
     #modulo 3
     $sqlModulos3="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos3')"; 
     #modulo 4
     $sqlModulos4="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos4')";
     #modulo 5
     $sqlModulos5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos5')";
     #modulo 6
     $sqlModulos6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos6')";
     #modulo 7
     $sqlModulos7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos7')";
     #modulo 8
     $sqlModulos8="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos8')";


  
  
    
  #querys
   $queryInfoAlumno = mysqli_query($con,$sqlInfoAlumno);
   $queryConducta = mysqli_query($con,$sqlConducta);
   #lenguaje
   $queryM1 = mysqli_query($con,$sqlM1);
   #matematicas
   $queryM2 = mysqli_query($con,$sqlM2);
   #ciencias fisicas
   $queryM3 = mysqli_query($con,$sqlM3);
   #estudios sociales
   $queryM4 = mysqli_query($con,$sqlM4);
   #seminario
   $queryM5 = mysqli_query($con,$sqlM5);
   #educacion fisica
   $queryM6 = mysqli_query($con,$sqlM6);
   #informatica
   $queryM7 = mysqli_query($con,$sqlM7);
   #ingles
   $queryM8 = mysqli_query($con,$sqlM8);
   #formacion cristiana
   $queryM13 = mysqli_query($con,$sqlM13);
  
  #MORAL URBANIDAD Y CIVICA
  $queryM17 = mysqli_query($con,$sqlM17);

   #modulo 1
     $queryModulos1= mysqli_query($con,$sqlModulos1);
     #querymodulo 2
     $queryModulos2= mysqli_query($con,$sqlModulos2);
     #querymodulo 3
     $queryModulos3= mysqli_query($con,$sqlModulos3); 
     #querymodulo 4
     $queryModulos4= mysqli_query($con,$sqlModulos4);
     #querymodulo 5
     $queryModulos5= mysqli_query($con,$sqlModulos5);
     #querymodulo 6
     $queryModulos6= mysqli_query($con,$sqlModulos6);
     #querymodulo 7
     $queryModulos7= mysqli_query($con,$sqlModulos7);
     #querymodulo 8
     $queryModulos8= mysqli_query($con,$sqlModulos8);


 
   if($queryInfoAlumno || $queryConducta || $queryM1 || $queryM2 || $queryM3 || $queryM4 || $queryM5 || $queryM6 || $queryM7 || $queryM8 || $queryM13  || $queryM17 || $queryModulos1 || $queryModulos2 || $queryModulos3 || $queryModulos4 || $queryModulos5 || $queryModulos6 || $queryModulos7 || $queryModulos8){
 
 ?>

  <script >
 /* Alerta para envio exitoso*/
 Swal.fire({
 icon:'success',
 title:'Alumno Registrado Exitosamente...',
 html: ' Todos los datos del <br> Alumno se Registraron...',
 grow: 'fullscreen',
 footer: 'ALUMNO DE 1°  AÑO BACHILLERATO SALUD... '
 });
 </script>
 <?php 
 }

 } 

?>
<!-- _________________________________________________________________________________________________________________________________ -->
<?php
#condicional para materias 2bto salud
if ($idgrado == 14) {
  # Consultas sql...

  #lenguaje
  $sqlM1="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M1')";
  #matematicas
  $sqlM2="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M2')";
  #ciencias fisicas
  $sqlM3="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M3')";
  #estudios sociales
  $sqlM4="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M4')";
  #seminario
  $sqlM5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M5')";
  #educacion fisica
  $sqlM6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M6')";
  #informatica
  $sqlM7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M7')";
  #ingles
  $sqlM8="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M8')";

  # orientacion para la vida
  $sqlM11="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M11')";  
  #formacion cristiana
  $sqlM13="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M13')";
  #MORAL URBANIDAD Y CIVICA
  $sqlM17="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M17')";
   #modulo 1
     $sqlModulos1="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos1')";
     #modulo 2
     $sqlModulos2="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos2')";
     #modulo 3
     $sqlModulos3="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos3')"; 
     #modulo 4
     $sqlModulos4="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos4')";
     #modulo 5
     $sqlModulos5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos5')";
     #modulo 6
     $sqlModulos6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos6')";
     #modulo 7
     $sqlModulos7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos7')";
     #modulo 8
     $sqlModulos8="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos8')";


  
  
    
  #querys
   $queryInfoAlumno = mysqli_query($con,$sqlInfoAlumno);
   $queryConducta = mysqli_query($con,$sqlConducta);
   #lenguaje
   $queryM1 = mysqli_query($con,$sqlM1);
   #matematicas
   $queryM2 = mysqli_query($con,$sqlM2);
   #ciencias fisicas
   $queryM3 = mysqli_query($con,$sqlM3);
   #estudios sociales
   $queryM4 = mysqli_query($con,$sqlM4);
   #seminario
   $queryM5 = mysqli_query($con,$sqlM5);
   #educacion fisica
   $queryM6 = mysqli_query($con,$sqlM6);
   #informatica
   $queryM7 = mysqli_query($con,$sqlM7);
   #ingles
   $queryM8 = mysqli_query($con,$sqlM8);
   # orientacion para la vida
  $queryM11 = mysqli_query($con,$sqlM11);
   #formacion cristiana
   $queryM13 = mysqli_query($con,$sqlM13);
  
  #MORAL URBANIDAD Y CIVICA
  $queryM17 = mysqli_query($con,$sqlM17);

   #modulo 1
     $queryModulos1= mysqli_query($con,$sqlModulos1);
     #querymodulo 2
     $queryModulos2= mysqli_query($con,$sqlModulos2);
     #querymodulo 3
     $queryModulos3= mysqli_query($con,$sqlModulos3); 
     #querymodulo 4
     $queryModulos4= mysqli_query($con,$sqlModulos4);
     #querymodulo 5
     $queryModulos5= mysqli_query($con,$sqlModulos5);
     #querymodulo 6
     $queryModulos6= mysqli_query($con,$sqlModulos6);
     #querymodulo 7
     $queryModulos7= mysqli_query($con,$sqlModulos7);
     #querymodulo 8
     $queryModulos8= mysqli_query($con,$sqlModulos8);


 
   if($queryInfoAlumno || $queryConducta || $queryM1 || $queryM2 || $queryM3 || $queryM4 || $queryM5 || $queryM6 || $queryM7 || $queryM8 ||  $queryM11 || $queryM13  || $queryM17 || $queryModulos1 || $queryModulos2 || $queryModulos3 || $queryModulos4 || $queryModulos5 || $queryModulos6 || $queryModulos7 || $queryModulos8){
 
 ?>

  <script >
 /* Alerta para envio exitoso*/
 Swal.fire({
 icon:'success',
 title:'Alumno Registrado Exitosamente...',
 html: ' Todos los datos del <br> Alumno se Registraron...',
 grow: 'fullscreen',
 footer: 'ALUMNO DE 2°  AÑO BACHILLERATO SALUD... '
 });
 </script>
 <?php 
 }

 } 

?>
<!-- _________________________________________________________________________________________________________________________________ -->
<?php
#condicional para materias 3bto salud
if ($idgrado == 15) {
  # Consultas sql...


  #seminario
  $sqlM5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M5')";
  #educacion fisica
  $sqlM6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M6')";
  #informatica
  $sqlM7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$M7')";

  #formacion cristiana
  $sqlM13="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M13')";
  #MORAL URBANIDAD Y CIVICA
  $sqlM17="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$M17')";
  #ORIENTACIÓN VOCACIONAL
  $sqlMo18= "INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Mo18')";
   #modulo 1
     $sqlModulos1="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos1')";
     #modulo 2
     $sqlModulos2="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos2')";
     #modulo 3
     $sqlModulos3="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos3')"; 
     #modulo 4
     $sqlModulos4="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos4')";
     #modulo 5
     $sqlModulos5="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos5')";
     #modulo 6
     $sqlModulos6="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos6')";
     #modulo 7
     $sqlModulos7="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos7')";
     #modulo 8
     $sqlModulos8="INSERT INTO notas(carnet,idmaterias) VALUES('$carnet','$Modulos8')";


  
  
    
  #querys
   $queryInfoAlumno = mysqli_query($con,$sqlInfoAlumno);
   $queryConducta = mysqli_query($con,$sqlConducta);
   
   #seminario
   $queryM5 = mysqli_query($con,$sqlM5);
   #educacion fisica
   $queryM6 = mysqli_query($con,$sqlM6);
   #informatica
   $queryM7 = mysqli_query($con,$sqlM7);
   #formacion cristiana
   $queryM13 = mysqli_query($con,$sqlM13);
  
  #MORAL URBANIDAD Y CIVICA
  $queryM17 = mysqli_query($con,$sqlM17);

  #ORIENTACIÓN VOCACIONAL
  $queryMo18= mysqli_query($con,$sqlMo18);

   #modulo 1
     $queryModulos1= mysqli_query($con,$sqlModulos1);
     #querymodulo 2
     $queryModulos2= mysqli_query($con,$sqlModulos2);
     #querymodulo 3
     $queryModulos3= mysqli_query($con,$sqlModulos3); 
     #querymodulo 4
     $queryModulos4= mysqli_query($con,$sqlModulos4);
     #querymodulo 5
     $queryModulos5= mysqli_query($con,$sqlModulos5);
     #querymodulo 6
     $queryModulos6= mysqli_query($con,$sqlModulos6);
     #querymodulo 7
     $queryModulos7= mysqli_query($con,$sqlModulos7);
     #querymodulo 8
     $queryModulos8= mysqli_query($con,$sqlModulos8);


 
   if($queryInfoAlumno || $queryConducta || $queryM5 || $queryM6 || $queryM7 || $queryM13  || $queryM17 || $queryMo18 || $queryModulos1 || $queryModulos2 || $queryModulos3 || $queryModulos4 || $queryModulos5 || $queryModulos6 || $queryModulos7 || $queryModulos8){
 
 ?>

  <script >
 /* Alerta para envio exitoso*/
 Swal.fire({
 icon:'success',
 title:'Alumno Registrado Exitosamente...',
 html: ' Todos los datos del <br> Alumno se Registraron...',
 grow: 'fullscreen',
 footer: 'ALUMNO DE 3°  AÑO BACHILLERATO SALUD... '
 });
 </script>
 <?php 
 }

 } 

?>

