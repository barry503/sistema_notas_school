<?php /* coneion ala base de datos*/
  require_once ("../config/conexionPDOcontacto.php");
   ?>



    <!-- INICIO DE LAS CONSULTAS PARA GRAFICOS DE DONA Y PASTEL	 -->
   <?php 

// KINDER 4

 // $sql_ki = mysqli_query($coneion,"SELECT COUNT(*) as KINDER4 FROM alumnos WHERE idgrado=68077004");
 // $resultado = mysqli_fetch_array($sql_ki);
 // $KINDER4 = $resultado['KINDER4'];

// KINDER 5

 // $sql_5 = mysqli_query($coneion,"SELECT COUNT(*) as KINDER5 FROM alumnos WHERE idgrado=68077005");
 // $resultado = mysqli_fetch_array($sql_5);
 // $KINDER5 = $resultado['KINDER5'];

 // KINDER 6

 // $sql_6 = mysqli_query($coneion,"SELECT COUNT(*) as PREPA6 FROM alumnos WHERE idgrado=68077006");
 // $resultado = mysqli_fetch_array($sql_6);
 // $PREPA6 = $resultado['PREPA6'];


// primero

 $sql1 = mysqli_query($coneion,"SELECT COUNT(*) as primero FROM alumnos WHERE idgrado=1");
 $resultado = mysqli_fetch_array($sql1);
 $primero = $resultado['primero'];

// segundo

 $sql2 = mysqli_query($coneion,"SELECT COUNT(*) as segundo FROM alumnos WHERE idgrado=2");
 $resultado = mysqli_fetch_array($sql2);
 $segundo = $resultado['segundo'];
 // tercer0

 $sql3 = mysqli_query($coneion,"SELECT COUNT(*) as tercer0 FROM alumnos WHERE idgrado=3");
 $resultado = mysqli_fetch_array($sql3);
 $tercer0 = $resultado['tercer0'];
 // cuarto

 $sql4 = mysqli_query($coneion,"SELECT COUNT(*) as cuarto FROM alumnos WHERE idgrado=4");
 $resultado = mysqli_fetch_array($sql4);
 $cuarto = $resultado['cuarto'];


// quinto

 $sql5 = mysqli_query($coneion,"SELECT COUNT(*) as quinto FROM alumnos WHERE idgrado=5");
 $resultado = mysqli_fetch_array($sql5);
 $quinto = $resultado['quinto'];


// sexto

 $sql6 = mysqli_query($coneion,"SELECT COUNT(*) as sexto FROM alumnos WHERE idgrado=6");
 $resultado = mysqli_fetch_array($sql6);
 $sexto = $resultado['sexto'];

 // septimo

 $sql7 = mysqli_query($coneion,"SELECT COUNT(*) as septimo FROM alumnos WHERE idgrado=7");
 $resultado = mysqli_fetch_array($sql7);
 $septimo = $resultado['septimo'];

 // octavo

 $sql8 = mysqli_query($coneion,"SELECT COUNT(*) as octavo FROM alumnos WHERE idgrado=8");
 $resultado = mysqli_fetch_array($sql8);
 $octavo = $resultado['octavo'];


// noveno

 $sql9 = mysqli_query($coneion,"SELECT COUNT(*) as noveno FROM alumnos WHERE idgrado=9");
 $resultado = mysqli_fetch_array($sql9);
 $noveno = $resultado['noveno'];

 // bto1

 $sqb1 = mysqli_query($coneion,"SELECT COUNT(*) as bto1 FROM alumnos WHERE idgrado=10");
 $resultado = mysqli_fetch_array($sqb1);
 $bto1 = $resultado['bto1'];

 // bto1

 $sqb2 = mysqli_query($coneion,"SELECT COUNT(*) as bto2 FROM alumnos WHERE idgrado=11");
 $resultado = mysqli_fetch_array($sqb2);
 $bto2 = $resultado['bto2'];

 // bto3

 $sqb3 = mysqli_query($coneion,"SELECT COUNT(*) as bto3 FROM alumnos WHERE idgrado=12");
 $resultado = mysqli_fetch_array($sqb3);
 $bto3 = $resultado['bto3'];
       ?>
       <!-- FIN DE LAS CONSULTAS PARA GRAFICOS DE DONA Y PASTEL	 -->


 <!-- INICIO DE LAS CONSULTAS PARA DEMAS GRAFICOS 	 -->
<?php 


$Hsexo='1';//Hombre
$Msexo='2';//Mujer


// enero
$Imes1='2020-01-01 00:00:10';
$Fmes1='2020-01-30 00:00:44';

//febrero
$Imes2='2020-02-01 00:00:10';
$Fmes2='2020-02-30 00:00:44';

//marzo
$Imes3='2020-03-01 00:00:10';
$Fmes3='2020-03-30 00:00:44';

