<?php 
#  variables de datos Y validacion de campos vacios
 #variable para traer el campo periodo
 $periodo=$_POST["periodo"];
 #variable para traer el campo materia
 $materia = $_POST["materia"];
 #variable para traer el campo grado
 $grado = $_POST["grado"];
 #variable agregada
 $REFE = "REFE";//variable con un valor constante osea no cambia su valor
?>
<!-- CONDICIONAL DE MATERIA -->
<?php 
 if ($materia == $REFE): ?>
 <script >
 /* Alerta para  error Periodo*/
 Swal.fire({
   icon:'error',
   title:'Materia o un modulo invalidos',
   html: '<h4>Error: Selecciona una materia o modulo </h4>',
   grow: 'fullscreen',
  footer: 'Debes seleccionar  una materia o modulo'
    });
 </script>
 <?php
 header('Location: ../0.consolidadoXPeriodoXmateria.php'); 
 ?>
 <?php endif ?>
<!-- CONDICIONAL DE PERIODO -->
<?php 
 if ($periodo==0): ?>
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
 <?php
 header('Location: ../0.consolidadoXPeriodoXmateria.php'); 
 ?>
 <?php endif ?>
<!-- CONDICIONAL DE GRADO -->
<?php 
 if($grado==0):  ?>
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
 <?php
 header('Location: ../0.consolidadoXPeriodoXmateria.php'); 
 ?>
 <?php endif ?>



<?php 
/*APARTADO DE VARIABLES DE ACTIVIDADES X PERIODO*/
if ($periodo ==1) {
  # code...
 #para todas las notas
 $A1 = 'EVA1P1';
 $A2 = 'EVA2P1';
 $A3 = 'EVA3P1';
 $A4 = 'EVA4P1';
 $A5 = 'EVA5P1';


}
elseif ($periodo ==2) {
  # code...
 #para todas las notas
 $A1 = 'EVA1P2';
 $A2 = 'EVA2P2';
 $A3 = 'EVA3P2';
 $A4 = 'EVA4P2';
 $A5 = 'EVA5P2';
 

}

elseif ($periodo ==3) {
  # code...
 #para todas las notas
 $A1 = 'EVA1P3';
 $A2 = 'EVA2P3';
 $A3 = 'EVA3P3';
 $A4 = 'EVA4P3';
 $A5 = 'EVA5P3';
 

}
elseif ($periodo ==4) {
  # code...
 #para todas las notas
 $A1 = 'EVA1P4';
 $A2 = 'EVA2P4';
 $A3 = 'EVA3P4';
 $A4 = 'EVA4P4';
 $A5 = 'EVA5P4';
 

}
#APARTADO DE VARIABLES DE ACTIVIDADES X PERIODO

 ?>


















