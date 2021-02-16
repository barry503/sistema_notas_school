<?php 

require_once "../../modelos/editablas/ModeloOrientadores.php";

// se crea la istancia $orientadores
$orientadores=new orientadores();
// si existe el id
$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";


$iddocentes=isset($_POST["iddocentes"])? limpiarCadena($_POST["iddocentes"]):"";


$idgrado=isset($_POST["idgrado"])? limpiarCadena($_POST["idgrado"]):"";





switch($_GET["op"]){
	case 'guardaryeditar':
	     if(empty($id)){
             $respuesta=$orientadores->insertar($iddocentes,$idgrado);
             echo $respuesta ? "orientador registrado" : "orientador no se pudo registrar";
	     }
         else {
               $respuesta=$orientadores->editar($id,$iddocentes,$idgrado);
             echo $respuesta ? "orientador actulizado" : "orientador no se pudo actualizar";

         }
	break;


  

case 'eliminar':
           $respuesta=$orientadores->eliminar($id);
             echo $respuesta ? "orientador eliminado" : "orientador no se pudo eliminar";

  break;


    case'mostrar':
              $respuesta=$orientadores->mostrar($id);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;



     case'listar':
      $respuesta=$orientadores->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>'<button class="bnt btn-warning " onclick="mostrar('.$reg->id.')"><i class="fas fa-pencil-alt"></i></button>'.'    <button class="bnt btn-danger" onclick="eliminar('.$reg->id.')"><i class="fas fa-times"></i></button><br>'.$reg->id,
               "1" =>$reg->docente,
               "2" =>$reg->grado
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





// este case sirve para agregar todos los grados en el formulario del orientador
     case "selectGrado":
    
       require_once "../../modelos/editablas/ModeloGrado.php";
    $grado = new Grado();

    $respuesta = $grado->selectGrado();
   while($reg = $respuesta->fetch_object())

   {

    echo '<option value=' . $reg->idgrado .'>' . $reg->nombre_grado . '</option>';

   }

    break;






}









 ?>
