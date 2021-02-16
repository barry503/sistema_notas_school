<?php 

$GradConparado = $_POST["grado"];
if ($GradConparado == 12) {
    # 3 bto Contador
    include 'NotasBtoContador3.php';
    
}else {

    # 1 A 2 bto Contador
    include 'NotasBtoContador1A2.php';
}





 ?>


 