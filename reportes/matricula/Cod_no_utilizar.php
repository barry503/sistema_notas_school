<?php 


#verificamos que exista el archivo imagefile
    if (isset($_FILES["imagefile"])){
      #la variable $cargo_urlD carga la url donde se guardara la imagen
    $cargo_urlD="../../files/alumnos/";
    # la variable $nombre_image  contiene la funcion time(); o  marca de tiempo y la funcion basename y agrego el nombre del archivo
        $nombre_image = time()."_".basename($_FILES["imagefile"]["name"]);
        # la variable $cargo_file contiene la ruta y el nombre de la img
        $cargo_file = $cargo_urlD . $nombre_image;
        #la variable $tipoDImagen carga el tipo de extencion para validar en un condional
        $tipoDImagen = pathinfo($cargo_file,PATHINFO_EXTENSION);
        #la variable $tamañoImagen tendra la propiedad del archivo o imagen de su tamaño 
        $tamañoImagen=$_FILES["imagefile"]["size"];
        
          
        
        /* Inicio Validacion*/
        // Verifico el formato que asepto para el archhivo que quiero subir
        if(($tipoDImagen != "jpg" && $tipoDImagen != "png" && $tipoDImagen != "jpeg") and $tamañoImagen>0) {
        echo $errors= "<p>Lo sentimos, sólo se permiten archivos JPG , JPEG y PNG .</p>";
        } 

                #Valido el tamaño de la imagen 
        else if ($tamañoImagen > 8388608) {//1048576 byte=1MB
        echo $errors= "<p>Lo sentimos, pero el archivo es demasiado grande. Selecciona logo de menos de 8MB</p>";
        }  
        
        /* Fin Validacion*/
        // si el tamaño es mayor a 0
        if ($tamañoImagen>0)
        {
          #Muevo el archivo imagefile a la url $cargo_file 
          move_uploaded_file($_FILES["imagefile"]["tmp_name"], $cargo_file);
                    #la variable $foto contendra el lugar donde se guardara el registro = y el nombre del archivo
          $foto= $nombre_image;


        }
      }
#

 ?>

<img width="180px" height="200px" src="../../files/alumnos/<?php //echo $foto; ?>"><br><h4>Nombre:<p><?php //echo $nombre . "</p><br>Apellido:<p>" . $apellido; ?></p></h4> 