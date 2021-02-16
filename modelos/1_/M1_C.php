<?php 
// Este es el modelo de los conducta para la conducta



// conducta

// llamo la variable global del grado
require 'varGlobal.php';

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class conducta
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}


// public function verificar($carnet){

//   $sql= "SELECT * FROM alumnos WHERE carnet='$carnet'";

//   return ejecutarConsultaSimpleFila($sql);

// }


 //inplementar un metodo para insertar registros incluire el carnet si funciona
  public function insertar($carnet,$CDCA1P1,$CDCA2P1,$CDCA3P1,$CDCA4P1,$CDCA5P1,$CDCA6P1,$CDCA1P2,$CDCA2P2,$CDCA3P2,$CDCA4P2,$CDCA5P2,$CDCA6P2,$CDCA1P3,$CDCA2P3,$CDCA3P3,$CDCA4P3,$CDCA5P3,$CDCA6P3,$CDCA1P4,$CDCA2P4,$CDCA3P4,$CDCA4P4,$CDCA5P4,$CDCA6P4)
  {
         $sql = "INSERT INTO conducta (CDCA1P1,CDCA2P1,CDCA3P1,CDCA4P1,CDCA5P1,CDCA6P1,CDCA1P2,CDCA2P2,CDCA3P2,CDCA4P2,CDCA5P2,CDCA6P2,CDCA1P3,CDCA2P3,CDCA3P3,CDCA4P3,CDCA5P3,CDCA6P3,CDCA1P4,CDCA2P4,CDCA3P4,CDCA4P4,CDCA5P4,CDCA6P4)
         VALUES('$carnet','$CDCA1P1','$CDCA2P1','$CDCA3P1','$CDCA4P1','$CDCA5P1','$CDCA6P1','$CDCA1P2','$CDCA2P2','$CDCA3P2','$CDCA4P2','$CDCA5P2','$CDCA6P2','$CDCA1P3','$CDCA2P3','$CDCA3P3','$CDCA4P3','$CDCA5P3','$CDCA6P3','$CDCA1P4','$CDCA2P4','$CDCA3P4','$CDCA4P4','$CDCA5P4','$CDCA6P4')";
             return ejecutarConsulta($sql);

  }



   //inplementar un metodo para editar registros
public function editar($carnet,$CDCA1P1,$CDCA2P1,$CDCA3P1,$CDCA4P1,$CDCA5P1,$CDCA6P1,$CDCA1P2,$CDCA2P2,$CDCA3P2,$CDCA4P2,$CDCA5P2,$CDCA6P2,$CDCA1P3,$CDCA2P3,$CDCA3P3,$CDCA4P3,$CDCA5P3,$CDCA6P3,$CDCA1P4,$CDCA2P4,$CDCA3P4,$CDCA4P4,$CDCA5P4,$CDCA6P4)
  {
         $sql = "UPDATE conducta SET carnet='$carnet',CDCA1P1='$CDCA1P1',CDCA2P1='$CDCA2P1',CDCA3P1='$CDCA3P1',CDCA4P1='$CDCA4P1',CDCA5P1='$CDCA5P1',CDCA6P1='$CDCA6P1',CDCA1P2='$CDCA1P2',CDCA2P2='$CDCA2P2',CDCA3P2='$CDCA3P2',CDCA4P2='$CDCA4P2',CDCA5P2='$CDCA5P2',CDCA6P2='$CDCA6P2',CDCA1P3='$CDCA1P3',CDCA2P3='$CDCA2P3',CDCA3P3='$CDCA3P3',CDCA4P3='$CDCA4P3',CDCA5P3='$CDCA5P3',CDCA6P3='$CDCA6P3',CDCA1P4='$CDCA1P4',CDCA2P4='$CDCA2P4',CDCA3P4='$CDCA3P4',CDCA4P4='$CDCA4P4',CDCA5P4='$CDCA5P4',CDCA6P4='$CDCA6P4' WHERE carnet='$carnet' ";
             return ejecutarConsulta($sql);

	}







//inplementar un metodo para eliminar sexos
public function eliminar($carnet)
{
  $sql = "UPDATE conducta SET CDCA1P1='',CDCA2P1='',CDCA3P1='',CDCA4P1='',CDCA5P1='',CDCA6P1='',CDCA1P2='',CDCA2P2='',CDCA3P2='',CDCA4P2='',CDCA5P2='',CDCA6P2='',CDCA1P3='',CDCA2P3='',CDCA3P3='',CDCA4P3='',CDCA5P3='',CDCA6P3='',CDCA1P4='',CDCA2P4='',CDCA3P4='',CDCA4P4='',CDCA5P4='',CDCA6P4='' WHERE carnet='$carnet' ";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para mostrar  registros a modificar
public function mostrar($carnet)
{
	$sql= "SELECT a.foto as fotografia,CONCAT(a.nombre,' , ',a.apellido)as NombreComplet, c.carnet,
c.CDCA1P1,c.CDCA2P1,c.CDCA3P1,c.CDCA4P1,c.CDCA5P1,c.CDCA6P1,
c.CDCA1P2,c.CDCA2P2,c.CDCA3P2,c.CDCA4P2,c.CDCA5P2,c.CDCA6P2,
c.CDCA1P3,c.CDCA2P3,c.CDCA3P3,c.CDCA4P3,c.CDCA5P3,c.CDCA6P3,
c.CDCA1P4,c.CDCA2P4,c.CDCA3P4,c.CDCA4P4,c.CDCA5P4,c.CDCA6P4
FROM alumnos a INNER JOIN conducta c ON c.carnet=a.carnet AND c.carnet='$carnet'
";
	return ejecutarConsultaSimpleFila($sql);
}






//inplementar un metodo para listar  registros 
public function listar()
{

  global $gradS;

  
	$sql="SELECT a.carnet, a.foto, a.seccion, CONCAT(a.nombre,' , ',a.apellido)as nombreya, c.carnet,
c.CDCA1P1,c.CDCA2P1,c.CDCA3P1,c.CDCA4P1,c.CDCA5P1,c.CDCA6P1,
c.CDCA1P2,c.CDCA2P2,c.CDCA3P2,c.CDCA4P2,c.CDCA5P2,c.CDCA6P2,
c.CDCA1P3,c.CDCA2P3,c.CDCA3P3,c.CDCA4P3,c.CDCA5P3,c.CDCA6P3,
c.CDCA1P4,c.CDCA2P4,c.CDCA3P4,c.CDCA4P4,c.CDCA5P4,c.CDCA6P4
FROM alumnos a INNER JOIN conducta c ON c.carnet=a.carnet AND a.idgrado='$gradS'";
	return ejecutarConsulta($sql);

}













}






 ?>