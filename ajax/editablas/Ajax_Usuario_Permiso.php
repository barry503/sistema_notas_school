<?php 

require_once "../../modelos/editablas/ModeloUsuariosPermiso.php";

// se crea la istancia $usuario_permiso
$usuario_permiso=new usuario_permiso();


// si existe el idusuario_permiso
$idusuario_permiso=isset($_POST["idusuario_permiso"])? limpiarCadena($_POST["idusuario_permiso"]):"";


$idusuario=isset($_POST["idusuario"])? limpiarCadena($_POST["idusuario"]):"";
$idpermiso=isset($_POST["idpermiso"])? limpiarCadena($_POST["idpermiso"]):"";


switch($_GET["op"]){
  case 'guardaryeditar':

       if(empty($idusuario_permiso)){
             $respuesta=$usuario_permiso->insertar($idusuario,$idpermiso);
             echo $respuesta ? "Permiso del usuario registrado" : "El Permiso del usuario no se pudo registrar";
       }
         else {
               $respuesta=$usuario_permiso->editar($idusuario_permiso,$idusuario,$idpermiso);
             echo $respuesta ? "Permiso del usuario actulizado" : "Permiso del usuario no se pudo actualizar";

         }
  break;


case 'eliminar':
           $respuesta=$usuario_permiso->eliminar($idusuario_permiso);
             echo $respuesta ? "Permiso del usuario eliminado" : "Permiso del usuario no se pudo eliminar";

  break;




    case'mostrar':
              $respuesta=$usuario_permiso->mostrar($idusuario_permiso);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;




     case'listar':
      $respuesta=$usuario_permiso->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>'<button title="Editar el permiso del usuario" class="bnt btn-warning " onclick="mostrar('.$reg->idusuario_permiso.')"><i class="fas fa-pencil-alt"></i></button>'.'<button class="bnt btn-danger" title="Eliminar a el permiso del usuario por completo" onclick="eliminar('.$reg->idusuario_permiso.')"><i class="fas fa-trash"></i></button><br>'.$reg->idusuario_permiso,
               "1"=>$reg->nombre_usuario,
               "2" =>$reg->usuario,
               "3" =>$reg->nombre_permiso
                
              );

       }

       $results = array(
         "sEcho" =>1, //informacion para el datatables
          "iTotalRecords" =>count($data), //enviamos el total registros al datatable
           "iTotalDisplayRecords" =>count($data), //enviamos el total registros a           visualizar
           "aaData"=>$data);

       echo json_encode($results);
    break;


case "selectUsuarios":
    
    require_once "../../modelos/editablas/ModeloUsuariosPermiso.php";
    $selUsuario = new usuario_permiso();

    $respuesta = $selUsuario->selectUsuarios();
   while($reg = $respuesta->fetch_object())

   {

    echo '<option value=' . $reg->idusuario .'>' . $reg->nombre,' , ',$reg->apellido . '</option>';

   }

    break;

case "selectPermisos":
    
    require_once "../../modelos/editablas/ModeloUsuariosPermiso.php";
    $perUsuario = new usuario_permiso();

    $respuesta = $perUsuario->selectPermisos();
   while($reg = $respuesta->fetch_object())

   {

    echo '<option value=' . $reg->idpermiso .'>' . $reg->nombre . '</option>';

   }

    break;




    

}





 ?>
