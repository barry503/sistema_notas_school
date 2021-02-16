<?php 
#limpiando variables
 //identificador del grado  
 $idgrado=mysqli_real_escape_string($con,(strip_tags($_POST["idgrado"],ENT_QUOTES)));

 # NIE O IDENTIFICADOR DEL ALUMNO
 $carnet=mysqli_real_escape_string($con,(strip_tags($_POST["carnet"],ENT_QUOTES)));
 //fotografia del alumno
 // $foto=mysqli_real_escape_string($con,(strip_tags($_POST["foto"],ENT_QUOTES)));
 //nombres
 $nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
 // apellidos
 $apellido=mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES)));
 // fecha de nacimiento
 $fechanac=mysqli_real_escape_string($con,(strip_tags($_POST["fechanac"],ENT_QUOTES)));
 // identificador del sexo
 $idsexo=mysqli_real_escape_string($con,(strip_tags($_POST["idsexo"],ENT_QUOTES)));
 //telefono del alumno
 $telefono=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
 //direccion del alumno
 $direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
 // encargado del alumno
 $encargado=mysqli_real_escape_string($con,(strip_tags($_POST["encargado"],ENT_QUOTES)));
 //nie del alumno
 $nie=mysqli_real_escape_string($con,(strip_tags($_POST["nie"],ENT_QUOTES)));
 //seccion del alumno
 $seccion=mysqli_real_escape_string($con,(strip_tags($_POST["seccion"],ENT_QUOTES)));
 // salud del alumno
 $salud=mysqli_real_escape_string($con,(strip_tags($_POST["salud"],ENT_QUOTES)));
 //trabajo del alumno
 $trabajo=mysqli_real_escape_string($con,(strip_tags($_POST["trabajo"],ENT_QUOTES)));
 // madre del alumno
 $mama=mysqli_real_escape_string($con,(strip_tags($_POST["mama"],ENT_QUOTES)));
 // padre del alumno
 $papa=mysqli_real_escape_string($con,(strip_tags($_POST["papa"],ENT_QUOTES)));
 //codigo de familia
 $codfam=mysqli_real_escape_string($con,(strip_tags($_POST["codfam"],ENT_QUOTES)));
 // si el alumno repite grado
 $repetidor=mysqli_real_escape_string($con,(strip_tags($_POST["repetidor"],ENT_QUOTES)));



?>