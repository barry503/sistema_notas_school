<?php 
require 'AgreUrl.php';
require_once "../../modelos/$Carpegrado/1_S4_modulo.php";

// se crea la istancia $notas
$notas=new notas();


/* todos los campos enviados desde el archivo javascript  dentro de la carpeta vistas/scripts */
// si existe el carnet o identificador del carnet
$carnet=isset($_POST["carnet"])? limpiarCadena($_POST["carnet"]):"";



// ___________________________________

// PERIODO 1 
$EVA1P1=isset($_POST["EVA1P1"])? limpiarCadena($_POST["EVA1P1"]):""; 
$EVA2P1=isset($_POST["EVA2P1"])? limpiarCadena($_POST["EVA2P1"]):"";
$EVA3P1=isset($_POST["EVA3P1"])? limpiarCadena($_POST["EVA3P1"]):"";
$EVA4P1=isset($_POST["EVA4P1"])? limpiarCadena($_POST["EVA4P1"]):"";
$EVA5P1=isset($_POST["EVA5P1"])? limpiarCadena($_POST["EVA5P1"]):"";
$NRP1=isset($_POST["NRP1"])? limpiarCadena($_POST["NRP1"]):""; 




// ___________________________________

// PERIODO 2 

$EVA1P2=isset($_POST["EVA1P2"])? limpiarCadena($_POST["EVA1P2"]):""; 
$EVA2P2=isset($_POST["EVA2P2"])? limpiarCadena($_POST["EVA2P2"]):"";
$EVA3P2=isset($_POST["EVA3P2"])? limpiarCadena($_POST["EVA3P2"]):"";
$EVA4P2=isset($_POST["EVA4P2"])? limpiarCadena($_POST["EVA4P2"]):"";
$EVA5P2=isset($_POST["EVA5P2"])? limpiarCadena($_POST["EVA5P2"]):"";
$NRP2=isset($_POST["NRP2"])? limpiarCadena($_POST["NRP2"]):"";







// ___________________________________

// PERIODO 3 

$EVA1P3=isset($_POST["EVA1P3"])? limpiarCadena($_POST["EVA1P3"]):""; 
$EVA2P3=isset($_POST["EVA2P3"])? limpiarCadena($_POST["EVA2P3"]):"";
$EVA3P3=isset($_POST["EVA3P3"])? limpiarCadena($_POST["EVA3P3"]):"";
$EVA4P3=isset($_POST["EVA4P3"])? limpiarCadena($_POST["EVA4P3"]):"";
$EVA5P3=isset($_POST["EVA5P3"])? limpiarCadena($_POST["EVA5P3"]):"";
$NRP3=isset($_POST["NRP3"])? limpiarCadena($_POST["NRP3"]):"";
   





// ___________________________________

// PERIODO 4 

$EVA1P4=isset($_POST["EVA1P4"])? limpiarCadena($_POST["EVA1P4"]):"";       
$EVA2P4=isset($_POST["EVA2P4"])? limpiarCadena($_POST["EVA2P4"]):"";      
$EVA3P4=isset($_POST["EVA3P4"])? limpiarCadena($_POST["EVA3P4"]):"";      
$EVA4P4=isset($_POST["EVA4P4"])? limpiarCadena($_POST["EVA4P4"]):"";      
$EVA5P4=isset($_POST["EVA5P4"])? limpiarCadena($_POST["EVA5P4"]):"";   
$NRP4=isset($_POST["NRP4"])? limpiarCadena($_POST["NRP4"]):"";






// __________________________________________________________________________________________________________________________________
 // campo nota final penultima
$NRFINAL=isset($_POST["NRFINAL"])? limpiarCadena($_POST["NRFINAL"]):"";





// campo nota final
$NOTAFINAL=isset($_POST["NOTAFINAL"])? limpiarCadena($_POST["NOTAFINAL"]):"";


// __________________________________________________________________________________________________________________________________








// fin de todos los campos enviados 




