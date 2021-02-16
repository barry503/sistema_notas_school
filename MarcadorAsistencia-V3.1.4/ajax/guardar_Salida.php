<!-- respetar espacios saltos de lineas e incluso los comentarios podrian dar margen de error
 -->
<?php

 $fetq=0;
	/*Inicia validacion del lado del servidor*/


	// si existe la variable carnet 
	if (empty($_POST['carnet'])) {
           $errors[] = "carnet esta vacío <br>Por favor introduce un carnet en el campo";
        } else if (!empty($_POST['carnet']))

		{


$carnet=$_POST["carnet"];
//archivo para  verificar asistecia

include '../../config/conexionPDOcontacto.php';
 $registros=$base->query("SELECT  fecha FROM salida WHERE   carnet='$carnet'")->fetchAll(PDO::  FETCH_OBJ); 

// $fetq=0;

  foreach ($registros as $unm){

 $fetq= $unm->fecha;
}

 // date_default_timezone_set('America/El_Salvador');
    $hoyo =  date_default_timezone_set('America/El_Salvador');

    $hoyo = date("Y-m-d");
     // $hoyo = date("Y-m-d H:m:s");
  
     // echo $hoyo;
 
if($fetq==$hoyo){
  $errors[] = "Ya existe un registro de  la  salida <br> del alumnos el dia de hoy... ";
}

else{

// if($fetq==0){
//   $messages[] = "sondeo realizado <br>";
// }
		/* Connexion a la base de datos*/

		require_once ("../../config/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos

		require_once ("../../config/config/conexion.php");//Contiene funcion que conecta a la base de datos
		// limpiar el campo de las etiquetas html
		$carnet=mysqli_real_escape_string($con,(strip_tags($_POST["carnet"],ENT_QUOTES)));
           // variable fecha para insetar la fecha actual
		$fecha =  date_default_timezone_set('America/El_Salvador');
        $fecha = date("Y-m-d"); /*Y=año m=mes d=dia*/
		// insercion en salida
		$sql="INSERT INTO salida(carnet, fecha) VALUES ('$carnet', '$fecha')";

$GUardarA = mysqli_query($con,$sql); /*con la variable $GUardarA efectuo la query*/
		// condicional para comprobar el envio a tabla salida

    
		if ($GUardarA){
				$messages[] = " Tu salida se registro  satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.<br> el carnet no coinside con ninguno de nuestra base de datos...<br>Revisa tus  credenciales y vuelve a intentar...";
				//.mysqli_error($con)
			}


}





	

		} else {
			$errors []= "Error desconocido.No sabemos que ocurrio";
		}




		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong>
					 <!-- ciclo para los errores o errors -->
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>

		<?php } ?>

	   <!-- condicional si existe $messages ejecuta la consulta		 -->
			<?php
			if (isset($messages)){
				
				?>
				
 <meta charset="utf-8">
				<div class="alert col-md-12" role="alert" >
					<!-- aqui contenedor de las alertas -->

						<button type="button" class="close" data-dismiss="alert" ><p style="color: #fff;">&times;</p></button>
						<!-- <strong>¡Muy Bien!</strong> -->
				<!--No mover o sino no funcionara la validacion ni mostrara los datos -->
						     <p class="lead content">
              <!-- aqui la conexion -->
<?php   /* Connexion a la base de datos*/

		require_once ("../../config/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos

		require_once ("../../config/config/conexion.php");//Contiene funcion que conecta a la base de datos



// si existe un envio traeme la informacion y inprimela con el mensaje de confirmacion

if ($_POST) {


  $carnet = $_POST["carnet"];
  $query_datos=mysqli_query($con,"select * from alumnos where carnet='$carnet'");
  $Tdatos=mysqli_fetch_array($query_datos); ?>

   <p class="lead">
    	<img style="border-radius: 10px;" width="180px" height="210px" src="../files/alumnos/<?php echo $Tdatos['foto'] ?>">
    	
    </p>
               <h4>!"Feliz viaje"¡</h4>
          <h5>carnet:  <?php echo $Tdatos['carnet'] ?></h5>   
      <h5>Nombre: <?php  echo utf8_encode($Tdatos['nombre']) ?></h5> 
         <h5>Apellido: <?php  echo utf8_encode($Tdatos['apellido']) ?></h5> 

    </p>


   <?php } ?> <!-- final de traida de datos o end -->
						<?php //CICLO PARA EL MENSAJE DE CONFIRMACION dentro del condicional de existencia de var messages
							foreach ($messages as $message) {
									echo $message;
								}
							?>
						
				</div>
				<?php
			}
//Cerrar conexion
// mysqli_close($con);
?>

