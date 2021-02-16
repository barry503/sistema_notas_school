<!-- variables de datos Y validacion de campos vacios -->
<?php
#variable para traer la consulta
 $periodo=$_POST["periodo"];

#variable para traer los datos
$grado = $_POST["grado"];


?>


<?php if ($periodo==0){ ?>
<script >
                      /* Alerta para  error Periodo*/
Swal.fire({
                       icon:'warning',
                       title:'Error 403',
                         html: '<h4>Error: Selecciona un Periodo </h4>',
                          grow: 'fullscreen',
                       footer: 'Debes seleccionar  un Periodo.'
                   });

</script>


<?php } elseif($grado==0){  ?>

<script >
                      /* Alerta para envio error*/
Swal.fire({
                       icon:'info',
                       title:'Error 404',
                         html: '<h4>Error: Selecciona un grado </h4>',
                          grow: 'fullscreen',
                       footer: 'Debes seleccionar  un grado.'
                   });

</script>


 <?php } else{


 ?>

<!-- alerta con javascript -->
<script >
                      /* Alerta para envio Exitoso*/
Swal.fire({
                       icon:'success',
                       title:'Consulta exitosa.',
                         html: '<p>Nota: baja un poco para ver los resultados. </p>',
                          grow: 'fullscreen',
                       footer: 'Para imprimir los resultados pulsa el boton Imprimir'
                   });

</script>
<!--/ alerta con javascript -->


<?php }  ?>



<!-- <style>
    /*Clase para alinear verticalmente los textos de las materias*/
  .verticalText {
     text-align: center;
     vertical-align: middle;
     width: 20px;
     margin: 0px;
     padding: 0px; 
     padding-left: 3px; 
  padding-right: 3px; 
 padding-top: 10px;
  white-space: nowrap;
   -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
     }
</style> -->
<?php 
// FECHA DE HOY-------------------------------------------------------------
 $fechaHoy = date_default_timezone_set('America/El_Salvador');# Zona Horaria 
  $fechaHoy = date("d-m-Y");
  $HORA = date("h:m:s");
// FECHA DE HOY-------------------------------------------------------------

// ASIGNO EL NOMBRE DEL GRADO
 $sqlGradMater = mysqli_query($coneion,"SELECT  g.idgrado,g.nombre_grado as grado
 FROM  grado g WHERE  g.idgrado='$grado' ");
 $gradmater = mysqli_fetch_array($sqlGradMater);

 $Agrado= $gradmater['grado'];


?>


 


















