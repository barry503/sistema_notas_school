<?php 

require_once "../modelos/Grado.php";

// se crea la istancia $grado
$grado=new Grado();
// si existe el idgrado






switch($_GET["op"]){


     case'listar':
      $respuesta=$grado->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>$reg->idgrado,
               "1" =>$reg->nombre_grado,
               "2" =>$reg->descripcion_grado,
               "3" =>$reg->turno,
               "4" =>$reg->seccion,
                "5" =>$reg->docentes,
                "6" =>($reg->condicion)?'<span class="label bg-green">disponible<span>': '<span class="label bg-red">inactivo<span>'
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
