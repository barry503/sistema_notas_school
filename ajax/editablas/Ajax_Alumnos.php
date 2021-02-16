<?php 

require_once "../../modelos/editablas/ModeloAlumnos.php";

// se crea la istancia $alumnos
$alumnos=new Alumnos();


/* todos los campos enviados desde el archivo javascript  dentro de la carpeta vistas/scripts */
// si existe el carnet o identificador del alumno
$carnet=isset($_POST["carnet"])? limpiarCadena($_POST["carnet"]):"";

//identificador asistencia sin funcionalidad
$idasistencia=isset($_POST["idasistencia"])? limpiarCadena($_POST["idasistencia"]):"";

//fotografia del alumno
$foto=isset($_POST["foto"])? limpiarCadena($_POST["foto"]):"";
//nombres
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
// apellidos
$apellido=isset($_POST["apellido"])? limpiarCadena($_POST["apellido"]):"";
// fecha de nacimiento
$fechanac=isset($_POST["fechanac"])? limpiarCadena($_POST["fechanac"]):"";
// identificador del sexo
$idsexo=isset($_POST["idsexo"])? limpiarCadena($_POST["idsexo"]):"";
//identificador del grado
$idgrado=isset($_POST["idgrado"])? limpiarCadena($_POST["idgrado"]):"";
//telefono del alumno
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
//direccion del alumno
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
// encargado del alumno
$encargado=isset($_POST["encargado"])? limpiarCadena($_POST["encargado"]):"";
//nie del alumno
$nie=isset($_POST["nie"])? limpiarCadena($_POST["nie"]):"";
//seccion del alumno
$seccion=isset($_POST["seccion"])? limpiarCadena($_POST["seccion"]):"";
// salud del alumno
$salud=isset($_POST["salud"])? limpiarCadena($_POST["salud"]):"";
//trabajo del alumno
$trabajo=isset($_POST["trabajo"])? limpiarCadena($_POST["trabajo"]):"";
// madre del alumno
$mama=isset($_POST["mama"])? limpiarCadena($_POST["mama"]):"";
// padre del alumno
$papa=isset($_POST["papa"])? limpiarCadena($_POST["papa"]):"";
//codigo de familia
$codfam=isset($_POST["codfam"])? limpiarCadena($_POST["codfam"]):"";
// si el alumno repite grado
$repetidor=isset($_POST["repetidor"])? limpiarCadena($_POST["repetidor"]):""; 

// fin de todos los campos enviados 


