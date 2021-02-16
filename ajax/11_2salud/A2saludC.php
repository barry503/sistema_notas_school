<?php 
require 'AgreUrl.php';

require_once "../../modelos/$Carpegrado/$gradoConducta.php";

// se crea la istancia $conducta
$conducta=new conducta();


/* todos los campos enviados desde el archivo javascript  dentro de la carpeta vistas/scripts */
// si existe el carnet o identificador del carnet
$carnet=isset($_POST["carnet"])? limpiarCadena($_POST["carnet"]):"";

// PERIODO 1 
$CDCA1P1=isset($_POST["CDCA1P1"])? limpiarCadena($_POST["CDCA1P1"]):""; 
$CDCA2P1=isset($_POST["CDCA2P1"])? limpiarCadena($_POST["CDCA2P1"]):"";
$CDCA3P1=isset($_POST["CDCA3P1"])? limpiarCadena($_POST["CDCA3P1"]):"";
$CDCA4P1=isset($_POST["CDCA4P1"])? limpiarCadena($_POST["CDCA4P1"]):"";
$CDCA5P1=isset($_POST["CDCA5P1"])? limpiarCadena($_POST["CDCA5P1"]):"";
$CDCA6P1=isset($_POST["CDCA6P1"])? limpiarCadena($_POST["CDCA6P1"]):"";   


// PERIODO 2 

$CDCA1P2=isset($_POST["CDCA1P2"])? limpiarCadena($_POST["CDCA1P2"]):""; 
$CDCA2P2=isset($_POST["CDCA2P2"])? limpiarCadena($_POST["CDCA2P2"]):"";
$CDCA3P2=isset($_POST["CDCA3P2"])? limpiarCadena($_POST["CDCA3P2"]):"";
$CDCA4P2=isset($_POST["CDCA4P2"])? limpiarCadena($_POST["CDCA4P2"]):"";
$CDCA5P2=isset($_POST["CDCA5P2"])? limpiarCadena($_POST["CDCA5P2"]):"";
$CDCA6P2=isset($_POST["CDCA6P2"])? limpiarCadena($_POST["CDCA6P2"]):"";



// PERIODO 3 

$CDCA1P3=isset($_POST["CDCA1P3"])? limpiarCadena($_POST["CDCA1P3"]):""; 
$CDCA2P3=isset($_POST["CDCA2P3"])? limpiarCadena($_POST["CDCA2P3"]):"";
$CDCA3P3=isset($_POST["CDCA3P3"])? limpiarCadena($_POST["CDCA3P3"]):"";
$CDCA4P3=isset($_POST["CDCA4P3"])? limpiarCadena($_POST["CDCA4P3"]):"";
$CDCA5P3=isset($_POST["CDCA5P3"])? limpiarCadena($_POST["CDCA5P3"]):"";
$CDCA6P3=isset($_POST["CDCA6P3"])? limpiarCadena($_POST["CDCA6P3"]):"";
   







// PERIODO 4 

$CDCA1P4=isset($_POST["CDCA1P4"])? limpiarCadena($_POST["CDCA1P4"]):"";       
$CDCA2P4=isset($_POST["CDCA2P4"])? limpiarCadena($_POST["CDCA2P4"]):"";      
$CDCA3P4=isset($_POST["CDCA3P4"])? limpiarCadena($_POST["CDCA3P4"]):"";      
$CDCA4P4=isset($_POST["CDCA4P4"])? limpiarCadena($_POST["CDCA4P4"]):"";      
$CDCA5P4=isset($_POST["CDCA5P4"])? limpiarCadena($_POST["CDCA5P4"]):"";   
$CDCA6P4=isset($_POST["CDCA6P4"])? limpiarCadena($_POST["CDCA6P4"]):"";



// fin de todos los campos enviados 




