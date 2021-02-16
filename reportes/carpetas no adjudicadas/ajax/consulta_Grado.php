<?php 




// Datos del alumno
$QueryAlumno = mysqli_query($coneion,"SELECT a.carnet,x.idsexo,x.nombre_sexo as sexo, g.idgrado,g.nombre_grado as grado, a.foto,a.nombre,a.apellido,a.fechanac,a.idsexo,a.idgrado,a.telefono,a.direccion, a.encargado, a.nie, a.seccion, a.salud, a.trabajo, a.mama, a.papa, a.codfam, a.repetidor, a.estado FROM alumnos a INNER JOIN sexo x INNER JOIN grado g ON x.idsexo=a.idsexo AND g.idgrado=a.idgrado AND a.carnet='$alumno'");
 $DataA = mysqli_fetch_array($QueryAlumno);

$Anie     = $DataA['nie'];
$Afoto     = $DataA['foto'];
$Anombre  = $DataA['nombre'];
$Aapellido= $DataA['apellido']; 
$Agrado= $DataA['grado']; 
$Aseccion= $DataA['seccion']; 
$Aencargado= $DataA['encargado'];

$Aidgrado= $DataA['idgrado']; 

// arreglos para conparar educacion basica y bachillerato
$basica = ['1','2','3','4','5','6','7','8','9'];
$btos = ['10','11','12'];

// ciclo para compara a educacion basica
foreach ($basica as $gr ) {
	if ($Aidgrado==$gr) {
		$opcion1= 'Educacion Basica';
	}
}
// ciclo para compara a bachillerato
foreach ($btos as $bto ) {
	if ($Aidgrado==$bto) {
		$opcion1= 'Contaduria publica';
		if($Aidgrado==10){
         $opcion1= $opcion1 .'.';
		}elseif($Aidgrado==11){
		$opcion1= $opcion1 .'..';	
		}
		elseif($Aidgrado==12){
		$opcion1= $opcion1 .'...';	
		}
	}
}


// datos del orientador
$QueryOrientador = mysqli_query($coneion,"SELECT a.carnet, a.idgrado, o.iddocentes, o.idgrado, g.idgrado, d.iddocentes, CONCAT(d.nombre,', ',d.apellido)as Orientador   FROM orientadores o INNER JOIN alumnos a INNER JOIN grado g INNER JOIN docentes d ON   a.carnet='$alumno' AND a.idgrado=g.idgrado  AND d.iddocentes=o.iddocentes");
 $ori = mysqli_fetch_array($QueryOrientador);

 $Orientador= $ori['Orientador'];




// aqui van las condiciones y consultas de las conductas
#si el periodo es igual a 1 trae notas del 1° periodo.php
if ($periodo==1) {

include 'BoletaAlumno/c1.php'; 
include 'BoletaAlumno/caliConducta.php'; 


}

elseif ($periodo==2) {

include 'BoletaAlumno/c2.php';
include 'BoletaAlumno/caliConducta.php';  

}
elseif ($periodo==3) {

include 'BoletaAlumno/c3.php'; 
include 'BoletaAlumno/caliConducta.php'; 

}
elseif ($periodo==4) {

include 'BoletaAlumno/c4.php'; 
include 'BoletaAlumno/caliConducta.php'; 


}




// porcentajes de acividades
$porcentaj = mysqli_query($coneion,"SELECT  * FROM porcentaje WHERE   id='1' ");
 $por = mysqli_fetch_array($porcentaj);

 $p1= $por['p1'];
 $p2= $por['p2'];
 $p3= $por['p3'];
 $p4= $por['p4'];
 $p5= $por['p5'];






// Identificadores de las materias
 include 'BoletaAlumno/idMaterias.php'; 

#si el periodo es igual a 1 trae notas del 1° periodo.php
if ($periodo==1) {

include 'BoletaAlumno/1°periodo.php'; 

}

elseif ($periodo==2) {

include 'BoletaAlumno/2°periodo.php'; 

}

elseif ($periodo==3) {

include 'BoletaAlumno/3°periodo.php'; 

}


elseif ($periodo==4) {

include 'BoletaAlumno/4°periodo.php'; 

}else{

 ?>

  <script >
	                    /* Alerta para envio error*/
Swal.fire({
                       icon:'error',
                       title:'Error al mostrar las notas...',
                         html: '<h4>Error: Selecciona un periodo.</h4>',
                          grow: 'fullscreen',
                       footer: 'Debes seleccionar el periodo. '
                   });

</script>


<?php 
}
 ?>










