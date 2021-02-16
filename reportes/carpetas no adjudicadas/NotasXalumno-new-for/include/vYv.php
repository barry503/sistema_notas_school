<!-- variables de datos Y validacion de campos vacios -->
<?php

#variable para traer los datos
$alumno = $_POST["alumno"];

#variable para traer la consulta
 $periodo=$_POST["periodo"];
?>




<?php if($alumno==0){ ?>
	<script >
                      /* Alerta para envio error*/
Swal.fire({
                       icon:'info',
                       title:'Error 404',
                         html: '<h4>Error: Selecciona un alumno </h4>',
                          grow: 'fullscreen',
                       footer: 'Debes seleccionar  un alumno.'
                   });

</script>
<?php  }  ?>



<?php if($periodo==0){ ?>
	<script >
                      /* Alerta para  error Periodo*/
Swal.fire({
                       icon:'danger',
                       title:'Error 403',
                         html: '<h4>Error: Selecciona un Periodo </h4>',
                          grow: 'fullscreen',
                       footer: 'Debes seleccionar  un Periodo.'
                   });

</script>
<?php  }  ?>