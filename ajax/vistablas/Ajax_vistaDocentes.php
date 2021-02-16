<?php 

require_once "../modelos/Docentes.php";

// se crea la istancia $docentes
$docentes=new Docentes();



switch($_GET["op"]){
	

   

     case'listar':
      $respuesta=$docentes->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>$reg->iddocentes,
               "1" =>$reg->nombre,
               "2" =>$reg->apellido,
                "3" =>($reg->condicion)?'<span class="label bg-green">disponible<span>': '<span class="label bg-red">inactivo<span>'
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
