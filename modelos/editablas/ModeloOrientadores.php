<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';
class orientadores
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}


   //inplementar un metodo para insertar registros
	public function insertar($iddocentes,$idgrado)
	{
         $sql = "INSERT INTO orientadores (iddocentes,idgrado)
         VALUES('$iddocentes','$idgrado')";
             return ejecutarConsulta($sql);

	}




   //inplementar un metodo para editar registros
public function editar($id,$iddocentes,$idgrado)
	{
         $sql = "UPDATE orientadores SET iddocentes='$iddocentes',idgrado='$idgrado'
         WHERE id='$id' ";
             return ejecutarConsulta($sql);

	}





//inplementar un metodo para mostrar  registros a modificar
public function mostrar($id)
{
	$sql= "SELECT * FROM orientadores WHERE id='$id'";
	return ejecutarConsultaSimpleFila($sql);
}


//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="
	SELECT o.id as id, d.iddocentes,CONCAT(d.nombre,' , ',d.apellido) as docente,
	g.idgrado,g.nombre_grado as grado,
	 o.iddocentes, o.idgrado FROM orientadores o INNER JOIN grado g  INNER JOIN docentes d ON  d.iddocentes=o.iddocentes AND g.idgrado=o.idgrado";
	return ejecutarConsulta($sql);

}





//inplementar un metodo para eliminar orientadoress
public function eliminar($id)
{
  $sql = "DELETE FROM orientadores WHERE id='$id'";
    return ejecutarConsulta($sql);

}




}






 ?>