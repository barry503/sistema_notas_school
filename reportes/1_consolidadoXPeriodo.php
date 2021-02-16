<?php include 'includes/Conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Consolidado X Periodo X Grado | <?php #echo $AInstitucion; ?> </title>

    
    <link rel="shortcut icon" href="../files/imgInstitucion/<?php #echo $ImGI; ?>">
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
 <!-- Theme style -->
  <!-- <link rel="stylesheet" href="../public/css/adminlte.min.css"> -->

  <link rel="stylesheet" type="text/css" href="bootstrap-temas/litera/bootstrap.min.css">


    <!--external css iconos-->
  <!-- <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
 <link rel="stylesheet" type="text/css" href="css/estilos-footer.css">



</head>
<body>

<?php  $titulo = 'Consolidado Materias'; ?>

<!-- header -->
<?php include 'includes/header.php';  ?>
<!-- /header -->

<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 >Consolidado por Periodo. </h1>
      <p class="lead  text-info ">Selecciona el periodo y el grado  del cual quieres ver las Materias y presiona el boton consultar. <p class="text-muted">"Este consolidado es de todas las materias."</p></p>
      <p>

     

<form method="POST" action="1_consolidadoXPeriodo/index.php">
 <div class="row mb-2">


 <!-- CAMPO 1 -->
  <div class="col-md-3" align="center"> 
   <select class="btn btn-secondary my-2 " name="periodo" id="periodo" required>
     <option value="0">SELECCIONA EL PERIODO</option>

     <option value="1">1-PRIMER PERIODO</option> 
     <option value="2">2-SEGUNDO PERIODO</option> 
     <option value="3">3-TERCER PERIODO</option> 
     <option value="4">4-CUARTO PERIODO</option>   


   </select>
 </div>

 


 <!-- CAMPO 3 -->
 <div class="col-md-4" align="center"> 
   <select class="btn btn-secondary my-2 " name="grado" id="grado" required>
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
 <div class="col-md-4 " align="left"> 
    <button type="submit" class="btn  btn-lg btn-info col-md-6">
     Consultar 
    </button> 

 </div>
 <!-- <div class="col-md-3"></div> -->

   

  </div>

</form>

    </div>
  </section>

  <div class="album py-1 bg-light">
    <div class="container">






    </div>
  </div>

</main>

<br><br><br><br><br><br>
<?php include 'includes/footer.php'; ?>





</body>
</html>
