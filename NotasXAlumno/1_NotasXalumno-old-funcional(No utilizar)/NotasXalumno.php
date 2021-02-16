<!-- respetar espacios saltos de lineas e incluso los comentarios podrian dar margen de error
 -->
 <!-- <meta charset="utf-8"> -->
<?php

include 'vYv.php';
?>







  <?php
  /* Connexion a la base de datos*/ 
  include '../../config/conexionPDOcontacto.php'; 

// consulta con mysql_query
 include 'consulta_Alumno.php'; 




?>


<!-- <button type="submit" class="btn text-center  btn-lg btn-secondary col-md-12" > Imprimir <i class="fa fa-print"></i></button>  -->
<button type="button" class="btn text-center  btn-lg btn-secondary col-md-3" onclick="inprimir()" > Imprimir <i class="fa fa-print"></i></button> 

<?php if ($periodo==0) {
  $varSeleccion = "periodo";
  include '../reportes/error404.php'; 
}elseif ($alumno==0){
    $varSeleccion = "Alumno";
    include '../reportes/error404.php'; 
} 
?>           
          
              
            

     
<div class="table-responsive" id="idTablaprint">


<div class="py-5 " >



              <table class="table table-striped table-bordered  table-condensed   text-black  table-hover text-center">


                <thead><tr>
                  <th colspan="2" rowspan="2"><img  width="180px" height="200px" src="../files/img/onuva.jpg"></td></th>
                    <th colspan="8">BOLETA DE NOTAS POR ALUMNO  COMPLEJO EDUCATIVO <?php echo $NombreIns; ?></th>
  
                    <!-- rowspan="2" -->
                   
                </tr>

<tr>
   <th colspan="4">AÑO ESCOLAR: 2020</th>
   <th colspan="4">OPCION: <?php echo $opcion1; ?> </th>
</tr>

                  <tr class="info">
                    
                    <th class="text-center" rowspan="2"><img  width="180px" height="200px" src="../files/alumnos/<?php echo $Afoto;  ?>"></td></th>
                     
                    <th>NIE</th>
                  
                    <th class="text-center" >NOMBRE</th>
                    <th class="text-center" >APELLIDO</th>
                    <th class="text-center" colspan="2">GRADO</th>
                    <th class="text-center" >SECCION</th>
                    <th class="text-center"   >PERIODO</th>

                  </tr>
                  <tr class="info">

                    
                    

                        <!-- info personal -->
                    <td class="text-center" ><?php echo $Anie; ?></td>
                    <td class="text-center" ><?php echo $Anombre; ?></td>
                    <td class="text-center" ><?php echo $Aapellido; ?></td>
                    <td class="text-center" colspan="2"> <?php echo utf8_encode($Agrado); ?></td>
                    <td class="text-center" > <?php echo $Aseccion; ?> </td>
                    <td class="text-center" colspan="2"  ><?php echo $periodo; ?></td>
                    
                        <!-- info personal -->

                  
                 
                  </tr>
                  <tr>
                      <th class="text-center" >ASIGNATURAS</th>
                    <th class="text-center" title="Actividad 1 periodo 1">ACT 1</th>
                    <th class="text-center" title="Actividad 2 periodo 1">ACT 2</th>
                    <th class="text-center" title="Actividad 3 periodo 1">ACT 3</th>
                    <th class="text-center" title="Actividad 4 periodo 1">ACT 4</th>
                    <th class="text-center" title="Actividad 5 periodo 1">EXAMEN</th>
                     <th class="text-center" title="Nota de Recuperacion">NR</th>
                     <th class="text-center" title="Nota de periodo ">PROMEDIO</th>
                  </tr>
                </thead>

        <tbody>
     
                 
<!-- aqui van todos los tr de las materias -->
<?php  include 'BoletaAlumno/trDeMaterias.php';  ?>




                  <tr>
                    <th colspan="2">ASPECTOS DE CONDUCTA</th>
                      <th colspan="2">PERIODO <?php echo $periodo; ?></th>  
                      <th colspan="4" rowspan="">OBSERVACIONES DEL PERIODO</th>
                    
                  </tr>

                  <tr>
                    <td colspan="2">
                    EVIDENCIA ACTITUDES FAVORABLES PARA LACONVIVENCIA</td>
                    <td colspan="2"><?php echo $cta1; ?></td>
                    <td colspan="4" rowspan="4"></td>
                    
                  </tr>

                  <tr>
                    <td colspan="2">ACEPTA Y VALORA LA DIVERSIDAD</td>
                    <td colspan="2"><?php echo $cta2; ?></td>
                  </tr>

                  <tr>
                    <td colspan="2">TOMA DECISIONES DE FORMA AUTÓNOMA Y RESPONSABLE</td>
                    <td colspan="2"><?php echo $cta3; ?></td>
                  </tr>

                  <tr>
                    <td colspan="2">SE EXPRESA Y PARTICIPA CON RESPETO</td>
                    <td colspan="2"><?php echo $cta4; ?></td>
                  </tr>

                  <tr>
                    <td colspan="2">MUESTRA SENTIDO DE PERTINENCIA Y RESPETO POR NUESTRA CULTURA</td>
                    <td colspan="2"><?php echo $cta5; ?></td>
                     <th colspan="2" rowspan="2">INASISTENCIA:</th>
                    <td colspan="2" rowspan="2">0</td>
                  </tr>

                  <tr>
                    <th colspan="2">CONDUCTA:</th>
                    <td colspan="2"><?php echo $cta6; ?></td>
                   

                  </tr>
                  <tr>
                    <th class="text-center" colspan="3">F:________________ <br><p><?php echo $Orientador; ?> </p><br>ORIENTADOR</th>
                    <th class="text-center" colspan="3">F:________________ <br><p><?php echo $director; ?></p><br>DIRECTOR</th>
                    <th class="text-center" colspan="3">F:________________ <br><p><?php echo $Aencargado; ?></p><br>FIRMA DEL ENCARGADO</th>


                  </tr>

                
                </tbody>


                <!-- <tfoot>
                 
                   
                </tfoot> -->    
                
              </table>

            </div>







</div>












           