<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class usuario_permiso
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}




 //inplementar un metodo para insertar una materia
  public function insertar($idusuario,$idpermiso)
  {
         $sql = "INSERT INTO usuario_permiso (idusuario, idpermiso)
         VALUES('$idusuario','$idpermiso')";
             return ejecutarConsulta($sql);

  }



   //inplementar un metodo para editar registros
public function editar($idusuario_permiso,$idusuario,$idpermiso)
	{
         $sql = "UPDATE usuario_permiso SET idusuario='$idusuario', idpermiso='$idpermiso'
         WHERE idusuario_permiso='$idusuario_permiso' ";
             return ejecutarConsulta($sql);

	}










//inplementar un metodo para eliminar usuario_permiso
public function eliminar($idusuario_permiso)
{
  $sql = "DELETE FROM usuario_permiso WHERE idusuario_permiso='$idusuario_permiso'";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para mostrar  registros a modificar
public function mostrar($idusuario_permiso)
{
	$sql= "SELECT * FROM usuario_permiso WHERE idusuario_permiso='$idusuario_permiso'";
	return ejecutarConsultaSimpleFila($sql);
}



   
//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT 
  u.idusuario,u.usuario as usuario, CONCAT(u.nombre,' , ',u.apellido) as nombre_usuario,
  p.idpermiso, p.nombre as nombre_permiso,
 up.idusuario_permiso,up.idusuario,up.idpermiso 
   FROM usuario u
   INNER JOIN permiso p
   INNER JOIN usuario_permiso up 
   ON  u.idusuario=up.idusuario AND p.idpermiso=up.idpermiso";
	return ejecutarConsulta($sql);

}


// para traer los Usuarios al select
public function selectUsuarios()
{
  $sql="SELECT * FROM usuario WHERE condicion=1";
  return ejecutarConsulta($sql);

}


// para traer los permisos al select
public function selectPermisos()
{
  $sql="SELECT * FROM permiso WHERE condicion=1";
  return ejecutarConsulta($sql);

}


}






 ?>

