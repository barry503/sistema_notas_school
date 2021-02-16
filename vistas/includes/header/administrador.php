<?php 
              if(!empty($_SESSION['administrador'])==1)
             {
               ?>

<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                <!-- Apartado para el Administrador -->
                Administracion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
 



<!-- Gestionar los usuarios y Permisos -->
 <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far  fas fa-gear   nav-icon"></i>
                  <p>
                    Gestionar usuarios
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">


                 <li class="nav-item">
                <a href="editUsuario.php" class="nav-link">
                  <i class="fa fa-smile nav-icon"></i>
                  <p>editar Usuarios</p>
                  <i class="fas fa-pencil-alt"></i>
                </a>
              </li>

              <li class="nav-item">
                <a href="editUsuarios_Permiso.php" class="nav-link">
                  <i class="fa fa-smile nav-icon"></i>
                  <p>editar  Permisos</p>
                   <i class="fa fa-unlock nav-icon"></i>
                </a>
              </li>


              <li class="nav-item">
                <a href="editPermiso.php" class="nav-link">
                  <i class="fa fa-unlock nav-icon"></i>
                  <p>Agregar  Permisos</p>
                   <i class="fa fa-plus nav-icon"></i>
                </a>
              </li>
              
            
          

                </ul>

</li><!--/ Gestionar los usuarios y Permisos -->


<!-- Gestionar el citio web -->
 <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far  fas  fa-home   nav-icon"></i>
                  <p>
                    Gestionar citio
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">


 <li class="nav-item">
                   <a href="../asistencia-diaria/Gestionar_citio.php" class="nav-link">
                     <i class=" fa fa-building-o  nav-icon"></i>
                     <p title="Informacion de la institucion ej(Director, nombre de la Istitucion, etc)">info institucion</p>
                      <i class="fas fa-pencil-alt"></i>
                   </a>
              </li>
  <li class="nav-item">
                <a href="editNotificaciones.php" class="nav-link">
                  <i class="far    fa-keyboard-o nav-icon"></i>
                  <p>Publicar Notificacion</p>
                </a>
              </li>
            </ul>

</li>
<!--/ Gestionar el citio web -->


             
<!-- para editar todas las tablas  -->
             <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fas  fa-table nav-icon"></i>
                  <p>
                    Editar tablas 
                    <i class="right fas fa-angle-left"></i>
                  </p>
                   <i class="fas fa-pencil-alt"></i>
                </a>
                <ul class="nav nav-treeview">
                  
                 
               <li class="nav-item">
                   <a href="editPorcentaje.php" class="nav-link">
                     <i class="fas nav-icon"><b>%</b></i>
                     <p title="Porcentaje a evaluar por actividad">Porcentaje act</p>
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                 </li>
             

                 <li class="nav-item">
                   <a href="editAlumnos.php" class="nav-link">
                     <i class="far fas fa-users nav-icon"></i>
                     <p>Alumnos</p>
                     <i class="fas fa-pencil-alt"></i>
                   </a>
                 </li>

                   <li class="nav-item">
                   <a href="editAsistencia.php" class="nav-link">
                     <i class="fas  fa-check-square nav-icon"></i>
                     <p>Asistencias</p>
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                 </li>

                  <li class="nav-item">
                   <a href="editGrado.php" class="nav-link">
                     <i class="fas  fa-sitemap  nav-icon"></i>
                     <p>Grados</p>
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                 </li>

                 <li class="nav-item">
                   <a href="editDocentes.php" class="nav-link">
                     <i class="fas fa-suitcase nav-icon"></i>
                     <p title="todos los docentes">Docentes</p>
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                 </li>

                 <li class="nav-item">
                   <a href="editOrientadores.php" class="nav-link">
                     <i class="fas fa-suitcase nav-icon"></i>
                     <p title="orientadores de los grados">Orientadores</p>
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                 </li>



                 <li class="nav-item">
                   <a href="editMaterias.php" class="nav-link">
                     <i class="fas fa-book nav-icon"></i>
                     <p>Materias</p>
                      <i class="fas fa-pencil-alt"></i>
                   </a>
                 </li>
            
               <li class="nav-item">
                   <a href="editSexo.php" class="nav-link">
                     <i class="fas fa-female "></i>
                     <i class="fas fa-male "></i>
                     <p>Sexos</p>
                      <i class="fas fa-pencil-alt"></i>

                   </a>
                 </li> 

                 <li class="nav-item">
                <a href="editPermiso.php" class="nav-link">
                  <i class="far  fa-star nav-icon"></i>
                  <p>Permisos</p>
                   <i class="fas fa-pencil-alt"></i>
                </a>
              </li>





                 
                </ul>
              </li>
<!--/ para editar todas las tablas  -->


 
          

            </ul>
          </li>

            <?php } ?>