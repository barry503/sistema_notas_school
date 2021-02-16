<?php 


//incluimos inicialmente la conexion ala base de datos
require '../../../config/conexion.php';


  #variable de la fecha de hoy 
 $fechahoy =  date_default_timezone_set('America/El_Salvador');
 $fechahoy = date("Y-m-d");
 // echo $fechahoy;

 
class alumnos
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}



 //inplementar un metodo para listar  registros 
 public function listar()
{
	global $fechahoy;

	$sql="SELECT a.carnet,x.idsexo,x.nombre_sexo as sexo, g.idgrado,g.nombre_grado as grado, a.foto,CONCAT(a.nombre,' , ',a.apellido) as nombre,a.fechanac,a.idsexo,a.idgrado, a.encargado, a.nie,a.estado, a.idasistencia FROM alumnos a INNER JOIN sexo x INNER JOIN grado g ON x.idsexo=a.idsexo AND g.idgrado=a.idgrado AND a.idasistencia='$fechahoy'";
	return ejecutarConsulta($sql);

}











}



















 ?>