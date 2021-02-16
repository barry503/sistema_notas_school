<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class materias
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}




 //inplementar un metodo para insertar una materia
  public function insertar($CODMAT,$iddocentes,$NOMMAT)
  {
         $sql = "INSERT INTO materias (CODMAT,iddocentes,NOMMAT)
         VALUES('$CODMAT','$iddocentes','$NOMMAT')";
             return ejecutarConsulta($sql);

  }



   //inplementar un metodo para editar registros
public function editar($idmaterias,$CODMAT,$iddocentes,$NOMMAT)
	{
         $sql = "UPDATE materias SET CODMAT='$CODMAT', iddocentes='$iddocentes', NOMMAT='$NOMMAT'
         WHERE idmaterias='$idmaterias' ";
             return ejecutarConsulta($sql);

	}








 //inplementar un metodo para desactivar grado
public function desactivar($idmaterias)
{
  $sql = "UPDATE materias SET condicion='0' WHERE idmaterias='$idmaterias'";
    return ejecutarConsulta($sql);

}


//inplementar un metodo para activar grado
public function activar($idmaterias)
{
  $sql = "UPDATE materias SET condicion='1' WHERE idmaterias='$idmaterias'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para eliminar MATERIAS
public function eliminar($idmaterias)
{
  $sql = "DELETE FROM materias WHERE idmaterias='$idmaterias'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para mostrar  registros a modificar
public function mostrar($idmaterias)
{
	$sql= "SELECT * FROM materias WHERE idmaterias='$idmaterias'";
	return ejecutarConsultaSimpleFila($sql);
}




//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT d.iddocentes, CONCAT(d.nombre, ' , ', d.apellido) as docente, m.idmaterias, m.CODMAT, m.iddocentes, m.NOMMAT, m.condicion FROM materias m INNER JOIN docentes  d  ON m.iddocentes=d.iddocentes";
	return ejecutarConsulta($sql);

}





   
//inplementar un metodo para listar  registros 
public function listmaterias()
{
  $sql="SELECT * FROM materias ";//ORDER BY idmaterias ASC
  return ejecutarConsulta($sql);

}








}






 ?>