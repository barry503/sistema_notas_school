<?php 

require_once "../../modelos/editablas/ModeloPorcentaje.php";

// se crea la istancia $porcentaje
$porcentaje=new porcentaje();
// si existe el id
$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";


$p1=isset($_POST["p1"])? limpiarCadena($_POST["p1"]):"";
$p2=isset($_POST["p2"])? limpiarCadena($_POST["p2"]):"";
$p3=isset($_POST["p3"])? limpiarCadena($_POST["p3"]):"";
$p4=isset($_POST["p4"])? limpiarCadena($_POST["p4"]):"";
$p5=isset($_POST["p5"])? limpiarCadena($_POST["p5"]):"";





switch($_GET["op"]){
	case 'guardaryeditar':

 $porcenSuma=$p1+$p2+$p3+$p4+$p5;
// if provicional para que no registren mas porcentajes
if($id){
  if($porcenSuma == 100){


	     if(empty($id)){
             $respuesta=$porcentaje->insertar($p1,$p2,$p3,$p4,$p5);
             echo $respuesta ? "porcentaje registrado" : "porcentaje no se pudo registrar";
	     }
         else {
               $respuesta=$porcentaje->editar($id,$p1,$p2,$p3,$p4,$p5);
             echo $respuesta ? "porcentaje actulizado" : "porcentaje no se pudo actualizar";

         }

          }else{

            echo "El porcentaje debe ser igual a 100";
          }

}else{
 echo "Solo puede existir un  registro <br> de los porcentajes de las actividades";
}

	break;


	
case 'eliminar':
           $respuesta=$porcentaje->eliminar($id);
             echo $respuesta ? "porcentaje eliminado" : "porcentaje no se pudo eliminar";

  break;


    case'mostrar':
              $respuesta=$porcentaje->mostrar($id);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;

     case'listar':
      $respuesta=$porcentaje->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>'<button class="bnt btn-warning " onclick="mostrar('.$reg->id.')"><i class="fas fa-pencil-alt"></i></button>'.'    <button class="bnt btn-danger" onclick="eliminar('.$reg->id.')"><i class="fas fa-times"></i></button><br>'.$reg->id,
               "1" =>$reg->p1.'%',
               "2" =>$reg->p2.'%',
               "3" =>$reg->p3.'%',
               "4" =>$reg->p4.'%',
               "5" =>$reg->p5.'%'
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
