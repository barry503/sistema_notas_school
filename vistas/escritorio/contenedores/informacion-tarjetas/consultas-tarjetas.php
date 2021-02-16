<?php /* Conexion ala base de datos*/
  require_once ("../config/conexionPDOcontacto.php");
   ?>

   <?php // codigo para contar los grados
       
 $contargrados = mysqli_query($coneion,"SELECT COUNT(*) as grados FROM grado ");
 $resultado = mysqli_fetch_array($contargrados);
 $grados = $resultado['grados'];


// codigo para contar todos los alumnos
       
 $a = mysqli_query($coneion,"SELECT COUNT(*) as todosA FROM alumnos ");
 $resultado = mysqli_fetch_array($a);
 $todosA = $resultado['todosA'];


// codigo para contar todas las materias
       
 $sqlmaterias = mysqli_query($coneion,"SELECT COUNT(*) as materias FROM materias ");
 $resultado = mysqli_fetch_array($sqlmaterias);
 $materias = $resultado['materias'];


// codigo para contar  las asistencias
       
 $ina = mysqli_query($coneion,"SELECT COUNT(*) AS asistencia FROM alumnos as a INNER JOIN asistencia as s WHERE a.carnet = s.carnet");
 $resultado = mysqli_fetch_array($ina);
 $asistencia = $resultado['asistencia'];



// codigo para contar las salidas
  $ina = mysqli_query($coneion,"SELECT COUNT(*) AS salidas FROM alumnos as a INNER JOIN salida as s WHERE a.carnet = s.carnet");
 $resultado = mysqli_fetch_array($ina);
 $salidas = $resultado['salidas'];
  ?>