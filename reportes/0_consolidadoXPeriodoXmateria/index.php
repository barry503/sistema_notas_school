<!DOCTYPE html>
<html>
<head>
 <?php 
 #variable que valida si estoy en consolidado
 $consolidado = 'variables para validar'; 
 # conexion ala bd
 include '../includes/Conexion.php';
  ?>
  <?php include 'index/vYv.php'; ?>
  <title>Consolidado X Periodo X Grado X Materia | <?php echo $AInstitucion; ?> </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" type="text/css" href="../bootstrap-temas/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="../css/album.css">

  <!--external css iconos-->
  <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="../../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="../../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="../../public/datatables/datatables.min.css"> -->

</head>
<?php 
# los porcentajes y las condiciones de materia
 include 'index/PorcentajeYcondiMateria.php';  
 ?>
<body>


  <!-- div para separado de 5px -->
  <div class="py-5">
    <!-- tabla con todos los datos -->
    <table border="2" style="font-size: 40px;"  class="table  table-bordered bordered-info       text-center">
      <!-- encabezado de tabla -->
      <!-- <thead> -->
        <!-- tr para Istitucion academica -->
        <tr>
          <!-- td para la foto de la institucion cubre 2columnas y 2filas -->
          <td colspan="2" rowspan="2">
            <!-- imagen de la institucion -->
            <img  width="380px" height="400px" src="../../files/imgInstitucion/<?php echo $ImGI; ?>">
          </td>
          <!-- td para el nombre de la institucion cubre 8columnas -->
          <td colspan="7">
            <!-- Nombre de la institucion -->
            <strong>REPORTE DE NOTAS POR MATERIA</strong>
          </td>
          <td colspan="8">
            <!-- Nombre de la institucion -->
            <strong>AÑO:</strong> <?php echo $año; ?>
          </td>
        </tr>
        <!-- tr para año escolar Y opcionCarrera -->
        <tr>
          <!-- td para el año y cubre 4columnas -->
          <td colspan="6">
           <strong> NOMBRE DEL CENTRO EDUCATIVO:</strong> <br> COMPLEJO EDUCATIVO <?php echo $NombreIns; ?>
          </td>
          <!-- td para la opcion o carrera a estudiar y cubre 4columnas -->
          <td colspan="2">
            PERIODO: <?php echo $periodo; ?>
          </td>
        </tr>
        <!-- tr para encabezado de informacion del alumno -->
        <tr>
          <!-- td foto -->
          <td class="text-center" colspan="1">
            <strong>GRADO:</strong>
          </td>
          <td class="text-center" colspan="3">
            <?php echo utf8_encode($Agrado); ?>
          </td>
          <td class="text-center" colspan="2">
            <strong><?php echo $TXTMateria; ?>:</strong>
          </td>
          <td class="text-center" colspan="4">
           <?php echo utf8_encode($NombreMateria); ?>
          </td>
        </tr>
     <!-- </thead> -->
      <!-- Cuerpo de la tabla -->
      <tbody>
        <tr>
          <td><strong>NIE</strong></td>
          <td colspan="2"><strong>NOMBRE</strong></td>
           <td class="text-center" title="actividad 1 periodo <?php echo $periodo; ?>"><strong>ACT 1</strong></td>
          <td class="text-center" title="actividad 2 periodo <?php echo $periodo; ?>"><strong>ACT  2</strong></td>
          <td class="text-center" title="actividad 3 periodo <?php echo $periodo; ?>"><strong>ACT  3</strong></td>
          <td class="text-center" title="actividad 4 periodo <?php echo $periodo; ?>"><strong>ACT  4</strong></td>
          <td class="text-center" title="actividad 5 periodo <?php echo $periodo; ?>"><strong>EXAMEN</strong></td>
          <td class="text-center" title="Nota de Recuperacion"><strong> NR </strong></td>
          <td class="text-center" title="Nota del periodo <?php echo $periodo; ?>"><strong> PROMEDIO </strong></td>
        </tr>

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
         CONCAT(a.nombre, ' , ',a.apellido) as nombres,a.nie, /*Datos personales*/
         a.idgrado,/*Campos para comparar con su respectiva tabla*/
         /*  para notas y  para materias */
          N.carnet,/*campo de comparacion de la tabla 'notas' de la materia */
          /*Campos de la tabla 'notas' de la materia  */
          N.$A1/'$p1'as nota1,
          N.$A2/'$p2'as nota2,
          N.$A3/'$p3'as nota3,
          N.$A4/'$p4'as nota4,
          N.$A5/'$p5'as nota5,
          N.NRP1 as notaRecu,
          N.idmaterias,/*campo para comparacion*/
          M.idmaterias,M.NOMMAT as MateriaA/*Campos para comparar  y NOMMAT  a MateriaA*/

         /*_______________________Empiesa las personalizaciones de las tablas_________________________*/        
         FROM  grado g /*personalizando grado a g*/
         INNER JOIN alumnos a /*personalizando alumnos a a*/
         INNER JOIN notas N /*personalizando notas a N*/
         INNER JOIN materias M  /*personalizando materias a M*/ 
         /*_______________________Empiesan las comparaciones entre tablas________________________*/
         ON g.idgrado=a.idgrado /* comparacion entre grado y alumnos*/
           AND a.idgrado='$grado' /* comparacion entre alumnos y Variable grado*/
         AND g.idgrado='$grado'
         /*Comparaciones para una materia*/
          AND N.carnet=a.carnet
         AND N.idmaterias= '$materia' /* comparacion entre notas y variable M*/
         AND M.idmaterias= '$materia'/* comparacion entre materia y variable M*/
         ")->fetchAll(PDO::  FETCH_OBJ);
         // foreach Alumnos
         foreach ($QueryAlum as $tdsM)://$tdsM -> puede ser cualquier frase y los dos puntos es para cortar esperando que se cierre con endforeach


        # Asignacion a variables de Mostrar Informacion Del Alumno
           $carnet= $tdsM->carnet;
           $Anie     = $tdsM->nie;
           $Afoto     = $tdsM->foto;
           $Anombre  = $tdsM->nombres;
           // $Agrado= $tdsM->grado;
           //Asignacion a variables de Mostrar Informacion Del Alumno 
        #asignacion de variables
          $nota1 = $tdsM->nota1;
          $nota2 = $tdsM->nota2;
          $nota3 = $tdsM->nota3;
          $nota4 = $tdsM->nota4;
          $nota5 = $tdsM->nota5;
          $notaRecu = $tdsM->notaRecu;
          
          $Suma=$nota1 * $p1+$nota2 * $p2+$nota3 * $p3+$nota4 * $p4+$nota5 * $p5;
         
          $PROMEDIO= $Suma / 100;

        #
        ?>

        <?php 
        #campos de las notas
        include 'index/TablaConso.php'; ?>
        
        
        <?php
        #cierres de foreachs
         #QueryAlum
         endforeach; 
         #sqlMateria
         // endforeach; 
        
        ?>

       


       
        
      </tbody><!--/ Cuerpo de la tabla -->
    </table><!--/ tabla con todos los datos -->
  </div><!--/ div para separado de 5px -->


<script >
  window.onload = function VentanaImprimir()
  {
  window.print();
  }
</script>
</body>
</html>