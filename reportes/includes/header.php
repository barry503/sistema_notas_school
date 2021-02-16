
<!-- header -->
<header>
  <div class="collapse bg-primary" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Informacion</h4>
          <p class="text-white"><?php echo $informacion; ?>.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contacto</h4>
          <ul class="list-unstyled">
            <li><a href="<?php echo $twitter; ?>" class="text-white">siguenos en  Twitter</a></li>
            <li><a href="<?php echo $facebook; ?>" class="text-white">Danos like en Facebook</a></li>
            <li><a href="mailto:<?php echo $correo; ?>" class="text-white">Escribenos al Email</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-primary shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
             <i style="font-size: 40px;" class=" fa fa-files-o"></i> 
        <strong><?php echo $titulo; ?></strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<!-- final de  header  -->


<!-- boton para volver al indice -->
     <div class="container">
       <div class="mb-3 mt-3 row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="index.php" class="btn btn-primary" title="Volver al indice de los Reportes"><< VOLVER AL INDICE</a>
                </div>
            </div>
        </div>
    </div>