/* este switch realiza todas las operaciones que se resiben por medio de get que contiene  el nombre de op acronimo de operacion */
switch($_GET["op"]){

  // caso para editar carnet.
  case 'guardaryeditar':
  
// si existe la variable $carnet ejecuta insertar carnet
   if(empty($carnet)){
             $respuesta=$conducta->insertar($carnet,$CDCA1P1,$CDCA2P1,$CDCA3P1,$CDCA4P1,$CDCA5P1,$CDCA6P1,$CDCA1P2,$CDCA2P2,$CDCA3P2,$CDCA4P2,$CDCA5P2,$CDCA6P2,$CDCA1P3,$CDCA2P3,$CDCA3P3,$CDCA4P3,$CDCA5P3,$CDCA6P3,$CDCA1P4,$CDCA2P4,$CDCA3P4,$CDCA4P4,$CDCA5P4,$CDCA6P4);
             echo $respuesta ? "Conducta registrada" : "la conducta  no se pudo registrar";
       }
         else {
               $respuesta=$conducta->editar($carnet,$CDCA1P1,$CDCA2P1,$CDCA3P1,$CDCA4P1,$CDCA5P1,$CDCA6P1,$CDCA1P2,$CDCA2P2,$CDCA3P2,$CDCA4P2,$CDCA5P2,$CDCA6P2,$CDCA1P3,$CDCA2P3,$CDCA3P3,$CDCA4P3,$CDCA5P3,$CDCA6P3,$CDCA1P4,$CDCA2P4,$CDCA3P4,$CDCA4P4,$CDCA5P4,$CDCA6P4);
             echo $respuesta ? "Conducta actulizada" : "la conducta no se pudo actualizar";

         }
  break;






// caso para eliminar el carnet
case 'eliminar':
           $respuesta=$conducta->eliminar($carnet);
             echo $respuesta ? "Conducta eliminada" : "Conducta no se pudo eliminar";



  break;





// caso para mostrar el carnet en el formulario para editar
    case'mostrar':
              $respuesta=$conducta->mostrar($carnet);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;


// caso para listar el carnet
     case'listar':

     // la variable $respuesta llama a la clase $conducta ala funcion  listar
      $respuesta=$conducta->listar();

      // vamos a declarar un array o arreglo
       $data= Array(); 

 /* este ciclo recorre todos los  objetos o datos traidos 
      de la funcion listar guardados en la variable respuesta */
       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>'<button title="Editar conducta" class="bnt btn-warning " onclick="mostrar('.$reg->carnet.')"><i class="fas fa-pencil-alt"></i></button><button class="bnt btn-danger" title="Eliminar la conducta completo" onclick="eliminar('.$reg->carnet.')"><i class="fas fa-trash"></i></button><br>'.$reg->carnet,
               "1" =>"<img src='../files/alumnos/".$reg->foto."' height='110px' width='110px'>",
               "2" =>$reg->nombreya,
               "3" =>$reg->seccion,
               "4" =>$reg->CDCA1P1,
               "5" =>$reg->CDCA2P1,
               "6" =>$reg->CDCA3P1,
               "7" =>$reg->CDCA4P1,
               "8" =>$reg->CDCA5P1,
               "9" =>$reg->CDCA6P1,
               "10" =>$reg->CDCA1P2,
               "11" =>$reg->CDCA2P2,
               "12" =>$reg->CDCA3P2,
               "13" =>$reg->CDCA4P2,
               "14" =>$reg->CDCA5P2,
               "15" =>$reg->CDCA6P2,
               "16" =>$reg->CDCA1P3,
               "17" =>$reg->CDCA2P3,
               "18" =>$reg->CDCA3P3,
               "19" =>$reg->CDCA4P3,
               "20" =>$reg->CDCA5P3,
               "21" =>$reg->CDCA6P3,
               "22" =>$reg->CDCA1P4,
               "23" =>$reg->CDCA2P4,
               "24" =>$reg->CDCA3P4,
               "25" =>$reg->CDCA4P4,
               "26" =>$reg->CDCA5P4,
               "27" =>$reg->CDCA6P4
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

