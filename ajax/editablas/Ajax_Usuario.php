<?php 
session_start();
require_once "../../modelos/editablas/ModeloUsuario.php";
 // se crea la istancia $usuario
 $usuarioC=new Usuario();

#Variables para traer por metodo post
 // si existe el idusuario
 $idusuario=isset($_POST["idusuario"])? limpiarCadena($_POST["idusuario"]):"";

 $nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";

 $apellido=isset($_POST["apellido"])? limpiarCadena($_POST["apellido"]):"";

 $imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";

 $usuario=isset($_POST["usuario"])? limpiarCadena($_POST["usuario"]):"";

 $clave=isset($_POST["clave"])? limpiarCadena($_POST["clave"]):"";

 $email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";

 $telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";

 $direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";




switch($_GET["op"]){
   case 'guardaryeditar':

       if(!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
       {
            $imagen=$_POST["imagenactual"];

       }
       else {
              $ext = explode(".", $_FILES['imagen']['name']);
              if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png" )
              {
                   $imagen= round(microtime(true)) . '.' . end($ext);
                   move_uploaded_file($_FILES['imagen']['tmp_name'], "../../files/usuarios/" . $imagen);
              }
       }
         
         //encripto la contraseña con el  algoritmo que contiene 64 exadecimales llamado -
         //Hash SHA256 
       //en la contraseña 

       $clavehash=hash("SHA256",$clave); 



       if(empty($idusuario)){
             $rspta=$usuarioC->insertar($nombre,$apellido,$imagen,$usuario,$clavehash,$email,$telefono,$direccion,$_POST['permiso']);
             echo $rspta ? "usuario registrado" : " no se pudieron  registrar todos los datos del usuario";
       }
         else {
               $rspta=$usuarioC->editar($idusuario,$nombre,$apellido,$imagen,$usuario,$clavehash,$email,$telefono,$direccion,$_POST['permiso']);
             echo $rspta ? "usuario actulizado" : "usuario no se pudo actualizar";

         }
  break;

  case 'desactivar':
           $rspta=$usuarioC->desactivar($idusuario);
             echo $rspta ? "usuario Desactivado" : "usuario no se pudo desactivar";

  break;

  case 'activar':

       $rspta=$usuarioC->activar($idusuario);
             echo $rspta ? "usuario activado" : "usuario no se pudo activar";

  break;

  case'mostrar':
              $rspta=$usuarioC->mostrar($idusuario);
              //codificar el resultado json
             echo json_encode($rspta); 
  break;

  case'listar':
       $rspta=$usuarioC->listar();
       // vamos a declarar un array o arreglo
       $data= Array();  

       while($reg=$rspta->fetch_object()){
           $data[]=array(
               "0" =>($reg->condicion)?'<button class="bnt btn-warning " onclick="mostrar('.$reg->idusuario.')"><i class="fas fa-pencil-alt"></i></button>    '.
             '<button class="bnt btn-danger " onclick="desactivar('.$reg->idusuario.')"><i class="fas fa-times"></i></button><br>'.$reg->idusuario :'<button class="bnt btn-warning " onclick="mostrar('.$reg->idusuario.')"><i class="fa fa-edit"></i></button>    '.
             '<button class="bnt  btn-info " onclick="activar('.$reg->idusuario.')"><i class="fas fa-check"></i></button><br>'.$reg->idusuario,
               "1" =>$reg->usuario,
               "2" =>$reg->nombre,
               "3" =>$reg->apellido,
               "4" =>$reg->telefono,
               "5" =>$reg->email,
               "6" =>"<img src='../files/usuarios/".$reg->imagen."' height='110px' width='110px'>",
               "7" =>$reg->direccion,
               "8" =>($reg->condicion)?'<span class="label bg-green">Activado<span>': '<span class="label bg-red">Desactivado<span>'
              );

       }

       $results = array(
         "sEcho" =>1, //informacion para el datatables
          "iTotalRecords" =>count($data), //enviamos el total registros al datatable
           "iTotalDisplayRecords" =>count($data), //enviamos el total registros a           visualizar
           "aaData"=>$data);

       echo json_encode($results);
    break;


case 'permisos':
 //obtenemos todos los permisos de la tabla permisos
  require_once "../../modelos/editablas/ModeloPermiso.php";
    $permiso = new Permiso();

     $rspta = $permiso->listar();


     // Obtener los permisos asignados al usuario
     $id=$_GET['id'];
     $marcados = $usuarioC->listarmarcados($id);
     //Declaro un array para almacenar todos los permisos marcados
     $valores=Array();

     //Almacenar los permisos asignados al usuario en el array
     while ($per = $marcados->fetch_object())
     {
        array_push($valores, $per->idpermiso);
     }



 
 //Mostramos la lista de permisos en la vista y si estan o no marcados
     while($reg = $rspta->fetch_object())
     {
        $sw= in_array($reg->idpermiso,$valores)?'checked':'';

              echo '<li> <input type="checkbox" '.$sw.' name="permiso[]" value="'.$reg->idpermiso.'">'.$reg->nombre.'</li><hr>';
     }

  break;
  
case 'verificar':

  $logina=$_POST['logina'];
    $clavea=$_POST['clavea'];
    


    //Hash SHA256 en la contraseña
      $clavehash=hash("SHA256",$clavea);  
             
     $rspta=$usuarioC->verificar($logina, $clavehash);

     $fetch=$rspta->fetch_object();

             if(isset($fetch))
             {
               //Declaramos las variables de session
               $_SESSION['idusuario']=$fetch->idusuario;
               $_SESSION['nombre']=$fetch->nombre;
               $_SESSION['apellido']=$fetch->apellido;
               $_SESSION['imagen']=$fetch->imagen;
               $_SESSION['email']=$fetch->email; 
               $_SESSION['telefono']=$fetch->telefono;
                $_SESSION['direccion']=$fetch->direccion;
                $_SESSION['clave']=$fetch->clave;
               $_SESSION['usuario']=$fetch->usuario; //login=usuario

               //ontener todos los permisos del usuario
               $marcados = $usuarioC->listarmarcados($fetch->idusuario);

               //Declaramos el array para almacenar todos los permisos marcados
               $valores=array();
               while ($per = $marcados->fetch_object()) 
               {
                
                array_push($valores, $per->idpermiso);  

                } 

               //Determinamos los accesos del usuario
                // en la tabla permiso
               
                   //                                          permiso para la administracion de las asistencias 
 in_array(1,$valores)?$_SESSION['administracionA']=1:$_SESSION['administracionA']=0;
 //.............................................permisos para todas las materias........................................

 // permiso para la materia de LENGUAJE
 in_array(2,$valores)?$_SESSION['LENGUAJE']=1:$_SESSION['LENGUAJE']=0;
 // permiso para la materia de MATEMATICAS
 in_array(3,$valores)?$_SESSION['MATEMATICAS']=1:$_SESSION['MATEMATICAS']=0;
 // permiso para la materia de CIENCIAS_FÍSICAS
 in_array(4,$valores)?$_SESSION['CIENCIAS_FÍSICAS']=1:$_SESSION['CIENCIAS_FÍSICAS']=0;
 // permiso para la materia de ESTUDIOS_SOCIALES
 in_array(5,$valores)?$_SESSION['ESTUDIOS_SOCIALES']=1:$_SESSION['ESTUDIOS_SOCIALES']=0;
 // permiso para la materia de INGLES
 in_array(6,$valores)?$_SESSION['INGLES']=1:$_SESSION['INGLES']=0;
 // permiso para la materia de EDUCACION_FISICA
 in_array(7,$valores)?$_SESSION['EDUCACION_FISICA']=1:$_SESSION['EDUCACION_FISICA']=0;
 // permiso para la materia de INFORMATICA
 in_array(8,$valores)?$_SESSION['INFORMATICA']=1:$_SESSION['INFORMATICA']=0;
 // permiso para la materia de SEMINARIO
 in_array(9,$valores)?$_SESSION['SEMINARIO']=1:$_SESSION['SEMINARIO']=0;
 // permiso para la materia de TECNOLOGIA
 in_array(10,$valores)?$_SESSION['TECNOLOGIA']=1:$_SESSION['TECNOLOGIA']=0;
 // permiso para la materia de QUÍMICA_Y_BIOLOGÍA
 in_array(11,$valores)?$_SESSION['QUÍMICA_Y_BIOLOGÍA']=1:$_SESSION['QUÍMICA_Y_BIOLOGÍA']=0;
 // permiso para la materia de ORIENTACION_PARA_LA_VIDA
 in_array(12,$valores)?$_SESSION['ORIENTACION_PARA_LA_VIDA']=1:$_SESSION['ORIENTACION_PARA_LA_VIDA']=0;
 // permiso para la materia de LABORATORIO_DE_CREATIVIDAD
 in_array(13,$valores)?$_SESSION['LABORATORIO_DE_CREATIVIDAD']=1:$_SESSION['LABORATORIO_DE_CREATIVIDAD']=0;
 // permiso para la materia de FORMACION_CRISTIANA
 in_array(14,$valores)?$_SESSION['FORMACION_CRISTIANA']=1:$_SESSION['FORMACION_CRISTIANA']=0;

 // materias de bto Contador
 // permiso para la materia de PRESUPUESTO
 in_array(15,$valores)?$_SESSION['PRESUPUESTO']=1:$_SESSION['PRESUPUESTO']=0;
 // permiso para la materia de COMERCIALIZACION
 in_array(16,$valores)?$_SESSION['COMERCIALIZACION']=1:$_SESSION['COMERCIALIZACION']=0;
 // permiso para la materia de CONTABILIDAD_DE_COSTO
 in_array(17,$valores)?$_SESSION['CONTABILIDAD_DE_COSTO']=1:$_SESSION['CONTABILIDAD_DE_COSTO']=0;


 // para carrera salud
 in_array(18,$valores)?$_SESSION['MODULOS_SALUD']=1:$_SESSION['MODULOS_SALUD']=0;

 //.............................................permisos para todos los grados..........................................
 // permiso para preparatoria
 //  in_array(18,$valores)?$_SESSION['preparatoria']=1:$_SESSION['preparatoria']=0;
 // permiso para primero
 in_array(19,$valores)?$_SESSION['primero']=1:$_SESSION['primero']=0;
 // permiso para segundo
 in_array(20,$valores)?$_SESSION['segundo']=1:$_SESSION['segundo']=0;
 // permiso para tercero
 in_array(21,$valores)?$_SESSION['tercero']=1:$_SESSION['tercero']=0;
 // permiso para cuarto
 in_array(22,$valores)?$_SESSION['cuarto']=1:$_SESSION['cuarto']=0;
 // permiso para quinto
 in_array(23,$valores)?$_SESSION['quinto']=1:$_SESSION['quinto']=0;
 // permiso para sexto
 in_array(24,$valores)?$_SESSION['sexto']=1:$_SESSION['sexto']=0;
 // permiso para septimo
 in_array(25,$valores)?$_SESSION['septimo']=1:$_SESSION['septimo']=0;
 // permiso para octavo
 in_array(26,$valores)?$_SESSION['octavo']=1:$_SESSION['octavo']=0;
 // permiso para noveno
 in_array(27,$valores)?$_SESSION['noveno']=1:$_SESSION['noveno']=0;
 // permiso para 1bto
 in_array(28,$valores)?$_SESSION['1bto']=1:$_SESSION['1bto']=0;
 // permiso para 2bto
 in_array(29,$valores)?$_SESSION['2bto']=1:$_SESSION['2bto']=0;
 // permiso para 3bto
 in_array(30,$valores)?$_SESSION['3bto']=1:$_SESSION['3bto']=0;

 // permiso para 1salud
 in_array(31,$valores)?$_SESSION['1salud']=1:$_SESSION['1salud']=0;
 // permiso para 2salud
 in_array(32,$valores)?$_SESSION['2salud']=1:$_SESSION['2salud']=0;
 // permiso para 3salud
 in_array(33,$valores)?$_SESSION['3salud']=1:$_SESSION['3salud']=0;


 /*permiso para la administrador todo */
 in_array(34,$valores)?$_SESSION['administrador']=1:$_SESSION['administrador']=0;
 /*permiso para la conducta de  todos */
 in_array(35,$valores)?$_SESSION['conducta']=1:$_SESSION['conducta']=0;
 /*permiso para la materia para ambos bachilleratos */
 in_array(36,$valores)?$_SESSION['MORAL_URBANIDAD_Y_CIVICA']=1:$_SESSION['MORAL_URBANIDAD_Y_CIVICA']=0;

 /*permiso para la materia para 3 bto salud */
 in_array(37,$valores)?$_SESSION['ORIENTACION_VOCACIONAL']=1:$_SESSION['ORIENTACION_VOCACIONAL']=0;

 /*permiso para la materia para 3 bto salud */
 in_array(38,$valores)?$_SESSION['ARTISTICA']=1:$_SESSION['ARTISTICA']=0;
/*permiso para la materia de PRACTICA PROFECIONAL*/
in_array(39,$valores)?$_SESSION['PRACTICA_PROFECIONAL']=1:$_SESSION['PRACTICA_PROFECIONAL']=0;


 
  

             }
      
                  //codificar el resultado json
             echo json_encode($fetch);

  break;

case 'salir':

 // $Usalir = $_SESSION['usuario'];
// usuario0salir

 /*$rspta=$usuarioC->salir($Usalir);*/
    //codificar el resultado json
    /*echo json_encode($rspta);*/ 
  // limpiamos las variables de session
 session_unset();
 // Destruimos la session
 session_destroy();
 //Redireccionamos al login
 header("Location: ../../index.php");



break; 


}



 ?>
