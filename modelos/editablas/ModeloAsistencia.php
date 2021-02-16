<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class Asistencia
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}




 //inplementar un metodo para insertar registros incluire el carnet si funciona
  // public function insertar($carnet,)
  // {
  //        $sql = "INSERT INTO alumnos (carnet)
  //        VALUES('$carnet')";
  //            return ejecutarConsulta($sql);

  // }



   //inplementar un metodo para editar registros
public function editar($idasistencia,$carnet,$fecha,$Hfecha)
	{
         $sql = "UPDATE asistencia SET carnet='$carnet', fecha='$fecha', Hfecha='$Hfecha'
         WHERE carnet='$carnet' ";
             return ejecutarConsulta($sql);

	}








//inplementar un metodo para eliminar sexos
public function eliminar($idasistencia)
{
  $sql = "DELETE FROM asistencia WHERE idasistencia='$idasistencia'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para mostrar  registros a modificar
public function mostrar($idasistencia)
{
	$sql= "SELECT * FROM asistencia WHERE idasistencia='$idasistencia'";
	return ejecutarConsultaSimpleFila($sql);
}




//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT e.idasistencia, e.carnet, e.fecha, e.Hfecha, a.foto, CONCAT(a.nombre, ' , ' ,a.apellido) as nombres, a.idsexo, a.idgrado, a.estado, g.idgrado, g.nombre_grado as grado FROM asistencia e INNER JOIN alumnos a  INNER JOIN grado g  ON e.carnet=a.carnet AND g.idgrado=a.idgrado";
	return ejecutarConsulta($sql);

}













}






 ?>