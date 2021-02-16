<!-- respetar espacios saltos de lineas e incluso los comentarios podrian dar margen de error
 -->
 <!-- <meta charset="utf-8"> -->
<?php



 
if($grado==0){
?>
<script >
                      /* Alerta para envio error*/
Swal.fire({
                       icon:'info',
                       title:'Error 404',
                         html: '<h4>Error: Selecciona un grado </h4>',
                          grow: 'fullscreen',
                       footer: 'Debes seleccionar  un grado.'
                   });

</script>
<?php
  }  

 ?>





  <?php
  /* Connexion a la base de datos*/ 
  include '../../config/conexionPDOcontacto.php'; 

// consulta con pdo





?>



<!-- <button type="submit" class="btn text-center  btn-lg btn-secondary col-md-12" > Imprimir <i class="fa fa-print"></i></button>  -->
<button type="button" class="btn text-center  btn-lg btn-secondary col-md-3" onclick="inprimir()" > Imprimir <i class="fa fa-print"></i></button> 

           
          
              
            

<?php
      
       include 'consultaSQLNotasXgrado.php'; 
# El bucle foreach persolaiza la consulta $query_Consultas a el objeto $tds 
 foreach ($query_Consultas as $tds)

  #Apertura del bucle foreach
{ 
?>

     
<div class="table-responsive" id="idTablaprint">


<div class="py-5 " >

<!-- incluyo las variables adjudicadas -->
<?php   include 'consultaNotasXgrado.php'; 

 ?>

              <table class="table table-striped table-bordered  table-condensed   text-black  table-hover text-center">


                <thead><tr>
                  <th colspan="2" rowspan="2"><img  width="180px" height="200px" src="../files/img/logo.jpg"></td></th>
                    <th colspan="8">BOLETA DE NOTAS POR ALUMNO  COMPLEJO EDUCATIVO CATOLICO "NUESTRA SEÑORA DE LAS GRACIAS" </th>
  
                    <!-- rowspan="2" -->
                   
                </tr>

<tr>
   <th colspan="4">AÑO ESCOLAR: 2020</th>
   <th colspan="4">OPCION: <?php echo $opcion1; ?> </th>
</tr>

                  <tr class="info">
                    
                    <th class="text-center" rowspan="2"><img  width="90px" height="100px" src="../files/alumnos/<?php echo $Afoto;  ?>"></td></th>
                     
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
     
                 
<!-- Pedimos la ayuda a otro archivo lla construido -->
<?php  include 'trDeMaterias.php';  ?>




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
                    <td colspan="2" rowspan="2">11</td>
                  </tr>

                  <tr>
                    <th colspan="2">CONDUCTA:</th>
                    <td colspan="2"><?php echo $cta6; ?></td>
                   

                  </tr>
                  <tr>
                    <th class="text-center" colspan="3">F:________________ <br><p><?php echo $Orientador; ?> </p><br>ORIENTADOR</th>
                    <th class="text-center" colspan="3">F:________________ <br><p>RICARDO ULISES PÉREZ ALFARO</p><br>DIRECTOR</th>
                    <th class="text-center" colspan="3">F:________________ <br><p><?php echo $Aencargado; ?></p><br>FIRMA DEL ENCARGADO</th>


                  </tr>

                
                </tbody>


                <!-- <tfoot>
                 
                   
                </tfoot> -->    
                
              </table>

            </div>







</div>


<?php 

#Cierre del bucle foreach
 } 
  ?>






<script >
                      /* Alerta para envio Exitoso*/
// Swal.fire({
//                        icon:'success',
//                        title:'Consulta exitosa.',
//                          html: '<p>Nota: baja un poco para ver los resultados. </p>',
//                           grow: 'fullscreen',
//                        footer: 'Para imprimir los resultados pulsa el boton Imprimir'
//                    });

</script>





           