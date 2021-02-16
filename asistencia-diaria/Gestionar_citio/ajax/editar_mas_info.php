
            <!-- editando los campos -->
 <?php 
	if (empty($_POST['correo'])) {
            echo $errors[] = "Nombre istitucion esta vacío <br>";
        }
        else if (empty($_POST['direccion'])) {
           echo $errors[] = "El campo de la direccion esta vacío <br>";
                                               }
           else if (empty($_POST['telefono'])) {
           echo $errors[] = "El campo del telefono esta vacío <br>";
                                                }
           else if (empty($_POST['facebook'])) {
           echo $errors[] = "El campo del facebook  esta vacío <br>";
                                                }
            else if (empty($_POST['twitter'])) {
           echo $errors[] = "El campo del twitter esta vacío <br>";
                                                }                                                

           else if (
			!empty($_POST['correo']) &&
			!empty($_POST['direccion']) &&
			!empty($_POST['telefono']) &&
			!empty($_POST['facebook']) &&
			!empty($_POST['twitter']) 
			
		){
		/* Conexion ala base de datos */
		require_once ("../../../config/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../../../config/config/conexion.php");//Contiene funcion que conecta a la base de datos


		// Escape, adicional removiendo etiquetas y codigo de (html/javascript-) code
		$correo=mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
		$facebook=mysqli_real_escape_string($con,(strip_tags($_POST["facebook"],ENT_QUOTES)));
		$twitter=mysqli_real_escape_string($con,(strip_tags($_POST["twitter"],ENT_QUOTES)));








 #IDENTIFICADORES DE LOS CAMPOS PARA LAS CONSULTAS 

  #correo
  $idSQL1correo = 6;
  
  #direccion
  $idSQL2direccion = 7;
  
  #telefono
  $idSQL3telefono = 8;
  
  #facebook
  $idSQL4facebook = 9;

  #twitter
  $idSQL5twitter = 10;

 #






 #consulta para correo
		$sql1="UPDATE gestion_citio SET nombre='$correo' WHERE id='$idSQL1correo' ";
		$query1 = mysqli_query($con,$sql1);
 #consulta para direccion
		$sql2="UPDATE gestion_citio SET nombre='$direccion' WHERE id='$idSQL2direccion' ";
		$query2 = mysqli_query($con,$sql2);

 #consulta para telefono
		$sql3="UPDATE gestion_citio SET nombre='$telefono' WHERE id='$idSQL3telefono' ";
		$query3 = mysqli_query($con,$sql3);
 #consulta para facebook
		$sql4="UPDATE gestion_citio SET nombre='$facebook' WHERE id='$idSQL4facebook' ";
		$query4 = mysqli_query($con,$sql4);

 #consulta para twitter
		$sql5="UPDATE gestion_citio SET nombre='$twitter' WHERE id='$idSQL5twitter' ";
		$query5 = mysqli_query($con,$sql5);		





			if ($query1){
				 $messages[] = " Enviado...";
			} else{
				echo $errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} 
                

 /* Conexion ala base de datos*/
  require_once ("../../../config/conexionPDOcontacto.php");
 require '../Consultas-sql.php';



  ?>

<!--  alerta -->             
 <div class="alert alert-success" role="alert">
  
  <i style="font-size: 25px;" class="fa fa-save"></i> Se realizaron todos los cambios Exitosamente.
 
 </div>

    <h6 style="font-size: 50px;"  class="text-left text-secondary"> <i class="text-orange fa  fa-envelope"></i> correo de la institucion :</h6>
                               <h2 class="text-left"><?php echo $correo; ?></h2>

                               <div class="py-3"></div> 

                         <h6 style="font-size: 50px;" class="text-left text-secondary"> <i class="text-danger  fas fa-map-marker-alt mr-1"></i> Direccion de la institucion:</h6>
                               <h2 class="text-left"><?php echo $direccion; ?></h2>

                               <div class="py-3"></div> 

                          <h6 style="font-size: 50px;" class="text-left text-secondary"> <i class="text-success fa fa-whatsapp"></i>  <i class="fa fa-tablet"></i> Telefono de la institucion:</h6>
                               <h2 class="text-left">503 + <?php echo $telefono; ?></h2>

                          <div class="py-3"></div> 

                          <div class="text-center">
                                 <h1 class="text-info">Urls Redes Sociales.</h1>
                                <h6 style="font-size: 50px;" class=" text-secondary"> <i style="color: #428BCA !important;" class="colorface fa  fa-facebook-square "></i> Facebook:</h6>
                                <h2 ><?php echo $facebook; ?></h2>
                                <h6 style="font-size: 50px;"  class=" text-primary"> <i class="fa  fa-twitter"></i> twitter:</h6>
                                <h2 ><?php echo $twitter; ?></h2>
                               </div>