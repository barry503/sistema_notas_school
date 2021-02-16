<?php require'../../config/conexionPDOcontacto.php'; ?>
<?php require'../../asistencia-diaria/Gestionar_citio/Consultas-sql.php'; ?>
<?php 
	if (empty($_POST['usuario'])) {
           $errors[] = "Sin el usuario no podremos crear el perfil...";
        }
       
  else if (empty($_POST['clave'])) {
           $errors[] = "Sin la contraseña no podremos crear el usuario...";}
        


        else if (empty($_POST['nombre'])) {
           $errors[] = "nombre esta vacío";}

           else if (empty($_POST['apellido'])) {
           $errors[] = "apellido esta vacío";}

      

         else if (empty($_POST['email'])) {
           $errors[] = "Por favor introduce un correo...";}


           else if (
			
			!empty($_POST['usuario']) &&
			!empty($_POST['clave']) &&
			!empty($_POST['nombre']) &&
			!empty($_POST['apellido']) &&
			!empty($_POST['email'])
			
		){
		/* Connect To Database*/
		require_once ("../../config/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../../config/config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$usuario=mysqli_real_escape_string($con,(strip_tags($_POST["usuario"],ENT_QUOTES)));
        $clave=mysqli_real_escape_string($con,(strip_tags($_POST["clave"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$apellido=mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES)));
        $email=mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));

        


$imagen="defecto.png";
        #encriptar la contraseña 
$clavehash=hash("SHA256",$clave); 

		
		$sql="INSERT INTO usuario (usuario,clave,nombre,apellido,email,imagen,condicion) VALUES ('$usuario','$clavehash','$nombre','$apellido','$email','$imagen','1')";



		$query_SaveUsuario = mysqli_query($con,$sql);
			if ($query_SaveUsuario){
				$messages[] = "Usuario Registrado.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}


if (isset($query_SaveUsuario)) {
	if ($query_SaveUsuario) {
	# Datos para el correo
$destinatario = $email;
$asunto = "SISTEMA DE NOTAS";

$carta = ":) Bienvenido al sistema \n";
$carta .= " $nombre, $apellido \n";
$carta .= " Tu usuario : $usuario   \n";
$carta .= " ya esta habilitado para ingresar al sistema...  \n";
$carta .= "No olvides tu usuario y contraseña...:) \n";
$carta .= ":)   Contactanos: $correo ";


// Enviando Mensaje
mail($destinatario, $asunto, $carta);

}

}







		
		
			
// echo $correo;
			?>


<?php if (isset($errors)){

 ?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Error!</strong>
				<?php
			 foreach ($errors as $error)
			 {
			 	echo $error;

			  ?>

			</div> 

<script >
	                    /* Alerta para envio error*/
Swal.fire({
                       icon:'error',
                       title:'Error al registrar el usuario...',
                         html: '<h4><?php echo $error; ?></h4>',
                          grow: 'fullscreen',
                       footer: 'Todos los  campos son requeridos. '
                   });

</script>


<?php } } ?>



<?php
			
			if (isset($messages)){

				?>


				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						
						<?php
							foreach ($messages as $message) 
							{
									echo $message;
								
							
							?>
				</div>



	<script >
	                    /* Alerta para envio exitoso*/
Swal.fire({
                       icon:'success',
                       title:'Usuario Registrado Exitosamente...',
                       html: '<h4><?php echo $message; ?></h4><br>recuerda tu usuario y tu contraseña ',
                       grow: 'fullscreen',
                       footer: 'Te hemos enviado un correo para confirmar que tu usuario fue creado.'
                   });


</script>




				<?php
				 }
		        	} 

				?>

