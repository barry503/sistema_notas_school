
   <?php 
              
              if(!empty($_SESSION['2salud'])==1)
             {
              ?>
        


<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-archive"></i>
              <p>
                <!-- Apartado para el Administrador -->
                2_ bto salud 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


 <?php 
              
              if(!empty($_SESSION['conducta'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="C2salud.php" class="nav-link">
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
                <a href="2salud1len.php" class="nav-link">
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
                <a href="2salud2mate.php" class="nav-link">
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
                <a href="2salud3cifi.php" class="nav-link">
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
                <a href="2salud4estso.php" class="nav-link">
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
                <a href="2salud8ingles.php" class="nav-link">
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
                <a href="2salud6edufis.php" class="nav-link">
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
                <a href="2salud7infor.php" class="nav-link">
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
                <a href="2salud5semi.php" class="nav-link">
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
                <a href="2salud9tecno.php" class="nav-link">
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
                <a href="2salud10quiybio.php" class="nav-link">
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
                <a href="2salud11opv.php" class="nav-link">
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
                <a href="2salud11opv.php" class="nav-link">
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
                <a href="2salud13forcris.php" class="nav-link">
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
                <a href="2salud17MoralYUrCi.php" class="nav-link">
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
                <a href="2salud14presu.php" class="nav-link">
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
                <a href="2salud15comer.php" class="nav-link">
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
                <a href="2salud16contacos.php" class="nav-link">
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
                <a href="2_S1_modulo.php" class="nav-link" title="APLICACIÓN DE TÉCNICAS DE MERCADEO SOCIAL EN SALUD">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 1</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="2_S2_modulo.php" class="nav-link" title="ATENCIÓN BÁSICA EN PRIMEROS AUXILIOS">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 2</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="2_S3_modulo.php" class="nav-link" title="PROMOCIÓN DE LA SALUD AMBIENTAL">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 3</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="2_S4_modulo.php" class="nav-link" title="GESTIÓN BÁSICA DE ATENCIÓN DE DESASTRES">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 4</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="2_S5_modulo.php" class="nav-link" title="ASISTENCIA ADMINISTRATIVA EN SERVICIOS DE SALUD">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 5</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="2_S6_modulo.php" class="nav-link" title="APLICACIÓN DE TERMINOLOGÍA EN INGLÉS RELACIONADA CON LA SALUD COMUNITARIA">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 6</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="2_S7_modulo.php" class="nav-link" title="DISEÑO DE PLANES DE NEGOCIO EN ASOCIATIVIDAD COOPERATIVA.">
                  <i class="fas  fa    fa-medkit nav-icon"></i>
                  <p>Modulo 7</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="2_S8_modulo.php" class="nav-link" title="PROYECTO DE EDUCACIÓN EN ESTILOS DE VIDA SALUDABLES">
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




