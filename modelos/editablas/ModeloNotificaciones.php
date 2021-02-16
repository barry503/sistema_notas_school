<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class notificacion
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}


   //inplementar un metodo para insertar registros
	public function insertar($usuario,$notificacion,$enlace)
	{
         $sql = "INSERT INTO notificaciones (usuario,notificacion,enlace)
         VALUES('$usuario','$notificacion','$enlace')";
             return ejecutarConsulta($sql);

	}


   //inplementar un metodo para editar registros
public function editar($idnotificaciones,$usuario,$notificacion,$fecha,$enlace)
	{
         $sql = "UPDATE notificaciones SET usuario='$usuario', notificacion='$notificacion',fecha='$fecha', enlace='$enlace' WHERE idnotificaciones='$idnotificaciones' ";
             return ejecutarConsulta($sql);

	}





//inplementar un metodo para mostrar  registros a modificar
public function mostrar($idnotificaciones)
{
	$sql= "SELECT * FROM notificaciones WHERE idnotificaciones='$idnotificaciones'";
	return ejecutarConsultaSimpleFila($sql);
}


//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT * FROM notificaciones";
	return ejecutarConsulta($sql);

}



//inplementar un metodo para eliminar notificacioness
public function eliminar($idnotificaciones)
{
  $sql = "DELETE FROM notificaciones WHERE idnotificaciones='$idnotificaciones'";
    return ejecutarConsulta($sql);

}








}






 ?>