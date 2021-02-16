<?php include 'includes/Conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Educacion Basica|Boletas de Notas | <?php echo $AInstitucion; ?> </title>

    
    <link rel="shortcut icon" href="../files/imgInstitucion/<?php echo $ImGI; ?>">

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


<?php  $titulo = 'Boletas de notas'; ?>
<!-- header -->
<?php include 'includes/header.php';  ?>
<!-- /header -->

<!-- comienza el contenido -->

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Notas De Educacion Basica <br> 7° Grado A 9° Grado.  </h1>
      <p class="lead text-muted">Selecciona el Periodo y el grado del cual quiere ver las notas y presiona el boton consultar.</p>
      <p>

     

<form method="post" id="Consult_de_7_A_9GRADO">
   <div class="row mb-2">

<div class="col-md-8" align="center"> 

 


 <?php  /* Connexion a la base de datos*/ 
  include '../config/conexionPDOcontacto.php'; ?>



 <select class="btn btn-secondary my-2 " name="periodo" id="periodo">
<option value="0">Selecciona el Periodo</option>

<option value="1">1-PRIMER PERIODO</option> 
<option value="2">2-SEGUNDO PERIODO</option> 
<option value="3">3-TERCER PERIODO</option> 
<option value="4">4-CUARTO PERIODO</option>   


 </select>



 <select class="btn btn-secondary my-2 " name="grado" id="grado">
<option value="0">Selecciona el grado</option>
<?php   $query_Alumnos=$base->query("SELECT idgrado, nombre_grado FROM grado WHERE idgrado >=7  AND idgrado <=9  ")->fetchAll(PDO::  FETCH_OBJ);
      foreach ($query_Alumnos as $grado){
?>
<option value="<?php echo $grado->idgrado; ?>"><?php echo $grado->nombre_grado; ?></option>   
  
<?php    } ?>

 </select>




      <p>
</div>

  <div class="col-md-4" align="left"> 
   <button type="submit" class="btn  btn-lg btn-primary col-md-8 ConsutGrarDar"> Consultar </button> 


</div>

   

</div>

</form>
      


      
      
        <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">


<!-- fila para todas las targetas -->
 <div class="row" id="imprimirDatosBasica7A9">



        

<!-- <div class="table-responsive" id="idTablaprint"> -->


<!-- </div> -->




      </div> <!-- final de fila -->
    </div>
  </div>

</main>



<br><br><br><br><br><br><br><br><br>


<!-- aqui van los scripts y los ajax  -->
<?php include 'includes/footer.php'; ?>






</body>
</html>
