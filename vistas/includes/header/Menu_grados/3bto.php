
   <?php 
              
              if(!empty($_SESSION['3bto'])==1)
             {
              ?>
        


<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-archive"></i>
              <p>
                <!-- Apartado para el Administrador -->
                3_bto Contador
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

 <?php 
              
              if(!empty($_SESSION['conducta'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="C3bto.php" class="nav-link">
                  <i class="fas  fa fa-bullhorn nav-icon"></i>
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
                <a href="3bto1len.php" class="nav-link">
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
                <a href="3bto2mate.php" class="nav-link">
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
                <a href="3bto3cifi.php" class="nav-link">
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
                <a href="3bto4estso.php" class="nav-link">
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
                <a href="3bto8ingles.php" class="nav-link">
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
                <a href="3bto6edufis.php" class="nav-link">
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
                <a href="3bto7infor.php" class="nav-link">
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
                <a href="3bto5semi.php" class="nav-link">
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
                <a href="3bto9tecno.php" class="nav-link">
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
                <a href="3bto10quiybio.php" class="nav-link">
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
                <a href="3bto11opv.php" class="nav-link">
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
                <a href="3bto11opv.php" class="nav-link">
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
                <a href="3bto13forcris.php" class="nav-link">
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
                <a href="3bto17MoralYUrCi.php" class="nav-link">
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
                <a href="3bto14presu.php" class="nav-link">
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
                <a href="3bto15comer.php" class="nav-link">
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
                <a href="3bto16contacos.php" class="nav-link">
                  <i class="fas  fa   fa-usd nav-icon"></i>
                  <p>Contabilidad de costos</p>
                </a>
              </li>
<?php } ?> 


<?php 
              
              if(!empty($_SESSION['PRACTICA_PROFECIONAL'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="3bto45PractProf.php" class="nav-link">
                  <i class="fas  fa    fa-thumb-tack nav-icon"></i>
                  <p>Practica Profesional</p>
                </a>
              </li>
<?php } ?> 


            
            </ul>
          </li>




            
            </ul>
          </li>

<?php   }    ?>




