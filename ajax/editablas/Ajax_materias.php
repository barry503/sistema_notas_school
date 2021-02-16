<?php 

require_once "../../modelos/editablas/ModeloMaterias.php";

// se crea la istancia $materias
$materias=new materias();


// si existe el idmaterias
$idmaterias=isset($_POST["idmaterias"])? limpiarCadena($_POST["idmaterias"]):"";

$CODMAT=isset($_POST["CODMAT"])? limpiarCadena($_POST["CODMAT"]):"";

$iddocentes=isset($_POST["iddocentes"])? limpiarCadena($_POST["iddocentes"]):"";

$NOMMAT=isset($_POST["NOMMAT"])? limpiarCadena($_POST["NOMMAT"]):"";


switch($_GET["op"]){
	case 'guardaryeditar':
	     if(empty($idmaterias)){
             $respuesta=$materias->insertar($CODMAT,$iddocentes,$NOMMAT);
             echo $respuesta ? "Materia registrada" : "La materia no se pudo registrar";
	     }
         else {
               $respuesta=$materias->editar($idmaterias,$CODMAT,$iddocentes,$NOMMAT);
             echo $respuesta ? "Materia actulizada" : "Materia no se pudo actualizar";

         }
	break;

	case 'desactivar':
           $respuesta=$materias->desactivar($idmaterias);
             echo $respuesta ? "materia Desactivada" : "materia no se pudo desactivar";

  break;



  case 'activar':

       $respuesta=$materias->activar($idmaterias);
             echo $respuesta ? "materia disponible" : "materia no se pudo activar";

    break;




case 'eliminar':
           $respuesta=$materias->eliminar($idmaterias);
             echo $respuesta ? "materia eliminada" : "materia no se pudo eliminar";

  break;




    case'mostrar':
              $respuesta=$materias->mostrar($idmaterias);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;




     case'listar':
      $respuesta=$materias->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>($reg->condicion)?'<button title="Editar la materia" class="bnt btn-warning " onclick="mostrar('.$reg->idmaterias.')"><i class="fas fa-pencil-alt"></i></button>    '.
             '<button title="desactivar la materia" class="bnt btn-danger " onclick="desactivar('.$reg->idmaterias.')"><i class="fas fa-times"></i></button><br>'.$reg->idmaterias :'<button title="Editar la materia inactivo" class="bnt btn-warning " onclick="mostrar('.$reg->idmaterias.')"><i class="fa fa-edit"></i></button>    '.
             '<button title="activar la materia" class="bnt  btn-info " onclick="activar('.$reg->idmaterias.')"><i class="fas fa-check"></i></button>'.'    <button class="bnt btn-danger" title="Eliminar a la materia por completo" onclick="eliminar('.$reg->idmaterias.')"><i class="fas fa-trash"></i></button><br>'.$reg->idmaterias,
               "1" =>$reg->CODMAT,
               "2" =>$reg->NOMMAT,
               "3" =>$reg->docente,
                "4" =>($reg->condicion)?'<span class="label bg-green">disponible<span>': '<span class="label bg-red">inactivo<span>'
              );

       }

       $results = array(
         "sEcho" =>1, //informacion para el datatables
          "iTotalRecords" =>count($data), //enviamos el total registros al datatable
           "iTotalDisplayRecords" =>count($data), //enviamos el total registros a           visualizar
           "aaData"=>$data);

       echo json_encode($results);
    break;





  case "selectDocentes":
    
    require_once "../../modelos/editablas/ModeloDocentes.php";
    $docentes = new Docentes();

    $respuesta = $docentes->selectDocentes();
   while($reg = $respuesta->fetch_object())

   {

    echo '<option value=' . $reg->iddocentes .'>' . $reg->nombre . '</option>';

   }

    break;


    

}












 ?>
