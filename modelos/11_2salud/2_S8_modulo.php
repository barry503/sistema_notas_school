<?php 
// Este es el modelo de los notas para la notas


// modelo quimica y biologia
// llamo la variable global del grado
require 'varGlobal.php';



  

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class notas
{

// inplementamos nuestro constructor
  public function __construct()
  {
      


  }






 //inplementar un metodo para insertar registros 
  // Esta operacion no debe funcionar
  public function insertar($carnet,$EVA1P1,$EVA2P1,$EVA3P1,$EVA4P1,$EVA5P1,$NRP1,$EVA1P2,$EVA2P2,$EVA3P2,$EVA4P2,$EVA5P2,$NRP2,$EVA1P3,$EVA2P3,$EVA3P3,$EVA4P3,$EVA5P3,$NRP3,$EVA1P4,$EVA2P4,$EVA3P4,$EVA4P4,$EVA5P4,$NRP4,$NRFINAL,$NOTAFINAL)
  {
         $sql = "INSERT INTO notas (EVA1P1,EVA2P1,EVA3P1,EVA4P1,EVA5P1,NRP1,EVA1P2,EVA2P2,EVA3P2,EVA4P2,EVA5P2,NRP2,EVA1P3,EVA2P3,EVA3P3,EVA4P3,EVA5P3,NRP3,EVA1P4,EVA2P4,EVA3P4,EVA4P4,EVA5P4,NRP4,NRFINAL,NOTAFINAL)
         VALUES('$carnet','$EVA1P1','$EVA2P1','$EVA3P1','$EVA4P1','$EVA5P1','$NRP1','$EVA1P2','$EVA2P2','$EVA3P2','$EVA4P2','$EVA5P2','$NRP2','$EVA1P3','$EVA2P3','$EVA3P3','$EVA4P3','$EVA5P3','$NRP3','$EVA1P4','$EVA2P4','$EVA3P4','$EVA4P4','$EVA5P4','$NRP4','$NRFINAL','$NOTAFINAL')";
             return ejecutarConsulta($sql);

  }
 

// require_once ("../../config/conexionPDOcontacto.php");


   //inplementar un metodo para editar registros
public function editar($carnet,$EVA1P1,$EVA2P1,$EVA3P1,$EVA4P1,$EVA5P1,$NRP1,$EVA1P2,$EVA2P2,$EVA3P2,$EVA4P2,$EVA5P2,$NRP2,$EVA1P3,$EVA2P3,$EVA3P3,$EVA4P3,$EVA5P3,$NRP3,$EVA1P4,$EVA2P4,$EVA3P4,$EVA4P4,$EVA5P4,$NRP4,$NRFINAL,$NOTAFINAL)
  {

require_once ("../../config/conexionPDOcontacto.php");
$porcentaj = mysqli_query($coneion,"SELECT  * FROM porcentaje WHERE   id='1'");
 $por = mysqli_fetch_array($porcentaj);


 $p1= $por['p1'];
 $p2= $por['p2'];
 $p3= $por['p3'];
 $p4= $por['p4'];
 $p5= $por['p5'];

 // echo $p1.' '.$p2.','.$p3.','.$p4.' ,'.$p5;


require '../../modelos/ValoresNotas.php';




  global $S2_8modulo;
         $sql = "UPDATE notas SET carnet='$carnet',EVA1P1='$EVA1P1',EVA2P1='$EVA2P1',EVA3P1='$EVA3P1',EVA4P1='$EVA4P1',EVA5P1='$EVA5P1',NRP1='$NRP1',EVA1P2='$EVA1P2',EVA2P2='$EVA2P2',EVA3P2='$EVA3P2',EVA4P2='$EVA4P2',EVA5P2='$EVA5P2',NRP2='$NRP2',EVA1P3='$EVA1P3',EVA2P3='$EVA2P3',EVA3P3='$EVA3P3',EVA4P3='$EVA4P3',EVA5P3='$EVA5P3',NRP3='$NRP3',EVA1P4='$EVA1P4',EVA2P4='$EVA2P4',EVA3P4='$EVA3P4',EVA4P4='$EVA4P4',EVA5P4='$EVA5P4',NRP4='$NRP4',NRFINAL='$NRFINAL',NOTAFINAL='$NOTAFINAL' WHERE carnet='$carnet' AND idmaterias='$S2_8modulo' ";
             return ejecutarConsulta($sql);





  }







//inplementar un metodo para eliminar las notas de la materia
public function eliminar($carnet)
{
  

  global $S2_8modulo;
  $sql = "UPDATE notas SET EVA1P1='',EVA2P1='',EVA3P1='',EVA4P1='',EVA5P1='',NRP1='',EVA1P2='',EVA2P2='',EVA3P2='',EVA4P2='',EVA5P2='',NRP2='',EVA1P3='',EVA2P3='',EVA3P3='',EVA4P3='',EVA5P3='',NRP3='',EVA1P4='',EVA2P4='',EVA3P4='',EVA4P4='',EVA5P4='',NRP4='',NRFINAL='',NOTAFINAL='' WHERE carnet='$carnet' AND idmaterias='$S2_8modulo' ";
    return ejecutarConsulta($sql);

}




//inplementar un metodo para mostrar  registros a modificar
public function mostrar($carnet)
{
  require_once ("../../config/conexionPDOcontacto.php");
$porcentaj = mysqli_query($coneion,"SELECT  * FROM porcentaje WHERE   id='1' ");
 $por = mysqli_fetch_array($porcentaj);

 $p1= $por['p1'];
 $p2= $por['p2'];
 $p3= $por['p3'];
 $p4= $por['p4'];
 $p5= $por['p5'];


 
 global $gradS;
 

  global $S2_8modulo;

  $sql= "SELECT a.foto as fotografia, CONCAT(a.nombre,' , ',a.apellido)as NombreComplet, N.carnet, N.idmaterias,
N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,
N.EVA1P2/'$p1'as EVA1P2,N.EVA2P2/'$p2'as EVA2P2,N.EVA3P2/'$p3'as EVA3P2,N.EVA4P2/'$p4'as EVA4P2,N.EVA5P2/'$p5'as EVA5P2,N.NRP2,
N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,
N.EVA1P4/'$p1'as EVA1P4,N.EVA2P4/'$p2'as EVA2P4,N.EVA3P4/'$p3'as EVA3P4,N.EVA4P4/'$p4'as EVA4P4,N.EVA5P4/'$p5'as EVA5P4,N.NRP4,
N.NRFINAL,N.NOTAFINAL
FROM alumnos a INNER JOIN notas N ON N.carnet=a.carnet AND N.carnet='$carnet' AND a.idgrado='$gradS' AND N.idmaterias='$S2_8modulo'
";
  return ejecutarConsultaSimpleFila($sql);



}


//inplementar un metodo para listar  registros 
public function listar()
{
  global $gradS;

  global $S2_8modulo;
  
  $sql="SELECT a.estado, a.carnet, a.foto, a.seccion, CONCAT(a.nombre,' , ',a.apellido)as nombreya, N.carnet, N.idmaterias,
N.EVA1P1,N.EVA2P1,N.EVA3P1,N.EVA4P1,N.EVA5P1,N.NRP1,
N.EVA1P2,N.EVA2P2,N.EVA3P2,N.EVA4P2,N.EVA5P2,N.NRP2,
N.EVA1P3,N.EVA2P3,N.EVA3P3,N.EVA4P3,N.EVA5P3,N.NRP3,
N.EVA1P4,N.EVA2P4,N.EVA3P4,N.EVA4P4,N.EVA5P4,N.NRP4,
N.NRFINAL,N.NOTAFINAL,ma.idmaterias,ma.NOMMAT
FROM alumnos a INNER JOIN notas N INNER JOIN materias ma
ON N.carnet=a.carnet AND N.idmaterias=ma.idmaterias AND a.estado='1' AND a.idgrado='$gradS' AND N.idmaterias='$S2_8modulo'";


  return ejecutarConsulta($sql);

  








}





#fin de quimica y biologia = 10 en la base de datos 







}






 ?>