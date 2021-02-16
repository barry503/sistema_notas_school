<?php /* coneion ala base de datos*/
  require_once ("../config/conexionPDOcontacto.php");
   ?>




   <?php 

// CONTANDO LOS NIÑOS Y NIÑAS
 $sql_M = mysqli_query($coneion,"SELECT COUNT(*) as NA FROM alumnos WHERE idsexo='2'");
 $resultado = mysqli_fetch_array($sql_M);
 $NA = $resultado['NA'];



 $sql_H = mysqli_query($coneion,"SELECT COUNT(*) as Ni FROM alumnos WHERE idsexo='1'");
 $resultado = mysqli_fetch_array($sql_H);
 $Ni = $resultado['Ni'];

// FIN CONTANDO LOS NIÑOS Y NIÑAS


//    <!-- INICIO DE LAS CONSULTAS PARA GRAFICOS DE DONA Y PASTEL	 -->
 

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
