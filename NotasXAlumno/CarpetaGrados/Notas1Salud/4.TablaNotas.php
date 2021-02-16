<!-- <style type="text/css">
  .letraTama {
    font-size: 10px;
  }
</style> -->
<!-- TABLA DE NOTAS PARA TODOS LOS ALUMNOS DE SU GRADO RESPECTIVO -->




<!-- incluyo las variables del objeto renombradas avariables -->
<?php  //include 'include/renombroASaVariable.php';  
include 'Notas1Salud/include/5.renombrandoVariables.php';    ?>

  <!-- div para separado de 5px -->
  <div class="py-5 "> <!-- bg-info -->
    <!-- tabla con todos los datos -->
    <table  class="table table-striped table-bordered  table-condensed   text-black  table-hover text-center">
      <!-- encabezado de tabla -->
      <!-- <thead> -->
        <!-- tr para Istitucion academica -->
        <tr>
          <!-- th para la foto de la institucion cubre 2columnas y 2filas -->
          <th colspan="2" rowspan="2">
            <!-- imagen de la institucion -->
            <img  width="180px" height="200px" src="../files/imgInstitucion/<?php echo $imgInstitucion; ?>">
          </th>
          <!-- th para el nombre de la institucion cubre 8columnas -->
          <th colspan="8">
            <!-- Nombre de la institucion -->
            BOLETA DE NOTAS POR ALUMNO DEL COMPLEJO EDUCATIVO <?php echo $NombreInstitucion; ?>
          </th>

        </tr>
        <!-- tr para año escolar Y opcionCarrera -->
        <tr>
          <!-- th para el año y cubre 4columnas -->
          <th colspan="4">
            AÑO ESCOLAR: <?php echo $añoEscolar; ?>
          </th>
          <!-- th para la opcion o carrera a estudiar y cubre 4columnas -->
          <th colspan="4">
            OPCION: <?php echo $opcionCarrera; ?>
          </th>
        </tr>
        <!-- tr para encabezado de informacion del alumno -->
        <tr>
          <!-- th foto -->
          <th class="text-center" rowspan="2">
            <img  width="180px" height="200px" src="../files/alumnos/<?php echo $Afoto; ?>">
          </th>
          <th class="text-center">NIE</th>
          <th class="text-center">NOMBRE</th>
          <th class="text-center">APELLIDO</th>
          <th class="text-center" colspan="2">GRADO</th>
          <th class="text-center">SECCION</th>
          <th class="text-center">PERIODO</th>
          
        </tr>
        <!-- tr para  informacion del alumno -->
        <tr>
          <td class="text-center" ><?php echo $Anie; ?></td>
          <td class="text-center" ><?php echo $Anombre; ?></td>
          <td class="text-center" ><?php echo $Aapellido; ?></td>
          <td class="text-center" colspan="2"> <?php echo $Agrado; ?></td>
          <td class="text-center" > <?php echo $Aseccion; ?> </td>
          <td class="text-center" colspan="2"  ><?php echo $periodo; ?></td>
        </tr>
        <tr>
          <th class="text-center " >ASIGNATURAS</th>
          <th class="text-center " title="Actividad 1 periodo <?php echo $periodo; ?>">ACT 1</th>
          <th class="text-center " title="Actividad 2 periodo <?php echo $periodo; ?>">ACT 2</th>
          <th class="text-center " title="Actividad 3 periodo <?php echo $periodo; ?>">ACT 3</th>
          <th class="text-center " title="Actividad 4 periodo <?php echo $periodo; ?>">ACT 4</th>
          <th class="text-center " title="Actividad 5 periodo <?php echo $periodo; ?>">EXAMEN</th>
          <th class="text-center " title="Nota de Recuperacion">NR</th>
          <th class="text-center " title="Nota del periodo <?php echo $periodo; ?>">PROMEDIO</th>
        </tr>
        
      <!-- </thead> -->
      <!-- Cuerpo de la tabla -->
      <tbody>
        <!-- Pedimos la ayuda a otro archivo ya construido para los tr de las materias -->
        <?php  include 'Notas1Salud/include/6.trDeMaterias.php';  ?>
        
        <tr>
          <th colspan="9" > COMPETENCIAS ESPECÍFICAS DEL ÁREA TÉCNICA</th>
        </tr>
   
        <!-- Pedimos la ayuda a otro archivo ya construido para los tr de los modulos de salud -->
        <tr>
          <th class="text-center" >MODULOS  DE ATENCIÓN PRIMARIA EN SALUD</th>
          <th class="text-center" title="Actividad 1 periodo <?php echo $periodo; ?>">ACT 1</th>
          <th class="text-center" title="Actividad 2 periodo <?php echo $periodo; ?>">ACT 2</th>
          <th class="text-center" title="Actividad 3 periodo <?php echo $periodo; ?>">ACT 3</th>
          <th class="text-center" title="Actividad 4 periodo <?php echo $periodo; ?>">ACT 4</th>
          <th class="text-center" title="Actividad 5 periodo <?php echo $periodo; ?>">EXAMEN</th>
          <th class="text-center" title="Nota de Recuperacion">NR</th>
          <th class="text-center" title="Nota del periodo <?php echo $periodo; ?>">PROMEDIO</th>
        </tr>
        <?php  include 'NotasBtoSalud/7.trDeModulos.php' ?>


        <tr>
          <th colspan="9" > ASPECTOS DE CONDUCTA</th>
        </tr>
        <!-- Pedimos la ayuda a otro archivo ya construido para los tr de las conducta -->
        <?php   include'NotasBtoSalud/8.trConducta.php'; ?>

        

        <!-- tr para la informacion del pie de pagina -->
        <tr>
           <th class="text-center" colspan="3">
            <br><!-- salto de linea -->
             F:________________ <br><!-- salto de linea -->
             <p>
               <?php echo $Orientador; #utf8_encode () ?> 
             </p>
             <br><!-- salto de linea -->ORIENTADOR
           </th>
           <th class="text-center" colspan="3">
            <br><!-- salto de linea -->
             F:________________ <br><!-- salto de linea -->
             <p>
               <?php echo $director; ?> 
             </p>
             <br><!-- salto de linea -->DIRECTOR
           </th>
           <th class="text-center" colspan="3">
            <br><!-- salto de linea -->
             F:________________ <br><!-- salto de linea -->
             <p>
               <?php echo $Aencargado; #utf8_encode () ?> 
             </p>
             <br><!-- salto de linea -->FIRMA DEL ENCARGADO
           </th>
        </tr>
        
      </tbody><!--/ Cuerpo de la tabla -->

      <!-- <tfoot> -->
        <!-- No lo Utilizo porque repito algunos tr de las materias -->
      <!-- </tfoot> -->


    </table><!--/ tabla con todos los datos -->
  </div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->
  <div class="py-5"></div><!--/ div para separado de 5px -->

