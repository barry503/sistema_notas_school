<?php 

require_once "../../modelos/editablas/ModeloGrado.php";

// se crea la istancia $grado
$grado=new Grado();
// si existe el idgrado
$idgrado=isset($_POST["idgrado"])? limpiarCadena($_POST["idgrado"]):"";
$nombre_grado=isset($_POST["nombre_grado"])? limpiarCadena($_POST["nombre_grado"]):"";
$descripcion_grado=isset($_POST["descripcion_grado"])? limpiarCadena($_POST["descripcion_grado"]):"";
// $idturno=isset($_POST["idturno"])? limpiarCadena($_POST["idturno"]):"";
$seccion=isset($_POST["seccion"])? limpiarCadena($_POST["seccion"]):"";
$iddocentes=isset($_POST["iddocentes"])? limpiarCadena($_POST["iddocentes"]):"";





switch($_GET["op"]){
	case 'guardaryeditar':
	     if(empty($idgrado)){
             $respuesta=$grado->insertar($idgrado,$nombre_grado,$descripcion_grado,$seccion,$iddocentes);
             echo $respuesta ? "Grado registrado" : "Grado no se pudo registrar";
	     }
         else {
               $respuesta=$grado->editar($idgrado,$nombre_grado,$descripcion_grado,$seccion,$iddocentes);
             echo $respuesta ? "Grado actulizado" : "Grado no se pudo actualizar";

         }
	break;

case 'nuevo':

$respuesta=$grado->nuevo($idgrado,$nombre_grado,$descripcion_grado,$seccion,$iddocentes);
             echo $respuesta ? "Grado registrado" : "Grado no se pudo registrar";

  break;
  


	case 'desactivar':
           $respuesta=$grado->desactivar($idgrado);
             echo $respuesta ? "Grado Desactivado" : "Grado no se pudo desactivar";

  break;


  case 'activar':

       $respuesta=$grado->activar($idgrado);
             echo $respuesta ? "Grado activado" : "Grado no se pudo activar";

    break;


case 'eliminar':
           $respuesta=$grado->eliminar($idgrado);
             echo $respuesta ? "Grado eliminado" : "Grado no se pudo eliminar";

  break;


    case'mostrar':
              $respuesta=$grado->mostrar($idgrado);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;

     case'listar':
      $respuesta=$grado->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>($reg->condicion)?'<button title="Editar" class="bnt btn-warning " onclick="mostrar('.$reg->idgrado.')"><i class="fas fa-pencil-alt"></i></button>    '.
             '<button title="desactivar el grado" class="bnt btn-danger " onclick="desactivar('.$reg->idgrado.')"><i class="fas fa-times"></i></button><br>'.$reg->idgrado :'<button title="Editar grado inactivo" class="bnt btn-warning " onclick="mostrar('.$reg->idgrado.')"><i class="fa fa-edit"></i></button>    '.
             '<button title="activar el grado" class="bnt  btn-info " onclick="activar('.$reg->idgrado.')"><i class="fas fa-check"></i></button>'.'    <button class="bnt btn-danger" title="Eliminar al grado por completo" onclick="eliminar('.$reg->idgrado.')"><i class="fas fa-trash"></i></button><br>'.$reg->idgrado,
               "1" =>$reg->nombre_grado,
               "2" =>$reg->descripcion_grado,
               "3" =>$reg->seccion,
                "4" =>$reg->docentes,
                "5" =>($reg->condicion)?'<span class="label bg-green">grado disponible<span>': '<span class="label bg-red">grado desactivado<span>'
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



  case "selectDocentes1":
    
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
