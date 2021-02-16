<?php 

require_once "../../modelos/editablas/ModeloNotificaciones.php";

// se crea la istancia $notificacion
$notificacionM=new Notificacion();
// si existe el idnotificaciones
$idnotificaciones=isset($_POST["idnotificaciones"])? limpiarCadena($_POST["idnotificaciones"]):"";

$usuario=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):"";

$notificacion=isset($_POST["notificacion"])? limpiarCadena($_POST["notificacion"]):"";


$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";

$enlace=isset($_POST["enlace"])? limpiarCadena($_POST["enlace"]):"";



switch($_GET["op"]){
	case 'guardaryeditar':
	     if(empty($idnotificaciones)){
             $respuesta=$notificacionM->insertar($usuario,$notificacion,$enlace);
             echo $respuesta ? "notificacion registrada" : "notificacion no se pudo registrar";
	     }
         else {
               $respuesta=$notificacionM->editar($idnotificaciones,$usuario,$notificacion,$fecha,$enlace);
             echo $respuesta ? "notificacion actulizada" : "notificacion no se pudo actualizar";

         }
	break;

	
case 'eliminar':
           $respuesta=$notificacionM->eliminar($idnotificaciones);
             echo $respuesta ? "notificacion eliminada" : "notificacion no se pudo eliminar";

  break;


    case'mostrar':
              $respuesta=$notificacionM->mostrar($idnotificaciones);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;

     case'listar':
      $respuesta=$notificacionM->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>'<button class="bnt btn-warning " onclick="mostrar('.$reg->idnotificaciones.')"><i class="fas fa-pencil-alt"></i></button>'.'    <button class="bnt btn-danger" onclick="eliminar('.$reg->idnotificaciones.')"><i class="fas fa-times"></i></button><br>'.$reg->idnotificaciones,
               "1" =>$reg->usuario,
               "2" =>$reg->notificacion,
               "3" =>$reg->fecha,
               "4" =>$reg->enlace
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
