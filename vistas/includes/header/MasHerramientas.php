
<?php 
              if($_SESSION['administracionA']==1)
             {
               echo '<li class="nav-item">
            <a href="DContactos.php" class="nav-link">
              <i class="nav-icon fa  fa-phone-square"></i>
              <p>
                Contactos
               
              </p>
            </a>
          </li> ';   
         
              } 
              ?>




<li class="nav-item">
            <a href="Dgraficos.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Graficos
               
              </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="DCalendario.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendario
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>



          
      

              <li class="nav-item">
                <a href="Dnotificaciones.php" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>Notificaciones</p>
                </a>
              </li>
              

      
              <li class="nav-item">
                <a href="../MarcadorAsistencia-V3.1.4/marcador.php" class="nav-link">
                  <i class="nav-icon fa fa-asterisk"></i>
                  <p>Ingresar asistencia <br> Diaria</p>
                </a>
              </li>