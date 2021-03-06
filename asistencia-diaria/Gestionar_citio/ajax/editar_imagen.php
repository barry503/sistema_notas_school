<?php
session_start();

 $idIma = 3;

				/* Connect To Database*/
		require_once ("../../../config/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../../../config/config/conexion.php");//Contiene funcion que conecta a la base de datos
                #verificamos que exista el archivo imagefile
				if (isset($_FILES["imagefile"])){
	            #la variable $cargo_urlD carga la url donde se guardara la imagen
				$cargo_urlD="../../../files/imgInstitucion/";
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
				if(($tipoDImagen != "jpg" && $tipoDImagen != "png" && $tipoDImagen != "jpeg" && $tipoDImagen != "gif" ) and $tamañoImagen>0) {
				$errors[]= "<p>Lo sentimos, sólo se permiten archivos JPG , JPEG, PNG y GIF.</p>";
				} 

                #Valido el tamaño de la imagen 
				else if ($tamañoImagen > 10048576) {//1048576 byte=1MB
				$errors[]= "<p>Lo sentimos, pero el archivo es demasiado grande. Selecciona logo de menos de 8MB</p>";
				}  else
			{
				
				
				
				/* Fin Validacion*/
				// si el tamaño es mayor a 0
				if ($tamañoImagen>0){
					#Muevo el archivo imagefile a la url $cargo_file 
					move_uploaded_file($_FILES["imagefile"]["tmp_name"], $cargo_file);
                    #la variable $img_Aactualizar contendra el lugar donde se guardara el registro = y el nombre del archivo
					$img_Aactualizar="nombre='$nombre_image' ";

				
				}	else {
					#Si el tamaño es < a 0 la variable $img_Aactualizar Estara vacia
				 $img_Aactualizar="";
				}   
				    #Consulta sql para guardar el nombre de la img
                    $sql = "UPDATE gestion_citio SET $img_Aactualizar WHERE id='$idIma';";
                    #Query para insertar los valores llamo la conexion y luego la consulta sql 
                    $query_InsertarA_bd = mysqli_query($con,$sql);

                   
                    if ($query_InsertarA_bd) {
                        ?>
						
						<img class="img-circle imgILogo " src="../files/imgInstitucion/<?php echo $nombre_image;?>" alt="sin foto">
						<?php
                    } else {
                        $errors[] = "Lo sentimos, actualización falló. Intente nuevamente. ".mysqli_error($con);
                    }
			}
		}	
				
				
				
		
	?>
	<?php 
		if (isset($errors)){
	?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Error! </strong>
		<?php
			foreach ($errors as $error){
				echo $error;
			}
		?>
		</div>	
	<?php
			}
	?>
