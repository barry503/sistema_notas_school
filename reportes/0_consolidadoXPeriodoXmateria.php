<?php include 'includes/Conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Consolidado X Periodo X Grado X Materia | <?php echo $AInstitucion; ?> </title>

    
    <link rel="shortcut icon" href="../files/imgInstitucion/<?php echo $ImGI; ?>">
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
 <!-- Theme style -->
  <!-- <link rel="stylesheet" href="../public/css/adminlte.min.css"> -->

  <link rel="stylesheet" type="text/css" href="bootstrap-temas/sketchy/bootstrap.min.css">


    <!--external css iconos-->
  <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
 <link rel="stylesheet" type="text/css" href="css/estilos-footer.css">

</head>
<body>

<?php  $titulo = 'Consolidado'; ?>

<!-- header -->
<?php include 'includes/header.php';  ?>
<!-- /header -->

<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 >Consolidado por Periodo. </h1>
      <p class="lead  text-info ">Selecciona el periodo, la materia o modulo y el grado  del cual quieres ver las notas y presiona el boton consultar. <p class="text-muted">"las opciones que aparecen como (opcion no valida) son campos para referencia."</p></p>
      <p>

     

<form method="POST" action="0_consolidadoXPeriodoXmateria/index.php">
 <div class="row mb-2">


 <!-- CAMPO 1 -->
  <div class="col-md-4" align="center"> 
   <select class="btn btn-secondary my-2 " name="periodo" id="periodo">
     <option value="0">SELECCIONA EL PERIODO</option>

     <option value="1">1-PRIMER PERIODO</option> 
     <option value="2">2-SEGUNDO PERIODO</option> 
     <option value="3">3-TERCER PERIODO</option> 
     <option value="4">4-CUARTO PERIODO</option>   


   </select>
 </div>

 <!-- CAMPO 2 -->
