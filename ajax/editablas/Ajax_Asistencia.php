<?php 

require_once "../../modelos/editablas/ModeloAsistencia.php";

// se crea la istancia $asistencia
$asistencia=new Asistencia();
// si existe el idasistencia
$idasistencia=isset($_POST["idasistencia"])? limpiarCadena($_POST["idasistencia"]):"";

$idasistencia=isset($_POST["idasistencia"])? limpiarCadena($_POST["idasistencia"]):"";

$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";

$Hfecha=isset($_POST["Hfecha"])? limpiarCadena($_POST["Hfecha"]):"";



switch($_GET["op"]){
	case 'guardaryeditar':
 

               $respuesta=$asistencia->editar($idasistencia,$carnet,$fecha,$Hfecha);
             echo $respuesta ? "asistencia actualizada" : "asistencia no se pudo actualizar";

         
	break;

   


case 'eliminar':
           $respuesta=$asistencia->eliminar($idasistencia);
             echo $respuesta ? "asistencia eliminada" : "asistencia no se pudo eliminar";

  break;




    case'mostrar':
              $respuesta=$asistencia->mostrar($idasistencia);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;



     case'listar':
      $respuesta=$asistencia->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>'<button title="Editar asistencia (aunque modifiques los datos no cambiaran)" class="bnt btn-warning " onclick="mostrar('.$reg->idasistencia.')"><i class="fa fa-edit"></i></button>    '.'    <button class="bnt btn-danger" title="Eliminar la asistencia por completo" onclick="eliminar('.$reg->idasistencia.')"><i class="fas fa-trash"></i></button><br>'.$reg->idasistencia,
               "1" =>"<img src='../files/alumnos/".$reg->foto."' height='110px' width='110px'>",
               "2" =>$reg->carnet,
               "3" =>$reg->nombres,
               "4" =>$reg->fecha,
               "5" =>$reg->Hfecha,
               "6" =>$reg->grado,
                "7" =>($reg->estado)?'<span title="El alumno si asiste a clases" class="label bg-green">activo<span>': '<span class="label bg-red"  title="El alumno no asiste a clases" >inactivo<span>'
              );

       }

       $results = array(
         "sEcho" =>1, //informacion para el datatables
          "iTotalRecords" =>count($data), //enviamos el total registros al datatable
           "iTotalDisplayRecords" =>count($data), //enviamos el total registros a           visualizar
           "aaData"=>$data);

       echo json_encode($results);
    break;




    
    




}









 ?>
