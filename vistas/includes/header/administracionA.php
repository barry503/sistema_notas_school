        <?php 
              
              if(!empty($_SESSION['administracionA'])==1)
             {
              ?>


<li class="nav-item has-treeview">
            <a href="#" class="nav-link" title="puedes ver las asistencias y el listado de todos los alumnos">
              <!-- <span class="badge badge-info ">4</span> -->
              <i class="nav-icon fas  fa-asterisk "></i>
              <p >
                 Gestionar <br> Informacion<!-- Gestion de Tablas --><!--Tablas vistas --> 
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">

             <li class="nav-item">
                <a href="../asistencia-diaria/index.php" class="nav-link" title="Puedes ver el recuento de los alumnos en un dia especifico">
                  <i class="fas  fa-check nav-icon"></i>
                  <p>Asistencias de hoy</p>
                </a>
              </li>



              <!-- aqui va alumnos -->
             <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fas fa-users nav-icon"></i>
                  <p>
                    Alumnos 
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">


                 
              

                 
                  <li class="nav-item">
                <a href="vistaAlumnos.php" class="nav-link" title="ver todos los alumnos">
                  <i class="far fa  fa-list-alt nav-icon"></i>
                  <p>Ver listado</p>
                </a>
              </li>


                 </ul>
                
              </li>

              

                <li class="nav-item">
                <a href="vistaAsistencias.php" class="nav-link">
                  <i class="fas  fa-check-square nav-icon"></i>
                  <p>Asistencias</p>
                </a>
              </li>

              
            
            <!-- aqui van todas las tablas -->
                            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa fa-table nav-icon"></i>
                  <p>
                    tablas 
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                

                <ul class="nav nav-treeview">



                 <li class="nav-item">
                <a href="vistaGrado.php" class="nav-link">
                  <i class="fas  fa-sitemap  nav-icon"></i>
                  <p>Grados</p>
                </a>
              </li>

                </ul>




                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                <a href="vistaDocentes.php" class="nav-link">
                  <i class="fas fa-suitcase nav-icon"></i>
                  <p>Docentes</p>
                </a>
              </li> 



                 </ul>





                  <ul class="nav nav-treeview">
                    
                <li class="nav-item">
                <a href="vistaTurno.php" class="nav-link">
                  <i class="fas fa-clock nav-icon"></i>
                  <p>Turnos</p>
                </a>
                </li>



                  </ul>



                 <ul class="nav nav-treeview">


                  <li class="nav-item">
                <a href="vistaSexo.php" class="nav-link">
                  <i class="fas fa-female "></i>
                  <i class="fas fa-male "></i>
                  <p>Sexos</p>

                </a>
              </li> 
                 
                </ul>




              </li>
           



            </ul>
          </li> 

<?php   }    ?>