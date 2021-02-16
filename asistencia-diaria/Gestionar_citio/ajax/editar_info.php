<?php if ($_POST['Ninstitucion']){ ?>

   <!-- editando los campos -->

   
<?php 
	if (empty($_POST['Ninstitucion'])) {
            echo $errors[] = "Nombre istitucion esta vacío";
        }
        else if (empty($_POST['Abreviatura'])) {
           echo $errors[] = "El campo de la Abreviatura esta vacío";
                                               }
           else if (empty($_POST['Idirector'])) {
           echo $errors[] = "El campo del director esta vacío";
                                                }
           else if (empty($_POST['Aescolar'])) {
           echo $errors[] = "El campo del Año Escolar esta vacío";
                                                }
           else if (empty($_POST['informacion'])) {
           echo $errors[] = "El campo de la informacion esta vacío";
                                                }                                                
                                                

           else if (
			!empty($_POST['Ninstitucion']) &&
			!empty($_POST['Abreviatura']) &&
			!empty($_POST['Idirector']) &&
			!empty($_POST['Aescolar']) &&
			!empty($_POST['informacion'])  
			
		){
		/* Conexion ala base de datos */
		require_once ("../../../config/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../../../config/config/conexion.php");//Contiene funcion que conecta a la base de datos


		// Escape, adicional removiendo etiquetas y codigo de (html/javascript-) code
		$Ninstitucion=mysqli_real_escape_string($con,(strip_tags($_POST["Ninstitucion"],ENT_QUOTES)));
		$Abreviatura=mysqli_real_escape_string($con,(strip_tags($_POST["Abreviatura"],ENT_QUOTES)));
		$Idirector=mysqli_real_escape_string($con,(strip_tags($_POST["Idirector"],ENT_QUOTES)));
		$Aescolar=mysqli_real_escape_string($con,(strip_tags($_POST["Aescolar"],ENT_QUOTES)));
        $informacion=mysqli_real_escape_string($con,(strip_tags($_POST["informacion"],ENT_QUOTES)));

#IDENTIFICADORES DE LOS CAMPOS PARA LAS CONSULTAS 

  #institusion
  $idSQL1 = 4;
  
  #Abreviatura
  $idSQL2 = 1;
  
  #Director
  $idSQL3 = 2;
  
  #Año escolar
  $idSQL4 = 5;

  #informacion
  $idSQL5 = 11;

#


#consulta para Nonbre de la institusion
		$sql1="UPDATE gestion_citio SET nombre='$Ninstitucion' WHERE id='$idSQL1' ";
		$query1 = mysqli_query($con,$sql1);
#consulta para Abreviatura
		$sql2="UPDATE gestion_citio SET nombre='$Abreviatura' WHERE id='$idSQL2' ";
		$query2 = mysqli_query($con,$sql2);

#consulta para Director
		$sql3="UPDATE gestion_citio SET nombre='$Idirector' WHERE id='$idSQL3' ";
		$query3 = mysqli_query($con,$sql3);
#consulta para Año escolar
		$sql4="UPDATE gestion_citio SET nombre='$Aescolar' WHERE id='$idSQL4' ";
		$query4 = mysqli_query($con,$sql4);

#consulta para Año escolar
		$sql5="UPDATE gestion_citio SET nombre='$informacion' WHERE id='$idSQL5' ";
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
 <div class="alert alert-primary" role="alert">
 	
 	<i style="font-size: 25px;" class="fa fa-save"></i> Se realizaron todos los cambios Exitosamente.
 
 </div>
                               <!-- / alerta --> 



 <div class="text-center">
                               <h6 class="text-left text-secondary">Nombre de la institucion <i class="fa fa-building-o"></i>:</h6>
                                <h3 >COMPLEJO EDUCATIVO <?php echo $NombreIns; ?></h3>

                    
                               <h6 class="text-left text-secondary">Abreviatura de la institucion <i class="fa fa-font "></i>:</h6>
                               <h2 class="text-left"><?php echo $AInstitucion; ?></h2>


                               <h6 class="text-left text-secondary">Director de la institucion <i class="fa fa-user "></i>:</h6>
                               <h4 class="text-left"><?php echo $director; ?></h4>

                               <div class="py-3"></div>    



                            

                               <h6 class="text-left text-secondary">Año escolar <i class="fa  fa-calendar "></i>:</h6>
                               <h2 class="text-left"><?php echo $año; ?></h2>

                               <div class="py-3"></div> 

                               
                               <h6 class="text-left text-secondary"> Informacion de la Institucion <i class="fa fa-exclamation"></i>:</h6>
                               <h2 class="text-left"><?php echo $informacion; ?></h2>

                               <div class="py-3"></div> 


                               

                           

                             </div> 






<?php  }    ?>