<div class="col-md-6" align="center"> 
   <select class="btn btn-secondary my-2 " name="materia" id="materia">
      <option value="0">SELECCIONA LA MATERIA</option>

      <option title="Opcion para separar las materias y los modulos " value="REFE" class="bg-success">EDUCACION BASICA (opcion no valida)</option>
        <!-- consulta para las materias de educacion basica  -->
        <?php   $query_Mater=$base->query("SELECT idmaterias, NOMMAT FROM materias WHERE   idmaterias <=13    ")->fetchAll(PDO::  FETCH_OBJ);
        foreach ($query_Mater as $materiasEBA){
        ?>
       <option value="<?php echo $materiasEBA->idmaterias; ?>"><?php echo $materiasEBA->NOMMAT; ?></option>   
       <?php    } ?>

        <!-- Artistica -->
        <?php   $query_MaterARt=$base->query("SELECT idmaterias, NOMMAT FROM materias WHERE   idmaterias =44  ")->fetchAll(PDO::  FETCH_OBJ);
        foreach ($query_MaterARt as $Arttis){
        ?>
        <option value="<?php echo $Arttis->idmaterias; ?>"><?php echo $Arttis->NOMMAT; ?></option>   
        <?php    } ?>

      <option title="Opcion para separar las materias y los modulos " value="REFE" class="bg-warning text-primary">EDUCACION MEDIA (opcion no valida)</option>
        <!-- consulta para las materias de educacion basica  -->
        <?php   $query_MaterMas=$base->query("SELECT idmaterias, NOMMAT FROM materias WHERE   idmaterias >=14 AND idmaterias <=16    ")->fetchAll(PDO::  FETCH_OBJ);
        foreach ($query_MaterMas as $matMas){
        ?>
       <option value="<?php echo $matMas->idmaterias; ?>"><?php echo $matMas->NOMMAT; ?></option>   
       <?php    } ?>

        <!-- ORIENTACION VOCACIONAL -->
       <?php   $query_OV=$base->query("SELECT idmaterias, NOMMAT FROM materias WHERE idmaterias >=41 AND idmaterias <=42  ")->fetchAll(PDO::  FETCH_OBJ);
        foreach ($query_OV as $mATERV){
        ?>

        <option value="<?php echo $mATERV->idmaterias; ?>"><?php echo $mATERV->NOMMAT; ?> </option>   
        <?php    } ?>

          <!-- PRACTICA PROFESIONAL -->
       <?php   $query_Pp=$base->query("SELECT idmaterias, NOMMAT FROM materias WHERE idmaterias =45  ")->fetchAll(PDO::  FETCH_OBJ);
        foreach ($query_Pp as $mATEPp){
        ?>

        <option value="<?php echo $mATEPp->idmaterias; ?>"><?php echo $mATEPp->NOMMAT; ?> </option>   
        <?php    } ?>


      <option title="Opcion para separar las materias y los modulos " value="REFE" class="bg-info">MODULOS 1 SALUD + (opcion no valida)</option>
       <!-- Modulos de  1° bto salud -->
         <?php   $query_Salud1=$base->query("SELECT idmaterias, CODMAT FROM materias WHERE idmaterias >=17 AND idmaterias <=24   ")->fetchAll(PDO::  FETCH_OBJ);
         foreach ($query_Salud1 as $MaterSalud1){
         ?>
         <option value="<?php echo $MaterSalud1->idmaterias; ?>"><?php echo $MaterSalud1->CODMAT; ?> </option>   
         <?php    } ?>
      <option title="Opcion para separar las materias y los modulos " value="REFE" class="bg-info">MODULOS 2 SALUD + (opcion no valida)</option>
       <!-- Modulos de  1° bto salud -->
         <?php   $query_Salud2=$base->query("SELECT idmaterias, CODMAT FROM materias WHERE idmaterias >=24 AND idmaterias <=32   ")->fetchAll(PDO::  FETCH_OBJ);
         foreach ($query_Salud2 as $MaterSalud2){
         ?>
         <option value="<?php echo $MaterSalud2->idmaterias; ?>"><?php echo $MaterSalud2->CODMAT; ?> </option>   
         <?php    } ?>
      <option title="Opcion para separar las materias y los modulos " value="REFE" class="bg-info">MODULOS 3 SALUD + (opcion no valida)</option>
       <!-- Modulos de  1° bto salud -->
         <?php   $query_Salud3=$base->query("SELECT idmaterias, CODMAT FROM materias WHERE idmaterias >=32 AND idmaterias <=40   ")->fetchAll(PDO::  FETCH_OBJ);
         foreach ($query_Salud3 as $MaterSalud3){
         ?>
         <option value="<?php echo $MaterSalud3->idmaterias; ?>"><?php echo $MaterSalud3->CODMAT; ?> </option>   
         <?php    } ?> 

   </select>
 </div>


 <!-- CAMPO 3 -->
 <div class="col-md-4" align="center"> 
   <select class="btn btn-secondary my-2 " name="grado" id="grado">
      <option value="0">SELECCIONA EL GRADO</option>
      <!-- opcion del grado -->
        <?php   $query_Alumnos=$base->query("SELECT idgrado, nombre_grado FROM grado  ")->fetchAll(PDO::  FETCH_OBJ);
        foreach ($query_Alumnos as $grado){
        ?>
       <option value="<?php echo $grado->idgrado; ?>"><?php echo $grado->nombre_grado; ?></option>   
       <?php    } ?>
   </select>
 </div>

<!-- Boton Consultar -->
<!-- <div class="col-md-2"></div> -->
 <div class="col-md-6 mt-4" align="left"> 
    <button type="submit" class="btn  btn-lg btn-info col-md-6">
     Consultar 
    </button> 

 </div>
 <!-- <div class="col-md-3"></div> -->

   

  </div>

</form>

    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">



    </div>
  </div>

</main>



<br><br><br><br><br><br><br><br><br>


<!-- aqui van los scripts y los ajax  -->
<?php include 'includes/footer.php'; ?>






</body>
</html>
