<?php 
/*calificacion en la db*/$calific1='9.1';/* -->TEXTOS A RESPLAZAR--> */$EX = 'EXCELENTE';  
/*calificacion en la db*/$calific2='7.8';/* -->TEXTOS A RESPLAZAR--> */$MB = 'MUY BUENO';    
/*calificacion en la db*/$calific3='5.6';/* -->TEXTOS A RESPLAZAR--> */$BN = 'BUENO';       
// Sustituyendo los numeros por textos
#CONDICIONALES PARA SUSTITUIR LAS NOTAS POR TEXTOS
// ------------------------------------------
/* ACTIVIDAD 1 */ if ($cta1==$calific1){ $cta1=$EX; }elseif ($cta1==$calific2){ $cta1=$MB; }elseif ($cta1==$calific3) { $cta1=$BN; }
// ---------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------------------------
/* ACTIVIDAD 2 */ if ($cta2==$calific1){ $cta2=$EX; }elseif ($cta2==$calific2){ $cta2=$MB; }elseif ($cta2==$calific3) { $cta2=$BN; }
// ---------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------------------------
/* ACTIVIDAD 3 */ if ($cta3==$calific1){ $cta3=$EX; }elseif ($cta3==$calific2){ $cta3=$MB; }elseif ($cta3==$calific3) { $cta3=$BN; }
// ---------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------------------------
/* ACTIVIDAD 4 */ if ($cta4==$calific1){ $cta4=$EX; }elseif ($cta4==$calific2){ $cta4=$MB; }elseif ($cta4==$calific3) { $cta4=$BN; }
// ---------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------------------------
/* ACTIVIDAD 5 */ if ($cta5==$calific1){ $cta5=$EX; }elseif ($cta5==$calific2){ $cta5=$MB; }elseif ($cta5==$calific3) { $cta5=$BN; }
// ---------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------------------------
/* ACTIVIDAD 6 */ if ($cta6==$calific1){ $cta6=$EX; }elseif ($cta6==$calific2){ $cta6=$MB; }elseif ($cta6==$calific3) { $cta6=$BN; }

 ?>




<!-- aqui se imprimen las variables ya con los tentos correspondientes  -->
                  <tr>
                    <th colspan="2">ASPECTOS DE CONDUCTA</th>
                    <th colspan="2">PERIODO <?php echo $periodo; ?></th>  
                    <th colspan="4" rowspan="">OBSERVACIONES DEL PERIODO</th>
                    
                  </tr>

                  <tr>
                    <td colspan="2">EVIDENCIA ACTITUDES FAVORABLES PARA LACONVIVENCIA</td>
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
                    <td colspan="2" rowspan="2"><?php /*falta realizar la consulta para dicha variable*/ echo '0'; #echo $inasistencia;   ?></td>
                  </tr>

                  <tr>
                    <th colspan="2">CONDUCTA:</th>
                    <td colspan="2"><?php echo $cta6; ?></td>
                   

                  </tr>