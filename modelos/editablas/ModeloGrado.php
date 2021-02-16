<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class grado
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}



   //inplementar un metodo para insertar registros si funcionara
	public function nuevo($idgrado,$nombre_grado,$descripcion_grado,$seccion,$iddocentes)
	{
         $sql = "INSERT INTO grado (idgrado,nombre_grado,descripcion_grado,seccion,iddocentes)
         VALUES('$idgrado','$nombre_grado','$descripcion_grado','$seccion','$iddocentes')";
             return ejecutarConsulta($sql);

	}


   //inplementar un metodo para editar registros
public function editar($idgrado,$nombre_grado,$descripcion_grado,$seccion,$iddocentes)
	{
         $sql = "UPDATE grado SET nombre_grado='$nombre_grado', descripcion_grado='$descripcion_grado', seccion='$seccion', iddocentes='$iddocentes'
         WHERE idgrado='$idgrado' ";
             return ejecutarConsulta($sql);

	}





 //inplementar un metodo para desactivar grado
public function desactivar($idgrado)
{
  $sql = "UPDATE grado SET condicion='0' WHERE idgrado='$idgrado'";
    return ejecutarConsulta($sql);

}


//inplementar un metodo para activar grado
public function activar($idgrado)
{
  $sql = "UPDATE grado SET condicion='1' WHERE idgrado='$idgrado'";
    return ejecutarConsulta($sql);

}


//inplementar un metodo para eliminar sexos
public function eliminar($idgrado)
{
  $sql = "DELETE FROM grado WHERE idgrado='$idgrado'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para mostrar  registros a modificar
public function mostrar($idgrado)
{
	$sql= "SELECT * FROM grado WHERE idgrado='$idgrado'";
	return ejecutarConsultaSimpleFila($sql);
}


//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT g.idgrado, d.iddocentes,CONCAT(d.nombre,' , ',d.apellido) as docentes, g.nombre_grado,g.descripcion_grado,g.seccion,g.condicion FROM grado g  INNER JOIN docentes d ON  g.iddocentes=d.iddocentes";
	return ejecutarConsulta($sql);

}




//inplementar un metodo para listar  registros y mostrar en el selectGrado=selectGrado
// en el archivo ../ajax/Ajax_Alumnos.php
public function selectGrado()
{
  $sql="SELECT * FROM grado";
  return ejecutarConsulta($sql);

}








}






 ?>