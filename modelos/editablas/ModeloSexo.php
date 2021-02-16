<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';
class sexo
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}


   //inplementar un metodo para insertar registros
	public function insertar($nombre_sexo)
	{
         $sql = "INSERT INTO sexo (nombre_sexo)
         VALUES('$nombre_sexo')";
             return ejecutarConsulta($sql);

	}


   //inplementar un metodo para editar registros
public function editar($idsexo,$nombre_sexo)
	{
         $sql = "UPDATE sexo SET nombre_sexo='$nombre_sexo' 
         WHERE idsexo='$idsexo' ";
             return ejecutarConsulta($sql);

	}





//inplementar un metodo para mostrar  registros a modificar
public function mostrar($idsexo)
{
	$sql= "SELECT * FROM sexo WHERE idsexo='$idsexo'";
	return ejecutarConsultaSimpleFila($sql);
}


//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT * FROM sexo";
	return ejecutarConsulta($sql);

}



//inplementar un metodo para eliminar sexos
public function eliminar($idsexo)
{
  $sql = "DELETE FROM sexo WHERE idsexo='$idsexo'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para listar  registros y mostrar en el selectSexo=selectSexo
// en el archivo ../ajax/alumnos.php
public function selectSexo()
{
	$sql="SELECT * FROM sexo";
	return ejecutarConsulta($sql);

}



}






 ?>