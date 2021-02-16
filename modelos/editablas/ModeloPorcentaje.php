<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';
class porcentaje
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}


   //inplementar un metodo para insertar registros
	public function insertar($p1,$p2,$p3,$p4,$p5)
	{
         $sql = "INSERT INTO porcentaje (p1,p2,p3,p4,p5)
         VALUES('$p1','$p2','$p3','$p4','$p5')";
             return ejecutarConsulta($sql);

	}


   //inplementar un metodo para editar registros
public function editar($id,$p1,$p2,$p3,$p4,$p5)
	{
         $sql = "UPDATE porcentaje SET p1='$p1',p2='$p2',p3='$p3',p4='$p4',p5='$p5'
         WHERE id='$id' ";
             return ejecutarConsulta($sql);

	}





//inplementar un metodo para mostrar  registros a modificar
public function mostrar($id)
{
	$sql= "SELECT * FROM porcentaje WHERE id='$id'";
	return ejecutarConsultaSimpleFila($sql);
}


//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT * FROM porcentaje";
	return ejecutarConsulta($sql);

}



//inplementar un metodo para eliminar porcentajes
public function eliminar($id)
{
  $sql = "DELETE FROM porcentaje WHERE id='$id'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para listar  registros y mostrar en el selectporcentaje=selectporcentaje
// en el archivo ../ajax/alumnos.php
public function selectporcentaje()
{
	$sql="SELECT * FROM porcentaje";
	return ejecutarConsulta($sql);

}



}






 ?>