<?php 

require_once "../../modelos/editablas/ModeloSexo.php";

// se crea la istancia $sexo
$sexo=new Sexo();
// si existe el idsexo
$idsexo=isset($_POST["idsexo"])? limpiarCadena($_POST["idsexo"]):"";
$nombre_sexo=isset($_POST["nombre_sexo"])? limpiarCadena($_POST["nombre_sexo"]):"";



switch($_GET["op"]){
	case 'guardaryeditar':
	     if(empty($idsexo)){
             $respuesta=$sexo->insertar($nombre_sexo);
             echo $respuesta ? "sexo registrado" : "sexo no se pudo registrar";
	     }
         else {
               $respuesta=$sexo->editar($idsexo,$nombre_sexo);
             echo $respuesta ? "sexo actulizado" : "sexo no se pudo actualizar";

         }
	break;

	
case 'eliminar':
           $respuesta=$sexo->eliminar($idsexo);
             echo $respuesta ? "sexo eliminado" : "sexo no se pudo eliminar";

  break;


    case'mostrar':
              $respuesta=$sexo->mostrar($idsexo);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;

     case'listar':
      $respuesta=$sexo->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>'<button class="bnt btn-warning " onclick="mostrar('.$reg->idsexo.')"><i class="fas fa-pencil-alt"></i></button>'.'    <button class="bnt btn-danger" onclick="eliminar('.$reg->idsexo.')"><i class="fas fa-times"></i></button><br>'.$reg->idsexo,
               "1" =>$reg->nombre_sexo
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
