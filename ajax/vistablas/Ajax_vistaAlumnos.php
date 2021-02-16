<?php 

require_once "../modelos/Alumnos.php";

// se crea la istancia $alumnos
$alumnos=new Alumnos();


switch($_GET["op"]){




case'listar':
      $respuesta=$alumnos->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>$reg->nie,
               "1" =>"<img src='../files/alumnos/".$reg->foto."' height='110px' width='110px'>",
               "2" =>$reg->nombre,
               "3" =>$reg->apellido,
               "4" =>$reg->sexo,
               "5" =>$reg->grado,
                "6" =>$reg->discapacidad,
                "7" =>$reg->direccion,
                "8" =>$reg->madre,
                 "9" =>$reg->telefono_madre,
                  "10" =>$reg->padre,
                 "11" =>$reg->telefono_padre,
                "12" =>($reg->condicion)?'<span class="label bg-green">disponible<span>': '<span class="label bg-red">inactivo<span>'
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