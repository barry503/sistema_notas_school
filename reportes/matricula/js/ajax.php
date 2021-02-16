<?php 
require_once "modelo.php";
// se crea la istancia $alumnos
$alumnos=new Alumnos();

switch($_GET["op"]){

// caso para listar el alumno
     case'listar':

     // la variable $respuesta llama a la clase $alumnos ala funcion  listar
      $respuesta=$alumnos->listar();

      // vamos a declarar un array o arreglo
       $data= Array(); 

 /* este ciclo recorre todos los  objetos o datos traidos 
      de la funcion listar guardados en la variable respuesta */
       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>$reg->carnet,
               "1" =>"<img src='../../files/alumnos/".$reg->foto."' height='110px' width='110px'>",
               "2" =>$reg->nombre,
               "3" =>'<span title="fecha de Nacimiento del Alumno.">'.$reg->fechanac.'</span>',
               "4" =>$reg->sexo,
               "5" =>$reg->grado,
               "6" =>$reg->nie,
               "7" =>$reg->encargado,
               "8" =>($reg->estado)?'<span class="label bg-success">activo<span>': '<span class="label bg-danger">inactivo<span>'
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