//abril
$Imes4='2020-04-01 00:00:10';
$Fmes4='2020-04-30 00:00:44';

//mayo
$Imes5='2020-05-01 00:00:10';
$Fmes5='2020-05-30 00:00:44';

//junio
$Imes6='2020-06-01 00:00:10';
$Fmes6='2020-06-30 00:00:44';

//julio
$Imes7='2020-07-01 00:00:10';
$Fmes7='2020-07-30 00:00:44';

//agosto
$Imes8='2020-08-01 00:00:10';
$Fmes8='2020-08-30 00:00:44';

//septiembre
$Imes9='2020-09-01 00:00:10';
$Fmes9='2020-09-30 00:00:44';

//octubre
$Imes10='2020-10-01 00:00:10';
$Fmes10='2020-10-30 00:00:44';

//noviembre
$Imes11='2020-11-01 00:00:10';
$Fmes11='2020-11-30 00:00:44';

//diciembre
$Imes12='2020-12-01 00:00:10';
$Fmes12='2020-12-30 00:00:44';




// enero para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as enero1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes1' AND a.fecha <= '$Fmes1' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $enero1 = $resultado['enero1'];


// enero para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as enero2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes1' AND a.fecha <= '$Fmes1' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $enero2 = $resultado['enero2'];




// febrero para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as febrero1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes2' AND a.fecha <= '$Fmes2' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $febrero1 = $resultado['febrero1'];


// febrero para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as febrero2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes2' AND a.fecha <= '$Fmes2' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $febrero2 = $resultado['febrero2'];




// marzo para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as marzo1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes3' AND a.fecha <= '$Fmes3' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $marzo1 = $resultado['marzo1'];


// marzo para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as marzo2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes3' AND a.fecha <= '$Fmes3' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $marzo2 = $resultado['marzo2'];





// abril para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as abril1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes4' AND a.fecha <= '$Fmes4' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $abril1 = $resultado['abril1'];


// abril para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as abril2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes4' AND a.fecha <= '$Fmes4' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $abril2 = $resultado['abril2'];


// mayo para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as mayo1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes5' AND a.fecha <= '$Fmes5' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $mayo1 = $resultado['mayo1'];


// mayo para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as mayo2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes5' AND a.fecha <= '$Fmes5' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $mayo2 = $resultado['mayo2'];





// junio para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as junio1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes6' AND a.fecha <= '$Fmes6' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $junio1 = $resultado['junio1'];


// junio para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as junio2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes6' AND a.fecha <= '$Fmes6' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $junio2 = $resultado['junio2'];






// julio para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as julio1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes7' AND a.fecha <= '$Fmes7' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $julio1 = $resultado['julio1'];


// julio para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as julio2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes7' AND a.fecha <= '$Fmes7' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $julio2 = $resultado['julio2'];





// agosto para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as agosto1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes8' AND a.fecha <= '$Fmes8' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $agosto1 = $resultado['agosto1'];


// agosto para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as agosto2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes8' AND a.fecha <= '$Fmes8' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $agosto2 = $resultado['agosto2'];





// septiembre para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as septiembre1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes9' AND a.fecha <= '$Fmes9' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $septiembre1 = $resultado['septiembre1'];


// septiembre para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as septiembre2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes9' AND a.fecha <= '$Fmes9' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $septiembre2 = $resultado['septiembre2'];





// octubre para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as octubre1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes10' AND a.fecha <= '$Fmes10' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $octubre1 = $resultado['octubre1'];


// octubre para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as octubre2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes10' AND a.fecha <= '$Fmes10' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $octubre2 = $resultado['octubre2'];






 // noviembre para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as noviembre1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes11' AND a.fecha <= '$Fmes11' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $noviembre1 = $resultado['noviembre1'];


// noviembre para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as noviembre2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes11' AND a.fecha <= '$Fmes11' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $noviembre2 = $resultado['noviembre2'];





// diciembre para niños
 $sql1h = mysqli_query($coneion,"SELECT COUNT(a.carnet) as diciembre1, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes12' AND a.fecha <= '$Fmes12' AND U.idsexo = '$Hsexo' ");
 $resultado = mysqli_fetch_array($sql1h);
 $diciembre1 = $resultado['diciembre1'];


// diciembre para niñas
 $sql1m = mysqli_query($coneion,"SELECT COUNT(a.carnet) as diciembre2, u.carnet, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN alumnos AS U ON a.carnet=u.carnet WHERE a.fecha >= '$Imes12' AND a.fecha <= '$Fmes12' AND U.idsexo = '$Msexo' ");
 $resultado = mysqli_fetch_array($sql1m);
 $diciembre2 = $resultado['diciembre2'];


 ?>
















 <!-- FIN DE LAS CONSULTAS PARA DEMAS GRAFICOS 	 -->