/* este switch realiza todas las operaciones que se resiben por medio de get que contiene  el nombre de op acronimo de operacion */
switch($_GET["op"]){

  // caso para editar carnet.
  case 'guardaryeditar':
  
// si existe la variable $carnet ejecuta insertar carnet
   if(empty($carnet)){
             $respuesta=$notas->insertar($carnet,$EVA1P1,$EVA2P1,$EVA3P1,$EVA4P1,$EVA5P1,$NRP1,$EVA1P2,$EVA2P2,$EVA3P2,$EVA4P2,$EVA5P2,$NRP2,$EVA1P3,$EVA2P3,$EVA3P3,$EVA4P3,$EVA5P3,$NRP3,$EVA1P4,$EVA2P4,$EVA3P4,$EVA4P4,$EVA5P4,$NRP4,$NRFINAL,$NOTAFINAL);
             echo $respuesta ? "nota registrada" : "no se puede registrar notas aqui <br>Debe existir un alumno.";
       }
         else {
               $respuesta=$notas->editar($carnet,$EVA1P1,$EVA2P1,$EVA3P1,$EVA4P1,$EVA5P1,$NRP1,$EVA1P2,$EVA2P2,$EVA3P2,$EVA4P2,$EVA5P2,$NRP2,$EVA1P3,$EVA2P3,$EVA3P3,$EVA4P3,$EVA5P3,$NRP3,$EVA1P4,$EVA2P4,$EVA3P4,$EVA4P4,$EVA5P4,$NRP4,$NRFINAL,$NOTAFINAL);
             echo $respuesta ? "notas actulizada" : "la notas no se pudo actualizar";

         }
  break;






// caso para eliminar el carnet
case 'eliminar':
           $respuesta=$notas->eliminar($carnet);
             echo $respuesta ? "Todas las notas se restablecieron satisfactoriamente" : "las notas nose pudieron eliminar";



  break;





// caso para mostrar el carnet en el formulario para editar
    case'mostrar':
              $respuesta=$notas->mostrar($carnet);



              //codificar el resultado json
             echo json_encode($respuesta); 
    break;


// caso para listar el carnet
     case'listar':


     // la variable $respuesta llama a la clase $notas ala funcion  listar
      $respuesta=$notas->listar();

      // vamos a declarar un array o arreglo
       $data= Array(); 

require_once ("../../config/conexionPDOcontacto.php");
$porcentaj = mysqli_query($coneion,"SELECT  * FROM porcentaje WHERE   id='1'");
 $por = mysqli_fetch_array($porcentaj);

 $p1= $por['p1'];
 $p2= $por['p2'];
 $p3= $por['p3'];
 $p4= $por['p4'];
 $p5= $por['p5'];


  /* este ciclo recorre todos los  objetos o datos traidos 
      de la funcion listar guardados en la variable respuesta */
       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>'<button title="Editar notas" class="bnt btn-warning " onclick="mostrar('.$reg->carnet.')"><i class="fas fa-pencil-alt"></i></button><button class="bnt btn-danger" title="Eliminar la notas completo" onclick="eliminar('.$reg->carnet.')"><i class="fas fa-trash"></i></button><br>'.$reg->carnet,
               "1" =>"<img src='../files/alumnos/".$reg->foto."' height='110px' width='110px'>",
               "2" =>$reg->nombreya,
               "3" =>$reg->seccion,
               "4" =>$reg->EVA1P1 / $p1,
               "5" =>$reg->EVA2P1 / $p2,
               "6" =>$reg->EVA3P1 / $p3,
               "7" =>$reg->EVA4P1 / $p4,
               "8" =>$reg->EVA5P1 / $p5,
               "9" =>$reg->NRP1,
               "10" =>$reg->EVA1P2 / $p1,
               "11" =>$reg->EVA2P2 / $p2,
               "12" =>$reg->EVA3P2 / $p3,
               "13" =>$reg->EVA4P2 / $p4,
               "14" =>$reg->EVA5P2 / $p5,
               "15" =>$reg->NRP2,
               "16" =>$reg->EVA1P3 / $p1,
               "17" =>$reg->EVA2P3 / $p2,
               "18" =>$reg->EVA3P3 / $p3,
               "19" =>$reg->EVA4P3 / $p4,
               "20" =>$reg->EVA5P3 / $p5,
               "21" =>$reg->NRP3,
               "22" =>$reg->EVA1P4 / $p1,
               "23" =>$reg->EVA2P4 / $p2,
               "24" =>$reg->EVA3P4 / $p3,
               "25" =>$reg->EVA4P4 / $p4,
               "26" =>$reg->EVA5P4 / $p5,
               "27" =>$reg->NRP4,
               "28" =>$reg->NRFINAL,
               "29" =>$reg->NOTAFINAL
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

