<!-- variables de datos Y validacion de campos vacios -->
<?php
#variable para traer la consulta
 $periodo=$_POST["periodo"];

#variable para traer los datos
$alumnoCarnet = $_POST["alumno"];
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


<?php } elseif($alumnoCarnet==0){  ?>

<script >
                      /* Alerta para envio error*/
Swal.fire({
                       icon:'info',
                       title:'Error 404',
                         html: '<h4>Error: Selecciona un alumnoCarnet </h4>',
                          grow: 'fullscreen',
                       footer: 'Debes seleccionar  un alumnoCarnet.'
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


















