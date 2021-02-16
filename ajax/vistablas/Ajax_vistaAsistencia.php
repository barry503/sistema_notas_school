<?php 

require_once "../modelos/Asistencias.php";

// se crea la istancia $asistencia
$asistencia=new Asistencia();




switch($_GET["op"]){
	



     case'listar':
      $respuesta=$asistencia->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>/*$reg->idasistencia*/"+",
               "1" =>"<img src='../files/alumnos/".$reg->foto."' height='110px' width='110px'>",
               "2" =>$reg->nie,
               "3" =>$reg->nombres,
               "4" =>$reg->fecha,
               "5" =>$reg->grado,
                "6" =>($reg->condicion)?'<span class="label bg-green">activo<span>': '<span class="label bg-red">inactivo<span>'
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
