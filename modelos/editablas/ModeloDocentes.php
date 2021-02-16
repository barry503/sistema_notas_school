<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class docentes
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}


   //inplementar un metodo para insertar registros
	public function insertar($nombre,$apellido)
	{
         $sql = "INSERT INTO docentes (nombre,apellido)
         VALUES('$nombre','$apellido')";
             return ejecutarConsulta($sql);

	}


   //inplementar un metodo para editar registros
public function editar($iddocentes,$nombre,$apellido)
	{
         $sql = "UPDATE docentes SET nombre='$nombre', apellido='$apellido' 
         WHERE iddocentes='$iddocentes' ";
             return ejecutarConsulta($sql);

	}




 //inplementar un metodo para desactivar docentes
public function desactivar($iddocentes)
{
  $sql = "UPDATE docentes SET condicion='0' WHERE iddocentes='$iddocentes'";
    return ejecutarConsulta($sql);

}


//inplementar un metodo para activar docentes
public function activar($iddocentes)
{
  $sql = "UPDATE docentes SET condicion='1' WHERE iddocentes='$iddocentes'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para mostrar  registros a modificar
public function mostrar($iddocentes)
{
	$sql= "SELECT * FROM docentes WHERE iddocentes='$iddocentes'";
	return ejecutarConsultaSimpleFila($sql);
}


//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT * FROM docentes";
	return ejecutarConsulta($sql);

}



//inplementar un metodo para eliminar sexos
public function eliminar($iddocentes)
{
  $sql = "DELETE FROM docentes WHERE iddocentes='$iddocentes'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para listar  registros y mostrar en el selectDocentes=selectDocentes
// en el archivo ../ajax/Ajax_grado.php y  ../ajax/Ajax_materias.php
public function selectDocentes()
{
  $sql="SELECT iddocentes, CONCAT(nombre,' , ',apellido) as nombre FROM docentes";
  return ejecutarConsulta($sql);

}






}






 ?>