/* este switch realiza todas las operaciones que se resiben por medio de get que contiene  el nombre de op acronimo de operacion */
switch($_GET["op"]){

  // caso para editar alumno.
  case 'guardaryeditar':
  // si existe una imagen muestrame la imagenactual
  if(!file_exists($_FILES['foto']['tmp_name']) || !is_uploaded_file($_FILES['foto']['tmp_name']))
       {
            $foto=$_POST["imagenactual"];

       }
       // sino existe una imagen inserta una nueva
       else {
              $ext = explode(".", $_FILES['foto']['name']);
              if($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png" )
              {
                   $foto= round(microtime(true)) . '.' . end($ext);
                   move_uploaded_file($_FILES['foto']['tmp_name'], "../../files/alumnos/" . $foto);
              }
       }

// si existe la variable $carnet ejecuta insertar alumno
   if(empty($carnet)){
             $respuesta=$alumnos->insertar($carnet,$idasistencia,$foto,$nombre,$apellido,$fechanac,$idsexo,$idgrado,$telefono,$direccion,$encargado,$nie,$seccion,$salud,$trabajo,$mama,$papa,$codfam,$repetidor,$_POST['materias']);
             echo $respuesta ? "Grado registrado" : "Grado no se pudo registrar";
       }
       //sino existe la varible $carnet edita el alumno.
       else {
               $respuesta=$alumnos->editar($carnet,$idasistencia,$foto,$nombre,$apellido,$fechanac,$idsexo,$idgrado,$telefono,$direccion,$encargado,$nie,$seccion,$salud,$trabajo,$mama,$papa,$codfam,$repetidor,$_POST['materias']);
             echo $respuesta ? "alumno actualizado" : "alumno no se pudo actualizar";

         }
  break;



// caso para nuevo alumno
     case 'nuevo':
    
   
     if($carnet){

       $ext = explode(".", $_FILES['foto']['name']);
              if($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png" )
              {
                   $foto= round(microtime(true)) . '.' . end($ext);
                   move_uploaded_file($_FILES['foto']['tmp_name'], "../../files/alumnos/" . $foto);
              }
          $respuesta=$alumnos->nuevo($carnet,$foto,$nombre,$apellido,$fechanac,$idsexo,$idgrado,$telefono,$direccion,$encargado,$nie,$seccion,$salud,$trabajo,$mama,$papa,$codfam,$repetidor);

          if($respuesta==1){
        echo $respuesta = "alumno registrado";

        $respuesta=$alumnos->conducta($carnet);
             echo $respuesta ? "<br>conducta registrada" : "no conducta";

          }else{
          
        echo $respuesta = "El alumno ya existe en el sistema ";
          }
             // echo $respuesta ? "alumno registrado" : "El alumno ya existe en el sistema ";

             

     }

 
            

     break;



// caso para desactivar el alumno
  case 'desactivar':
           $respuesta=$alumnos->desactivar($carnet);
             echo $respuesta ? "alumno Desactivado" : "alumno no se pudo desactivar";

  break;



// caso para activar el alumno
  case 'activar':

       $respuesta=$alumnos->activar($carnet);
             echo $respuesta ? "alumno activado" : "alumno no se pudo activar";

    break;


// caso para eliminar el alumno
case 'eliminar':
           $respuesta=$alumnos->eliminar($carnet);
             echo $respuesta ? "alumno eliminado" : "alumno no se pudo eliminar";

              // eliminarConducta
               $respuesta=$alumnos->eliminarConducta($carnet);
             echo $respuesta ? "<br>conducta eliminada" : "<br>conducta no se pudo eliminar C";

          // eliminarNotas
               $respuesta=$alumnos->eliminarNotas($carnet);
             echo $respuesta ? "<br>notas eliminadas" : "<br>notas no se pudo eliminar";

             // eliminarAsistencias
               $respuesta=$alumnos->eliminarAsistencias($carnet);
             echo $respuesta ? "<br>asistencias eliminadas" : "<br>asistencias no se pudo eliminar";





  break;



// caso para mostrar el alumno en el formulario para editar
    case'mostrar':
              $respuesta=$alumnos->mostrar($carnet);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;


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
               "0" =>($reg->estado)?'<button title="Editar" class="bnt btn-warning " onclick="mostrar('.$reg->carnet.')"><i class="fas fa-pencil-alt"></i></button>    '.
             '<button title="desactivar el alumno" class="bnt btn-danger " onclick="desactivar('.$reg->carnet.')"><i class="fas fa-times"></i></button><br>'.$reg->carnet :'<button title="Editar alumno inactivo" class="bnt btn-warning " onclick="mostrar('.$reg->carnet.')"><i class="fa fa-edit"></i></button>    '.
             '<button title="activar el alumno" class="bnt  btn-info " onclick="activar('.$reg->carnet.')"><i class="fas fa-check"></i></button>'.'    <button class="bnt btn-danger" title="Eliminar al alumno por completo" onclick="eliminar('.$reg->carnet.')"><i class="fas fa-trash"></i></button><br>'.$reg->carnet,
               "1" =>"<img src='../files/alumnos/".$reg->foto."' height='110px' width='110px'>",
               "2" =>$reg->nombre,
               "3" =>$reg->apellido,
               "4" =>'<span title="fecha de Nacimiento del Alumno.">'.$reg->fechanac.'</span>',
               "5" =>$reg->sexo,
               "6" =>$reg->grado,
               "7" =>$reg->telefono,
               "8" =>$reg->direccion,
               "9" =>$reg->encargado,
               "10" =>$reg->nie,
               "11" =>$reg->seccion,
               "12" =>$reg->salud,
               "13" =>$reg->trabajo,
               "14" =>$reg->mama,
               "15" =>$reg->papa, 
               "16" =>'Con '.$reg->codfam,
               "17" =>($reg->repetidor)?'<span class="label bg-red" title="si repite grado">si<span>': '<span class="label bg-green"  title="no repite grado">no<span>',
               "18" =>($reg->estado)?'<span class="label bg-green">activo<span>': '<span class="label bg-red">inactivo<span>'
              );

       }

       $results = array(
         "sEcho" =>1, //informacion para el datatables
          "iTotalRecords" =>count($data), //enviamos el total registros al datatable
           "iTotalDisplayRecords" =>count($data), //enviamos el total registros a           visualizar
           "aaData"=>$data);

       echo json_encode($results);
    break;



// este case sirve para agregar todos los sexos en el formulario del alumno
    case "selectSexo":
    
       require_once "../../modelos/editablas/ModeloSexo.php";
    $sexo = new Sexo();

    $respuesta = $sexo->selectSexo();
   while($reg = $respuesta->fetch_object())

   {

    echo '<option value=' . $reg->idsexo .'>' . $reg->nombre_sexo . '</option>';

   }

    break;

    // este case sirve para agregar todos los sexos en el formulario del alumno nuevo
    case "selectSexo1":
    
    require_once "../../modelos/editablas/ModeloSexo.php";
    $sexo = new Sexo();

    $respuesta = $sexo->selectSexo();
   while($reg = $respuesta->fetch_object())

   {

    echo '<option value=' . $reg->idsexo .'>' . $reg->nombre_sexo . '</option>';

   }

    break;



// este case sirve para agregar todos los grados en el formulario del alumno
     case "selectGrado":
    
       require_once "../../modelos/editablas/ModeloGrado.php";
    $grado = new Grado();

    $respuesta = $grado->selectGrado();
   while($reg = $respuesta->fetch_object())

   {

    echo '<option value=' . $reg->idgrado .'>' . $reg->nombre_grado . '</option>';

   }

    break;



// este case sirve para agregar todos los grados en el formulario del alumno nuevo
     case "selectGrado1":
    
      require_once "../../modelos/editablas/ModeloGrado.php";
    $grado = new Grado();

    $respuesta = $grado->selectGrado();
   while($reg = $respuesta->fetch_object())

   {

    echo '<option value=' . $reg->idgrado .'>' . $reg->nombre_grado . '</option>';

   }

    break;


    


case 'materias':
 //obtenemos todos los materias de la tabla materias
  require_once "../../modelos/editablas/ModeloMaterias.php";
    $materias = new materias();

     $rspta = $materias->listar();


     // Obtener los materias asignados al usuario
     $id=$_GET['id'];
     $marcados = $alumnos->listarMmarcadas($id);
     //Declaro un array para almacenar todos los materias marcados
     $valores=Array();

     //Almacenar los materias asignados al usuario en el array
     while ($mat = $marcados->fetch_object())
     {
        array_push($valores, $mat->idmaterias);
     }



 
//Mostramos la lista de materias en la vista y si estan o no marcados
     while($reg = $rspta->fetch_object())
     {
        $sw=in_array($reg->idmaterias,$valores)?'checked':'';

              if($reg->idmaterias >=17 && $reg->idmaterias <=24){ echo '<strong>MODULO DE 1° BACHILLERATO SALUD</strong> <br>'; }
              else if($reg->idmaterias >=24 && $reg->idmaterias <=32){ echo '<strong>MODULO DE 2° BACHILLERATO SALUD</strong> <br>'; }
              else if($reg->idmaterias >=32 && $reg->idmaterias <=40){ echo '<strong>MODULO DE 3° BACHILLERATO SALUD</strong> <br>'; }

              echo '<label title="'.$reg->CODMAT.'"><li> <input type="checkbox"  '.$sw.' name="materias[]" value="'.$reg->idmaterias.'" >'.$reg->NOMMAT.'</li></label>';
               if($reg->idmaterias >=17)
                {
                 $desMateriA=" del modulo";
                }else
                { 
                 $desMateriA="de la materia";
                }

              echo '<br><p>Descripcion  '.$desMateriA.' :<br> '.$reg->CODMAT.'</p><hr class="bg-warning">';
              
              
     }

  break;



 


}








 ?>

  