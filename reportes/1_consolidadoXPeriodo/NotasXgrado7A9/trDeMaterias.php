<!-- trs de todas  las materias  16 -->
<!-- LENGUAJE   1                 -->
<?php if($Lnota1 >= 0){ ?>
                  <tr>
                    <!-- materia -->
                       <td><?php echo utf8_encode($Lleng); ?></td>
                    <!-- periodo 1 -->
                    <td><?php echo $Lnota1; ?></td>
                    <td><?php echo $Lnota2; ?></td>
                    <td><?php echo $Lnota3; ?></td>
                    <td><?php echo $Lnota4; ?></td>
                    <td><?php echo $Lnota5; ?></td>
                    <td><?php echo $LnotaRecu; ?></td>
                     <td><?php echo $LPROMEDIO; ?></td>
                    <!-- fin periodo 1 -->

                 
                  </tr>

                  <?php } ?>
<!-- MATEMATICAS 2                -->
<?php if($Mnota1 >= 0){ ?>
                  <tr>
                     <!-- materia -->
                       <td><?php echo utf8_encode($Matematicas); ?></td>
                    <!-- periodo 1 -->
                    <td><?php echo $Mnota1; ?></td>
                    <td><?php echo $Mnota2; ?></td>
                    <td><?php echo $Mnota3; ?></td>
                    <td><?php echo $Mnota4; ?></td>
                    <td><?php echo $Mnota5; ?></td>
                    <td><?php echo $MnotaRecu; ?></td>
                     <td><?php echo $MPROMEDIO; ?></td>
                    <!-- fin periodo 1 -->

                 
                  </tr>
                  <?php } ?>
<!-- CIENCIAS FISICAS 3           -->                   
<?php if($CFnota1 >= 0){ ?>
                  <tr>
                     <!-- materia -->
                       <td><?php echo $CienciasFisicas; ?></td>
                    <!-- periodo 1 -->
                    <td><?php echo $CFnota1; ?></td>
                    <td><?php echo $CFnota2; ?></td>
                    <td><?php echo $CFnota3; ?></td>
                    <td><?php echo $CFnota4; ?></td>
                    <td><?php echo $CFnota5; ?></td>
                    <td><?php echo $CFnotaRecu; ?></td>
                     <td><?php echo $CFPROMEDIO; ?></td>
                    <!-- fin periodo 1 -->

                 
                  </tr>
                  <?php } ?>
<!-- ESTUDIOS SOCIALES 4          -->                  
<?php if($Socnota1 >= 0){ ?>
                 <tr>

                     <!-- materia -->
                       <td><?php echo utf8_encode($Sociales); ?></td>
                    <!-- periodo 1 -->
                    <td><?php echo $Socnota1; ?></td>
                    <td><?php echo $Socnota2; ?></td>
                    <td><?php echo $Socnota3; ?></td>
                    <td><?php echo $Socnota4; ?></td>
                    <td><?php echo $Socnota5; ?></td>
                    <td><?php echo $SocnotaRecu; ?></td>
                     <td><?php echo $SocPROMEDIO; ?></td>
                    <!-- fin periodo 1 -->

                 
                  </tr>
                  <?php } ?>

<!-- EDUCACION FISICA  6          -->                  
<?php  if($Edunota1 >= 0) { ?>
                  <tr>

                     <!-- materia -->
                       <td><?php echo utf8_encode($EducacionFisica); ?></td>
                    <!-- periodo 1 -->
                    <td><?php echo $Edunota1; ?></td>
                    <td><?php echo $Edunota2; ?></td>
                    <td><?php echo $Edunota3; ?></td>
                    <td><?php echo $Edunota4; ?></td>
                    <td><?php echo $Edunota5; ?></td>
                    <td><?php echo $EdunotaRecu; ?></td>
                     <td><?php echo $EduPROMEDIO; ?></td>
                    <!-- fin periodo 1 -->

                 
                  </tr>
                  <?php } ?>
<!-- INFORMATICA     7            -->                  
<?php if($Infonota1 >= 0) { ?>
                  <tr>

                     <!-- materia -->
                       <td><?php echo utf8_encode($Informatica); ?></td>
                    <!-- periodo 1 -->
                    <td><?php echo $Infonota1; ?></td>
                    <td><?php echo $Infonota2; ?></td>
                    <td><?php echo $Infonota3; ?></td>
                    <td><?php echo $Infonota4; ?></td>
                    <td><?php echo $Infonota5; ?></td>
                    <td><?php echo $InfonotaRecu; ?></td>
                     <td><?php echo $InforPROMEDIO; ?></td>
                    <!-- fin periodo 1 -->

                 
                  </tr>
                  <?php } ?>
<!-- INGLES          8            -->                  
<?php if($Ingnota1 >= 0){ ?>
                  <tr>
                     <!-- materia -->
                       <td><?php echo utf8_encode($Ingles); ?></td>
                    <!-- periodo 1 -->
                    <td><?php echo $Ingnota1; ?></td>
                    <td><?php echo $Ingnota2; ?></td>
                    <td><?php echo $Ingnota3; ?></td>
                    <td><?php echo $Ingnota4; ?></td>
                    <td><?php echo $Ingnota5; ?></td>
                    <td><?php echo $IngnotaRecu; ?></td>
                     <td><?php echo $IngPROMEDIO; ?></td>
                    <!-- fin periodo 1 -->

                 
                  </tr>
                  <?php } ?>




<!-- FORMACION CRISTIANA 13   -->                  
<?php if($Forcrisnota1 >= 0){ ?>
                  <tr>
                     <!-- materia -->
                       <td><?php echo utf8_encode($FormacionCristiana); ?></td>
                    <!-- periodo 1 -->
                    <td><?php echo $Forcrisnota1; ?></td>
                    <td><?php echo $Forcrisnota2; ?></td>
                    <td><?php echo $Forcrisnota3; ?></td>
                    <td><?php echo $Forcrisnota4; ?></td>
                    <td><?php echo $Forcrisnota5; ?></td>
                    <td><?php echo $ForcrisnotaRecu; ?></td>
                     <td><?php echo $ForcrisPROMEDIO; ?></td>
                    <!-- fin periodo 1 -->

                 
                  </tr>
                  <?php } ?>




<!-- # Artistica 18                    --> 
<!-- <?php //if($Artnota1 >= 0){ ?> -->
                  <!-- <tr> -->
                     <!-- materia -->
                       <!-- <td><?php #echo $Artistica; ?></td> -->
                    <!-- periodo 1 --><!-- 
                    <td><?php #echo $Artnota1; ?></td>
                    <td><?php #echo $Artnota2; ?></td>
                    <td><?php #echo $Artnota3; ?></td>
                    <td><?php #echo $Artnota4; ?></td>
                    <td><?php #echo $Artnota5; ?></td>
                    <td><?php #echo $ArtnotaRecu; ?></td>
                     <td><?php #echo $ArtPROMEDIO; ?></td> -->
                    <!-- fin periodo 1 -->

                 
                  <!-- </tr> -->
                  <?php //} ?>

