<?php 



 //  PERIODO 1
// multiplico la nota por el porcentaje
$EVA1P1= $EVA1P1 * $p1;
// multiplico la nota por el porcentaje
$EVA2P1= $EVA2P1 * $p2;
// multiplico la nota por el porcentaje
$EVA3P1= $EVA3P1 * $p3;
// multiplico la nota por el porcentaje
$EVA4P1= $EVA4P1 * $p4;
// multiplico la nota por el porcentaje
$EVA5P1= $EVA5P1 * $p5;
            // suma del PERIODO 1
// $Sumap1=$EVA1P1+$EVA2P1+$EVA3P1+$EVA4P1+$EVA5P1;
// nota final periodo 1
// $NRP1= $Sumap1 / 100;
//  PERIODO 2
// multiplico la nota por el porcentaje
$EVA1P2= $EVA1P2 * $p1;
// multiplico la nota por el porcentaje
$EVA2P2= $EVA2P2 * $p2;
// multiplico la nota por el porcentaje
$EVA3P2= $EVA3P2 * $p3;
// multiplico la nota por el porcentaje
$EVA4P2= $EVA4P2 * $p4;
// multiplico la nota por el porcentaje
$EVA5P2= $EVA5P2 * $p5;
            // suma del PERIODO 2
// $Sumap2=$EVA1P2+$EVA2P2+$EVA3P2+$EVA4P2+$EVA5P2;
// nota final periodo 2
// $NRP2= $Sumap2 / 100;
//  PERIODO 3
// multiplico la nota por el porcentaje
$EVA1P3= $EVA1P3 * $p1;
// multiplico la nota por el porcentaje
$EVA2P3= $EVA2P3 * $p2;
// multiplico la nota por el porcentaje
$EVA3P3= $EVA3P3 * $p3;
// multiplico la nota por el porcentaje
$EVA4P3= $EVA4P3 * $p4;
// multiplico la nota por el porcentaje
$EVA5P3= $EVA5P3 * $p5;
            // suma del PERIODO 3
// $Sumap3=$EVA1P3+$EVA2P3+$EVA3P3+$EVA4P3+$EVA5P3;
// nota final periodo 3
// $NRP3= $Sumap3 / 100;
//  PERIODO 4
// multiplico la nota por el porcentaje
$EVA1P4= $EVA1P4 * $p1;
// multiplico la nota por el porcentaje
$EVA2P4= $EVA2P4 * $p2;
// multiplico la nota por el porcentaje
$EVA3P4= $EVA3P4 * $p3;
// multiplico la nota por el porcentaje
$EVA4P4= $EVA4P4 * $p4;
// multiplico la nota por el porcentaje
$EVA5P4= $EVA5P4 * $p5;
            // suma del PERIODO 4
// $Sumap4=$EVA1P4+$EVA2P4+$EVA3P4+$EVA4P4+$EVA5P4;
// nota final periodo 4
// $NRP4= $Sumap4 / 100;

// nota penultima final
// $notaPf=$NRP1+$NRP2+$NRP3+$NRP4;

// $NRFINAL= $notaPf / 4;



$Sumap1=$EVA1P1+$EVA2P1+$EVA3P1+$EVA4P1+$EVA5P1;
$Sumap2=$EVA1P2+$EVA2P2+$EVA3P2+$EVA4P2+$EVA5P2;
$Sumap3=$EVA1P3+$EVA2P3+$EVA3P3+$EVA4P3+$EVA5P3;
$Sumap4=$EVA1P4+$EVA2P4+$EVA3P4+$EVA4P4+$EVA5P4;


$pe1= $Sumap1 / 100;
$pe2= $Sumap2 / 100;
$pe3= $Sumap3 / 100;
$pe4= $Sumap4 / 100;

$notaF=$pe1+$pe2+$pe3+$pe4;
// nota final
// $notaF=$NRP1+$NRP2+$NRP3+$NRP4;

$NOTAFINAL= $notaF / 4;



 ?>