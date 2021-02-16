<?php 
// Este es el modelo de los alumnos del sistema



//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class alumnos
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}


// public function verificar($carnet){

//   $sql= "SELECT * FROM alumnos WHERE carnet='$carnet'";

//   return ejecutarConsultaSimpleFila($sql);

// }


 //inplementar un metodo para insertar registros incluire el carnet no  funciona agregado para cualquier cambio
  public function insertar($carnet,$idasistencia,$foto,$nombre,$apellido,$fechanac,$idsexo,$idgrado,$telefono,$direccion,$encargado,$nie,$seccion,$salud,$trabajo,$mama,$papa,$codfam,$repetidor)
  {
         $sql = "INSERT INTO alumnos (carnet,idasistencia,foto,nombre,apellido,fechanac,idsexo,idgrado,telefono,direccion,encargado,nie,salud,trabajo,mama,papa,codfam,repetidor)
         VALUES('$carnet','$idasistencia','$foto','$nombre','$apellido','$fechanac','$idsexo','$idgrado','$telefono','$direccion','$encargado','$nie','$salud','$trabajo','$mama','$papa','$codfam','$repetidor')";
  
    $idcarnet=ejecutarConsulta_retornarID($sql);



              $num_elementos=0;
              $sw=true;

              while ($num_elementos < count($materias))
              {
                  $sql_notas = "INSERT INTO notas(carnet,idmaterias) VALUES('$idcarnet', '$materias[$num_elementos]')";
                  ejecutarConsulta($sql_notas) or $sw=false;

                  $num_elementos=$num_elementos + 1;
              }

              return $sw;
            

  }









   //inplementar un metodo para editar registros
public function editar($carnet,$idasistencia,$foto,$nombre,$apellido,$fechanac,$idsexo,$idgrado,$telefono,$direccion,$encargado,$nie,$seccion,$salud,$trabajo,$mama,$papa,$codfam,$repetidor,$materias)
  {
         $sql = "UPDATE alumnos SET idasistencia='$idasistencia', foto='$foto', nombre='$nombre', apellido='$apellido', fechanac='$fechanac', idsexo='$idsexo', idgrado='$idgrado', telefono='$telefono', direccion='$direccion', encargado='$encargado', nie='$nie', seccion='$seccion', salud='$salud', trabajo='$trabajo', mama='$mama', papa='$papa', codfam='$codfam', repetidor='$repetidor' WHERE carnet='$carnet' ";
                  ejecutarConsulta($sql);


   // Eliminamos todos los  materias asignados para volverlos a
              // registrar
              $sqldel="DELETE FROM notas WHERE carnet=$carnet";
              ejecutarConsulta($sqldel);

              $num_elementos=0;
              $sw=true;

              while ($num_elementos < count($materias))
              {
                  $sql_detalle = "INSERT INTO notas(carnet,idmaterias) VALUES('$carnet', '$materias[$num_elementos]')";
                  ejecutarConsulta($sql_detalle) or $sw=false;

                  $num_elementos=$num_elementos + 1;
              }

              return $sw;


	}





  public function nuevo($carnet,$foto,$nombre,$apellido,$fechanac,$idsexo,$idgrado,$telefono,$direccion,$encargado,$nie,$seccion,$salud,$trabajo,$mama,$papa,$codfam,$repetidor)
  {
         $sql = "INSERT INTO alumnos (carnet,foto,nombre,apellido,fechanac,idsexo,idgrado,telefono,direccion,encargado,nie,seccion,salud,trabajo,mama,papa,codfam,repetidor)
         VALUES('$carnet','$foto','$nombre','$apellido','$fechanac','$idsexo','$idgrado','$telefono','$direccion','$encargado','$nie','$seccion','$salud','$trabajo','$mama','$papa','$codfam','$repetidor')";
       

       return ejecutarConsulta($sql);
      // $idcarnetM=ejecutarConsulta_retornarID($sql);



      //         $num_elementos=0;
      //         $sw=true;

      //         while ($num_elementos < count($materias))
      //         {
      //             $sql_notas = "INSERT INTO notas(carnet,idmaterias) VALUES('$idcarnetM', '$materias[$num_elementos]')";
      //             ejecutarConsulta($sql_notas) or $sw=false;

      //             $num_elementos=$num_elementos + 1;
      //         }

      //         return $sw;
         

  }




// funcion para introducir la conducta
  public function conducta($carnet)
  {
    
         
         $sql="INSERT INTO conducta (carnet) VALUES('$carnet')";
          return ejecutarConsulta($sql);

  }






 //inplementar un metodo para desactivar alumnos
public function desactivar($carnet)
{
  $sql = "UPDATE alumnos SET estado='0' WHERE carnet='$carnet'";
    return ejecutarConsulta($sql);

}


//inplementar un metodo para activar alumnos
public function activar($carnet)
{
  $sql = "UPDATE alumnos SET estado='1' WHERE carnet='$carnet'";
    return ejecutarConsulta($sql);

}


//inplementar un metodo para eliminar alumnos
public function eliminar($carnet)
{
  $sql = "DELETE FROM alumnos WHERE carnet='$carnet'";
    return ejecutarConsulta($sql);

}


//inplementar un metodo para eliminarConducta 
public function eliminarConducta($carnet)
{
  $sql = "DELETE FROM conducta WHERE carnet='$carnet'";
    return ejecutarConsulta($sql);

}



//inplementar un metodo para eliminarNotas
public function eliminarNotas($carnet)
{
  $sql = "DELETE FROM notas WHERE carnet='$carnet'";
    return ejecutarConsulta($sql);

}



//inplementar un metodo para eliminarNotas
public function eliminarAsistencias($carnet)
{
  $sql = "DELETE FROM asistencia WHERE carnet='$carnet'";
    return ejecutarConsulta($sql);

}








//inplementar un metodo para mostrar  registros a modificar
public function mostrar($carnet)
{
	$sql= "SELECT * FROM alumnos WHERE carnet='$carnet'";
	return ejecutarConsultaSimpleFila($sql);
}


//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT a.carnet,x.idsexo,x.nombre_sexo as sexo, g.idgrado,g.nombre_grado as grado, a.foto,a.nombre,a.apellido,a.fechanac,a.idsexo,a.idgrado,a.telefono,a.direccion, a.encargado, a.nie, a.seccion, a.salud, a.trabajo, a.mama, a.papa, a.codfam, a.repetidor, a.estado FROM alumnos a INNER JOIN sexo x INNER JOIN grado g ON x.idsexo=a.idsexo AND g.idgrado=a.idgrado";
	return ejecutarConsulta($sql);

}




//inplementar un metodo  para listar  las materias marcadas
public function listarMmarcadas($carnet)
{
  $sql="SELECT * FROM notas WHERE carnet='$carnet' ORDER BY idmaterias DESC";
  return ejecutarConsulta($sql);

}











}






 ?>