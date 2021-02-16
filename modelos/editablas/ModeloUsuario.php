<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class Usuario
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}



   //inplementar un metodo para insertar registros
	public function insertar($nombre,$apellido,$imagen,$usuario,$clave,$email,$telefono,$direccion,$permisos)
	{





         $sql = "INSERT INTO usuario (nombre,apellido,imagen,usuario,clave,email,telefono,direccion)
         VALUES('$nombre','$apellido','$imagen','$usuario','$clave','$email','$telefono','$direccion')";
             //return ejecutarConsulta($sql);
              $idusuarionew=ejecutarConsulta_retornarID($sql);



              $num_elementos=0;
              $sw=true;

              while ($num_elementos < count($permisos))
              {
                  $sql_detalle = "INSERT INTO usuario_permiso(idusuario,idpermiso) VALUES('$idusuarionew', '$permisos[$num_elementos]')";
                  ejecutarConsulta($sql_detalle) or $sw=false;

              	  $num_elementos=$num_elementos + 1;
              }

              return $sw;


	}


   //inplementar un metodo para editar registros
public function editar($idusuario,$nombre,$apellido,$imagen,$usuario,$clave,$email,$telefono,$direccion,$permisos)
	{
         $sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', imagen='$imagen', usuario='$usuario', clave='$clave', email='$email', telefono='$telefono', direccion='$direccion' 
         WHERE idusuario='$idusuario' ";
              ejecutarConsulta($sql);

              // Eliminamos todos los permisos asignados para volverlos a
              // registrar
              $sqldel="DELETE FROM usuario_permiso WHERE idusuario=$idusuario";
              ejecutarConsulta($sqldel);

              $num_elementos=0;
              $sw=true;

              while ($num_elementos < count($permisos))
              {
                  $sql_detalle = "INSERT INTO usuario_permiso(idusuario,idpermiso) VALUES('$idusuario', '$permisos[$num_elementos]')";
                  ejecutarConsulta($sql_detalle) or $sw=false;

                  $num_elementos=$num_elementos + 1;
              }

              return $sw;




	}


 //inplementar un metodo para desactivar usuarios
public function desactivar($idusuario)
{
  $sql = "UPDATE usuario SET condicion='0' WHERE idusuario='$idusuario'";
    return ejecutarConsulta($sql);

}


//inplementar un metodo para activar usuarios
public function activar($idusuario)
{
  $sql = "UPDATE usuario SET condicion='1' WHERE idusuario='$idusuario'";
    return ejecutarConsulta($sql);

}


//inplementar un metodo para mostrar  registros a modificar
public function mostrar($idusuario)
{
	$sql= "SELECT * FROM usuario WHERE idusuario='$idusuario'";
	return ejecutarConsultaSimpleFila($sql);
}


//inplementar un metodo para listar  registros 

public function listar()
{
	$sql="SELECT * FROM usuario";
	return ejecutarConsulta($sql);

}



//inplementar un metodo  para listar  los permisos marcados
public function listarmarcados($idusuario)
{
  $sql="SELECT * FROM usuario_permiso WHERE idusuario='$idusuario'";
  return ejecutarConsulta($sql);

}


//Funcion para verificar el acceso al sistema
public function verificar($usuario,$clave)
{
  // login = usuario
  $sql="SELECT idusuario,nombre,apellido,imagen,usuario,clave,email,telefono,direccion FROM usuario WHERE usuario='$usuario' AND clave='$clave' AND condicion='1'";
  return ejecutarConsulta($sql);

  // ala hora de iniciar session
// date_default_timezone_set('America/El_Salvador');
//       $time_login=date('Y-M-D G:i:s');
//              $hora_logeo = "UPDATE usuario SET estado='conectado', time_login=$time_login WHERE usuario=$usuario";
//                 return  ejecutarConsulta($hora_logeo);

}


//Funcion para verificar el acceso al sistema
public function salir($usuario)
{
  // login = usuario
 //ala hora de cerrar la session
// date_default_timezone_set('America/El_Salvador');
//       $time_logout=date('Y-M-D G:i:s');
//              $hora_desconexion = "UPDATE usuario SET estado='desconectado', time_logout='$time_logout' WHERE usuario=$usuario";
//                  return ejecutarConsulta($hora_desconexion);
                  
                  
}






}






 ?>