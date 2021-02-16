<?php 
	if (empty($_POST['idusuario'])) {
           $errors[] = "idusuario esta vacío";
        }
        else if (empty($_POST['nombre'])) {
           $errors[] = "nombre esta vacío";}

        else if (empty($_POST['apellido'])) {
           $errors[] = "apellido esta vacío";}

        // else if (empty($_POST["imagen"])) {
        //    $errors[] = "introduce una imagen ";}

        else if (empty($_POST['usuario'])) {
           $errors[] = "usuario esta vacío";}

        else if (empty($_POST['clave'])) {
           $errors[] = "clave esta vacío";}

         else if (empty($_POST['email'])) {
           $errors[] = "email esta vacío";}

           else if (empty($_POST['telefono'])) {
           $errors[] = "telefono esta vacío";}

           else if (empty($_POST['direccion'])) {
           $errors[] = "direccion esta vacío";}

           else if (
			!empty($_POST['idusuario']) &&
			!empty($_POST['nombre']) &&
			!empty($_POST['apellido']) &&
			// !empty($_POST['imagen']) &&
			!empty($_POST['usuario']) &&
			!empty($_POST['clave']) &&
			!empty($_POST['email']) &&
			!empty($_POST['telefono']) &&
			!empty($_POST['direccion'])
			
		){
		/* Connect To Database*/
		require_once ("../../config/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../../config/config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$idusuario=mysqli_real_escape_string($con,(strip_tags($_POST["idusuario"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$apellido=mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES)));
		 // $imagen=mysqli_real_escape_string($con,(strip_tags($_POST["imagen"],ENT_QUOTES)));
		$usuario=mysqli_real_escape_string($con,(strip_tags($_POST["usuario"],ENT_QUOTES)));
        $clave=mysqli_real_escape_string($con,(strip_tags($_POST["clave"],ENT_QUOTES)));
		$email=mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
        








        #encriptar la contraseña 
$clavehash=hash("SHA256",$clave); 

// imagen='$imagen',
		
		$sql="UPDATE usuario SET nombre='$nombre', apellido='$apellido', usuario='$usuario', clave='$clavehash', email='$email', telefono='$telefono', direccion='$direccion' 
         WHERE idusuario='$idusuario' ";



		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = " Tus Datos personales  han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>




			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?><br>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Genial...!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			                     }    ?>

