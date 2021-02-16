<!-- respetar espacios saltos de lineas e incluso los comentarios podrian dar margen de error
 -->
 <!-- <meta charset="utf-8"> -->
<?php

  /*Inicia validacion del lado del servidor*/


  // si existe la variable grado 
  if ($_POST['grado']) {
          
        
  $grado=$_POST["grado"];

  $materia=$_POST["materia"];


  /* Connexion a la base de datos*/ 
  include '../../config/conexionPDOcontacto.php'; 


// consulta con PDO
 $query_consultarGYM=$base->query("SELECT a.estado, a.carnet, a.foto, a.seccion, a.nombre, a.apellido, N.carnet, N.idmaterias,
N.EVA1P1,N.EVA2P1,N.EVA3P1,N.EVA4P1,N.EVA5P1,N.NRP1,
N.EVA1P2,N.EVA2P2,N.EVA3P2,N.EVA4P2,N.EVA5P2,N.NRP2,
N.EVA1P3,N.EVA2P3,N.EVA3P3,N.EVA4P3,N.EVA5P3,N.NRP3,
N.EVA1P4,N.EVA2P4,N.EVA3P4,N.EVA4P4,N.EVA5P4,N.NRP4,
N.NRFINAL,N.NOTAFINAL,ma.idmaterias,ma.NOMMAT
FROM alumnos a INNER JOIN notas N INNER JOIN materias ma
ON N.carnet=a.carnet AND N.idmaterias=ma.idmaterias AND a.estado='1' AND a.idgrado='$grado' AND N.idmaterias='$materia'")->fetchAll(PDO::  FETCH_OBJ);

$graga = mysqli_query($coneion,"SELECT ma.idmaterias, ma.NOMMAT, g.idgrado, g.nombre_grado  FROM materias ma INNER JOIN grado g ON  g.idgrado='$grado' AND ma.idmaterias='$materia'");
 $gar = mysqli_fetch_array($graga);
      $NombGrad= $gar['nombre_grado'];
       $materA= $gar['NOMMAT']; 

?>

<button type="button" class="btn text-center  btn-lg btn-secondary col-md-2" onclick="inprimir()"> Imprimir <i class="fa fa-print"></i></button> 


           
          
              
            

<div class="table-responsive" id="idTablaprint">
<div class="table table-striped table-bordered  table-condensed table-hover  text-black py-5" >
<br>
     <h3 class="text-secondary" align="center">CONSOLIDADO DE <?php echo utf8_encode($NombGrad);  ?> DE LA MATERIA DE <?php echo $materA;  ?> . </h3><br>
              <table class="table table-hover table-bordered text-center">
                <thead>
                  <tr class="info">
                    <th class="text-center" rowspan="2">Carnet</th>
                     <th class="text-center" rowspan="2">foto</th>
                     <th class="text-center" rowspan="2">Nombre</th>
                     <th class="text-center" rowspan="2">Apellido</th>
                    <th class="text-center" colspan="6"> periodo 1</th>
                     <th class="text-center" colspan="6"> periodo 2</th>
                      <th class="text-center" colspan="6"> periodo 3</th>
                       <th class="text-center" colspan="6"> periodo 4</th>
                        <th class="text-center" rowspan="2">Nota de  Recuperacion</th>
                        <th class="text-center" rowspan="2" title="Nota final"> Nota final</th>
                       
                  </tr>
                  <tr class="info">

                        <!-- periodo 1 -->
                    <th class="text-center" title="Actividad 1 periodo 1">Act 1</th>
                    <th class="text-center" title="Actividad 2 periodo 1">Act 2</th>
                    <th class="text-center" title="Actividad 3 periodo 1">Act 3</th>
                    <th class="text-center" title="Actividad 4 periodo 1">Act 4</th>
                    <th class="text-center" title="Actividad 5 periodo 1">Act 5</th>
                    <th class="text-center" title="Nota de recuperacion periodo 1">Nota R</th>
                        <!-- fin periodo 1 -->

                         <!-- periodo 2 -->
                    <th class="text-center" title="Actividad 1 periodo 2">Act 1</th>
                    <th class="text-center" title="Actividad 2 periodo 2">Act 2</th>
                    <th class="text-center" title="Actividad 3 periodo 2">Act 3</th>
                    <th class="text-center" title="Actividad 4 periodo 2">Act 4</th>
                    <th class="text-center" title="Actividad 5 periodo 2">Act 5</th>
                   <th class="text-center" title="Nota de recuperacion periodo 2">Nota R</th>
                        <!-- fin periodo 2 -->


                         <!-- periodo 3 -->
                    <th class="text-center" title="Actividad 1 periodo 3">Act 1</th>
                    <th class="text-center" title="Actividad 2 periodo 3">Act 2</th>
                    <th class="text-center" title="Actividad 3 periodo 3">Act 3</th>
                    <th class="text-center" title="Actividad 4 periodo 3">Act 4</th>
                    <th class="text-center" title="Actividad 5 periodo 3">Act 5</th>
                   <th class="text-center" title="Nota de recuperacion periodo 3">Nota R</th>
                        <!-- fin periodo 3 -->


                         <!-- periodo 4 -->
                    <th class="text-center" title="Actividad 1 periodo 4">Act 1</th>
                    <th class="text-center" title="Actividad 2 periodo 4">Act 2</th>
                    <th class="text-center" title="Actividad 3 periodo 4">Act 3</th>
                    <th class="text-center" title="Actividad 4 periodo 4">Act 4</th>
                    <th class="text-center" title="Actividad 5 periodo 4">Act 5</th>
                    <th class="text-center" title="Nota de recuperacion periodo 4">Nota R</th>
                        <!-- fin periodo 4 -->
                        <!-- <th colspan="4"></th> -->
                 
                  </tr>
                </thead>

<?php $porcentaj = mysqli_query($coneion,"SELECT  * FROM porcentaje WHERE   id='1'");
 $por = mysqli_fetch_array($porcentaj);

 $p1= $por['p1'];
 $p2= $por['p2'];
 $p3= $por['p3'];
 $p4= $por['p4'];
 $p5= $por['p5'];

  ?>
                <tbody>
                <?php foreach ($query_consultarGYM as $dataA){ ?>  
                  <tr>
                    <td><?php echo $dataA->carnet; ?></td>
                    <td><img  width="90px" height="100px" src="../files/alumnos/<?php echo $dataA->foto; ?>"></td>
                    <td><?php echo $dataA->nombre; ?></td>
                    <td><?php echo $dataA->apellido; ?></td>
                    <!-- periodo 1 -->
                    <td><?php echo $dataA->EVA1P1 / $p1; ?></td>
                    <td><?php echo $dataA->EVA2P1 / $p2; ?></td>
                    <td><?php echo $dataA->EVA3P1 / $p3; ?></td>
                    <td><?php echo $dataA->EVA4P1 / $p4; ?></td>
                    <td><?php echo $dataA->EVA5P1 / $p5; ?></td>
                    <td><?php echo $dataA->NRP1; ?></td>
                    <!-- fin periodo 1 -->

                     <!-- periodo 2 -->
                    <td><?php echo $dataA->EVA1P2 / $p1; ?></td>
                    <td><?php echo $dataA->EVA2P2 / $p2; ?></td>
                    <td><?php echo $dataA->EVA3P2 / $p3; ?></td>
                    <td><?php echo $dataA->EVA4P2 / $p4; ?></td>
                    <td><?php echo $dataA->EVA5P2 / $p5; ?></td>
                    <td><?php echo $dataA->NRP2; ?></td>
                    <!-- fin periodo 2 -->

                     <!-- periodo 3 -->
                    <td><?php echo $dataA->EVA1P3 / $p1; ?></td>
                    <td><?php echo $dataA->EVA2P3 / $p2; ?></td>
                    <td><?php echo $dataA->EVA3P3 / $p3; ?></td>
                    <td><?php echo $dataA->EVA4P3 / $p4; ?></td>
                    <td><?php echo $dataA->EVA5P3 / $p5; ?></td>
                    <td><?php echo $dataA->NRP3; ?></td>
                    <!-- fin periodo 3 -->

                     <!-- periodo 4 -->
                    <td><?php echo $dataA->EVA1P4 / $p1; ?></td>
                    <td><?php echo $dataA->EVA2P4 / $p2; ?></td>
                    <td><?php echo $dataA->EVA3P4 / $p3; ?></td>
                    <td><?php echo $dataA->EVA4P4 / $p4; ?></td>
                    <td><?php echo $dataA->EVA5P4 / $p5; ?></td>
                    <td><?php echo $dataA->NRP4; ?></td>
                    <!-- fin periodo 4 -->
                    
                     <!-- nota de recuperacion -->
                    <td><?php echo $dataA->NRFINAL; ?></td>
                    <!-- nota final -->
                    <td><?php echo $dataA->NOTAFINAL; ?></td>
                  </tr>
           <?php } ?>


                
                </tbody>
              </table>
            </div>

</div>


<?php 
}


 ?>













           