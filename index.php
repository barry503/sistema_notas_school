<!-- //redireccionar ala vista de login -->
<?php  /*Con php*/ //header('Location: vistas/login.php'); ?>
<script>
	/*con javascript */
	// funcion para redireccionar
	function Redireccionar() {
		/*Redireccionando a login.php*/
		// Utilizando el BOM la func window
		window.location.href = "vistas/login.php"; 
	}

// llamando la funcion
Redireccionar();
</script>