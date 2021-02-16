
   <?php 
              
              if(!empty($_SESSION['3salud'])==1)
             {
              ?>
        


<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-archive"></i>
              <p>
                <!-- Apartado para el Administrador -->
                3_ bto salud 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


 <?php 
              
              if(!empty($_SESSION['conducta'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="C3salud.php" class="nav-link">
                  <i class="fas  fa  fa-bullhorn nav-icon"></i>
                  <p>Conducta</p>
                </a>
              </li>
<?php } ?>




<!-- materias basicas -->
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-book"></i>
              <p>
 
                Materias basicas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              
 <?php 
              
              if(!empty($_SESSION['LENGUAJE'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud1len.php" class="nav-link">
                  <i class="fas  fa  fa-tint nav-icon"></i>
                  <p>Lenguaje</p>
                </a>
              </li>
<?php } ?>

 <?php 
              
              if(!empty($_SESSION['MATEMATICAS'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud2mate.php" class="nav-link">
                  <i class="fas   fa-lightbulb-o nav-icon"></i>
                  <p>Matematicas</p>
                </a>
              </li>

<?php } ?>

 <?php 
              
              if(!empty($_SESSION['CIENCIAS_FÍSICAS'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud3cifi.php" class="nav-link">
                  <i class="fas   fa-flask nav-icon"></i>
                  <p>Ciencias fisicas</p>
                </a>
              </li>
<?php } ?>


 <?php 
              
              if(!empty($_SESSION['ESTUDIOS_SOCIALES'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud4estso.php" class="nav-link">
                  <i class="fas    fa-search-plus nav-icon"></i>
                  <p>Estudios Sociales</p>
                </a>
              </li>
<?php } ?>              


            

 <?php 
              
              if(!empty($_SESSION['INGLES'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud8ingles.php" class="nav-link">
                  <i class="fas   fa-certificate nav-icon"></i>
                  <p>Ingles</p>
                </a>
              </li>
<?php } ?> 


 <?php 
              
              if(!empty($_SESSION['EDUCACION_FISICA'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud6edufis.php" class="nav-link">
                  <i class="fas   fa-flag-checkered  nav-icon"></i>
                  <p>Educacion Fisica</p>
                </a>
              </li>
<?php } ?> 



 <?php 
              
              if(!empty($_SESSION['INFORMATICA'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud7infor.php" class="nav-link">
                  <i class="fas    fa-keyboard-o nav-icon"></i>
                  <p>Informatica</p>
                </a>
              </li>
<?php } ?> 




            
            </ul>
          </li>

<!-- materias Asignaturas  -->
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-book"></i>
              <p>

                Otras Materias 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

  


 <?php 
              
              if(!empty($_SESSION['SEMINARIO'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud5semi.php" class="nav-link">
                  <i class="fas fa  fa-file-text-o nav-icon"></i>
                  <p>Seminario</p>
                </a>
              </li>
<?php } ?> 





 <?php 
              
              if(!empty($_SESSION['TECNOLOGIA'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud9tecno.php" class="nav-link">
                  <i class="fas    fa-dot-circle-o nav-icon"></i>
                  <p>Tecnologia</p>
                </a>
              </li>
<?php } ?> 




 <?php 
              
              if(!empty($_SESSION['QUÍMICA_Y_BIOLOGÍA'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud10quiybio.php" class="nav-link">
                  <i class="fas fa  fa-pagelines nav-icon"></i>
                  <p>Quimica y biologia</p>
                </a>
              </li>
<?php } ?> 




 <?php 
              
              if(!empty($_SESSION['ORIENTACION_PARA_LA_VIDA'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud11opv.php" class="nav-link">
                  <i class="fas    fa-road nav-icon"></i>
                  <p>Orientacion para<br> la vida</p>
                </a>
              </li>
<?php } ?> 



 <?php 
              
              if(!empty($_SESSION['LABORATORIO_DE_CREATIVIDAD'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud11opv.php" class="nav-link">
                  <i class="fas   fa-magic nav-icon"></i>
                  <p>Laboratorio de <br> Creatividad</p>
                </a>
              </li>
<?php } ?> 






<?php 
              
              if(!empty($_SESSION['FORMACION_CRISTIANA'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud13forcris.php" class="nav-link">
                  <i class="fas    fa-fire nav-icon"></i>
                  <p>Formacion cristiana</p>
                </a>
              </li>
<?php } ?> 



<?php 
              
              if(!empty($_SESSION['MORAL_URBANIDAD_Y_CIVICA'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud17MoralYUrCi.php" class="nav-link">
                  <i class="fas    fa-fire nav-icon"></i>
                  <p>Moral Urbanidad <br> y  Civica</p>
                </a>
              </li>
<?php } ?> 






<?php 
              
              if(!empty($_SESSION['PRESUPUESTO'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud14presu.php" class="nav-link">
                  <i class="fas  fa  fa-money nav-icon"></i>
                  <p>Presupuesto</p>
                </a>
              </li>
<?php } ?> 


<?php 
              
              if(!empty($_SESSION['COMERCIALIZACION'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud15comer.php" class="nav-link">
                  <i class="fas  fa  fa-compass nav-icon"></i>
                  <p>Comercializacion</p>
                </a>
              </li>
<?php } ?> 




<?php 
              
              if(!empty($_SESSION['CONTABILIDAD_DE_COSTO'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3salud16contacos.php" class="nav-link">
                  <i class="fas  fa   fa-usd nav-icon"></i>
                  <p>Contabilidad de costos</p>
                </a>
              </li>
<?php } ?> 




            
            </ul>
          </li>


<!-- MODULOS_SALUD -->
<!-- Modulos de salud ------------------------------------------------------------------------------------------------------>
<?php if(!empty($_SESSION['MODULOS_SALUD'])==1): ?>

 <li class="nav-item has-treeview">
            <a href="#" class="nav-link" title="Modulos del bachillerato salud">
              <i class="nav-icon fas fa  fa-stethoscope "></i>
              <p>
                
                 Modulos Salud
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">



              <li class="nav-item">
                <a href="3_S1_modulo.php" class="nav-link" title="ATENCIÓN PRIMARIA EN SALUD A LA NIÑEZ">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 1</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="3_S2_modulo.php" class="nav-link" title="ATENCIÓN PRIMARIA EN SEXUALIDAD Y AFECTIVIDAD">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 2</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="3_S3_modulo.php" class="nav-link" title="ATENCIÓN PRIMARIA EN SALUD AL ADULTO MAYOR">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 3</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="3_S4_modulo.php" class="nav-link" title="INTERVENCIONES BÁSICAS EN SALUD MENTAL">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 4</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="3_S5_modulo.php" class="nav-link" title="SEGUIMIENTO A LAS CONDICIONES DE SALUD Y SEGURIDAD OCUPACIONAL">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 5</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="3_S6_modulo.php" class="nav-link" title="APLICACIÓN DE TERMINOLOGÍA EN INGLÉS RELACIONADA CON LA ASISTENCIA CLÍNICA">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 6</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="3_S7_modulo.php" class="nav-link" title="PUESTA EN MARCHA DE LA MICROEMPRESA EN ASOCIATIVIDAD COOPERATIVA">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 7</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="3_S8_modulo.php" class="nav-link" title="PROYECTO DE ACCIÓN PARTICIPATIVA EN SEXUALIDAD Y AFECTIVIDAD SALUDABLE">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 8</p>
                </a>
              </li>

                 
                 
            </ul>
</li>
  
<?php endif ?>
<!--/ Modulos de salud ------------------------------------------------------------------------------------------------------>





            
            </ul>
          </li>

<?php   }    ?>




