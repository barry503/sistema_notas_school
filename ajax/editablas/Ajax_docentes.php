<?php 

require_once "../../modelos/editablas/ModeloDocentes.php";

// se crea la istancia $docentes
$docentes=new Docentes();
// si existe el iddocentes
$iddocentes=isset($_POST["iddocentes"])? limpiarCadena($_POST["iddocentes"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$apellido=isset($_POST["apellido"])? limpiarCadena($_POST["apellido"]):"";


switch($_GET["op"]){
	case 'guardaryeditar':
	     if(empty($iddocentes)){
             $respuesta=$docentes->insertar($nombre,$apellido);
             echo $respuesta ? "docente registrado" : "docente no se pudo registrar";
	     }
         else {
               $respuesta=$docentes->editar($iddocentes,$nombre,$apellido);
             echo $respuesta ? "docente actulizado" : "docente no se pudo actualizar";

         }
	break;

	case 'desactivar':
           $respuesta=$docentes->desactivar($iddocentes);
             echo $respuesta ? "docente Desactivado" : "docente no se pudo desactivar";

  break;

  case 'activar':

       $respuesta=$docentes->activar($iddocentes);
             echo $respuesta ? "docente disponible" : "docente no se pudo activar";

    break;


case 'eliminar':
           $respuesta=$docentes->eliminar($iddocentes);
             echo $respuesta ? "docente eliminado" : "docente no se pudo eliminar";

  break;


    case'mostrar':
              $respuesta=$docentes->mostrar($iddocentes);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;

     case'listar':
      $respuesta=$docentes->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>($reg->condicion)?'<button title="Editar" class="bnt btn-warning " onclick="mostrar('.$reg->iddocentes.')"><i class="fas fa-pencil-alt"></i></button>    '.
             '<button title="desactivar el docente" class="bnt btn-danger " onclick="desactivar('.$reg->iddocentes.')"><i class="fas fa-times"></i></button><br>'.$reg->iddocentes :'<button title="Editar docente inactivo" class="bnt btn-warning " onclick="mostrar('.$reg->iddocentes.')"><i class="fa fa-edit"></i></button>    '.
             '<button title="activar el docente" class="bnt  btn-info " onclick="activar('.$reg->iddocentes.')"><i class="fas fa-check"></i></button>'.'    <button class="bnt btn-danger" title="Eliminar al docente por completo" onclick="eliminar('.$reg->iddocentes.')"><i class="fas fa-trash"></i></button><br>'.$reg->iddocentes,
               "1" =>$reg->nombre,
               "2" =>$reg->apellido,
                "3" =>($reg->condicion)?'<span class="label bg-green">disponible<span>': '<span class="label bg-red">inactivo<span>'
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
