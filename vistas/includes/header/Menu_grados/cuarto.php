
   <?php 
              
              if(!empty($_SESSION['cuarto'])==1)
             {
              ?>
        


<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-archive"></i>
              <p>
                <!-- Apartado para el Administrador -->
                4_ cuarto
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


 <?php 
              
              if(!empty($_SESSION['conducta'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="C4_.php" class="nav-link">
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
                <a href="4_1len.php" class="nav-link">
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
                <a href="4_2mate.php" class="nav-link">
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
                <a href="4_3cifi.php" class="nav-link">
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
                <a href="4_4estso.php" class="nav-link">
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
                <a href="4_8ingles.php" class="nav-link">
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
                <a href="4_6edufis.php" class="nav-link">
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
                <a href="4_7infor.php" class="nav-link">
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
              
              if(!empty($_SESSION['ARTISTICA'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="4_44eduArtis.php" class="nav-link">
                  <i class="fas fa   fa-rocket nav-icon"></i>
                  <p>Artistica</p>
                </a>
              </li>
<?php } ?> 



 <?php 
              
              if(!empty($_SESSION['SEMINARIO'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="4_5semi.php" class="nav-link">
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
                <a href="4_9tecno.php" class="nav-link">
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
                <a href="4_10quiybio.php" class="nav-link">
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
                <a href="4_11opv.php" class="nav-link">
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
                <a href="4_11opv.php" class="nav-link">
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
                <a href="4_13forcris.php" class="nav-link">
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
                <a href="4_17MoralYUrCi.php" class="nav-link">
                  <i class="fas    fa-fire nav-icon"></i>
                  <p>Moral Urbanidad y  Civica</p>
                </a>
              </li>
<?php } ?> 






<?php 
              
              if(!empty($_SESSION['PRESUPUESTO'])==1)
             {
              ?>
 <li class="nav-item">
                <a href="4_14presu.php" class="nav-link">
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
                <a href="4_15comer.php" class="nav-link">
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
                <a href="4_16contacos.php" class="nav-link">
                  <i class="fas  fa   fa-usd nav-icon"></i>
                  <p>Contabilidad de costos</p>
                </a>
              </li>
<?php } ?> 




            
            </ul>
          </li>




            
            </ul>
          </li>

<?php   }    ?>




