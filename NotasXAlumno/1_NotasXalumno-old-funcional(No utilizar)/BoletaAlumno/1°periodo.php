<?php 

// consultas para traer las notas del primer periodo



#Lenguaje

$QueryLenguaje = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M1' AND N.idmaterias= '$M1' AND N.carnet='$alumno' ");
 $lengua = mysqli_fetch_array($QueryLenguaje);

$Lleng= $lengua['NOMMAT']; 
$Lnota1= $lengua['EVA1P1']; 
$Lnota2= $lengua['EVA2P1']; 
$Lnota3= $lengua['EVA3P1']; 
$Lnota4= $lengua['EVA4P1']; 
$Lnota5= $lengua['EVA5P1']; 
$LnotaRecu= $lengua['NRP1']; 

$S1=$Lnota1+$Lnota2+$Lnota3+$Lnota4+$Lnota5;

$LPROMEDIO= $S1 / 5;



#Matematicas
$QueryMatematicas = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M2' AND N.idmaterias= '$M2' AND N.carnet='$alumno' ");
 $mate = mysqli_fetch_array($QueryMatematicas);

$Matematicas= $mate['NOMMAT']; 
$Mnota1= $mate['EVA1P1']; 
$Mnota2= $mate['EVA2P1']; 
$Mnota3= $mate['EVA3P1']; 
$Mnota4= $mate['EVA4P1']; 
$Mnota5= $mate['EVA5P1']; 
$MnotaRecu= $mate['NRP1']; 

$S2=$Mnota1+$Mnota2+$Mnota3+$Mnota4+$Mnota5;

$MPROMEDIO= $S2 / 5;






#CienciasFisicas
$Querycienciaf = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M3' AND N.idmaterias= '$M3' AND N.carnet='$alumno' ");
 $CF = mysqli_fetch_array($Querycienciaf);

$CienciasFisicas= $CF['NOMMAT']; 
$CFnota1= $CF['EVA1P1']; 
$CFnota2= $CF['EVA2P1']; 
$CFnota3= $CF['EVA3P1']; 
$CFnota4= $CF['EVA4P1']; 
$CFnota5= $CF['EVA5P1']; 
$CFnotaRecu= $CF['NRP1']; 

$S3=$CFnota1+$CFnota2+$CFnota3+$CFnota4+$CFnota5;

$CFPROMEDIO= $S3 / 5;





#Estudios sociales
$QuerySOCIAles = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M4' AND N.idmaterias= '$M4' AND N.carnet='$alumno' ");
 $Soc = mysqli_fetch_array($QuerySOCIAles);

$Sociales= $Soc['NOMMAT']; 
$Socnota1= $Soc['EVA1P1']; 
$Socnota2= $Soc['EVA2P1']; 
$Socnota3= $Soc['EVA3P1']; 
$Socnota4= $Soc['EVA4P1']; 
$Socnota5= $Soc['EVA5P1']; 
$SocnotaRecu= $Soc['NRP1']; 

$S4=$Socnota1+$Socnota2+$Socnota3+$Socnota4+$Socnota5;

$SocPROMEDIO= $S4 / 5;


#Seminario
$QuerySemi = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M5' AND N.idmaterias= '$M5' AND N.carnet='$alumno' ");
 $semi = mysqli_fetch_array($QuerySemi);

$Seminario= $semi['NOMMAT']; 
$Semnota1= $semi['EVA1P1']; 
$Semnota2= $semi['EVA2P1']; 
$Semnota3= $semi['EVA3P1']; 
$Semnota4= $semi['EVA4P1']; 
$Semnota5= $semi['EVA5P1']; 
$SemnotaRecu= $semi['NRP1']; 

$S5=$Semnota1+$Semnota2+$Semnota3+$Semnota4+$Semnota5;

$SemPROMEDIO= $S5 / 5;





# Educacion Fisica


$QueryEf = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M6' AND N.idmaterias= '$M6' AND N.carnet='$alumno' ");
 $EDU = mysqli_fetch_array($QueryEf);

$EducacionFisica= $EDU['NOMMAT']; 
$Edunota1= $EDU['EVA1P1']; 
$Edunota2= $EDU['EVA2P1']; 
$Edunota3= $EDU['EVA3P1']; 
$Edunota4= $EDU['EVA4P1']; 
$Edunota5= $EDU['EVA5P1']; 
$EdunotaRecu= $EDU['NRP1']; 

$S6=$Edunota1+$Edunota2+$Edunota3+$Edunota4+$Edunota5;

$EduPROMEDIO= $S6 / 5;










# Informatica


$Queryforma = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M7' AND N.idmaterias= '$M7' AND N.carnet='$alumno' ");
 $infor = mysqli_fetch_array($Queryforma);

$Informatica= $infor['NOMMAT']; 
$Infonota1= $infor['EVA1P1']; 
$Infonota2= $infor['EVA2P1']; 
$Infonota3= $infor['EVA3P1']; 
$Infonota4= $infor['EVA4P1']; 
$Infonota5= $infor['EVA5P1']; 
$InfonotaRecu= $infor['NRP1']; 

$S7=$Infonota1+$Infonota2+$Infonota3+$Infonota4+$Infonota5;

$InforPROMEDIO= $S7 / 5;






# Ingles

$QueryIng = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M8' AND N.idmaterias= '$M8' AND N.carnet='$alumno' ");
 $gles = mysqli_fetch_array($QueryIng);

$Ingles= $gles['NOMMAT']; 
$Ingnota1= $gles['EVA1P1']; 
$Ingnota2= $gles['EVA2P1']; 
$Ingnota3= $gles['EVA3P1']; 
$Ingnota4= $gles['EVA4P1']; 
$Ingnota5= $gles['EVA5P1']; 
$IngnotaRecu= $gles['NRP1']; 

$S8=$Ingnota1+$Ingnota2+$Ingnota3+$Ingnota4+$Ingnota5;

$IngPROMEDIO= $S8 / 5;







# Tecnologia

$QueryTecno = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M9' AND N.idmaterias= '$M9' AND N.carnet='$alumno' ");
 $tecno = mysqli_fetch_array($QueryTecno);

$Tecnologia= $tecno['NOMMAT']; 
$Tecnnota1= $tecno['EVA1P1']; 
$Tecnnota2= $tecno['EVA2P1']; 
$Tecnnota3= $tecno['EVA3P1']; 
$Tecnnota4= $tecno['EVA4P1']; 
$Tecnnota5= $tecno['EVA5P1']; 
$TecnnotaRecu= $tecno['NRP1']; 

$S9=$Tecnnota1+$Tecnnota2+$Tecnnota3+$Tecnnota4+$Tecnnota5;

$TecnPROMEDIO= $S9 / 5;





# QUimicaYBiologia

$QueryQyB = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M10' AND N.idmaterias= '$M10' AND N.carnet='$alumno' ");
 $qyb = mysqli_fetch_array($QueryQyB);

$QUimicaYBiologia= $qyb['NOMMAT']; 
$Qybnota1= $qyb['EVA1P1']; 
$Qybnota2= $qyb['EVA2P1']; 
$Qybnota3= $qyb['EVA3P1']; 
$Qybnota4= $qyb['EVA4P1']; 
$Qybnota5= $qyb['EVA5P1']; 
$QybnotaRecu= $qyb['NRP1']; 

$S10=$Qybnota1+$Qybnota2+$Qybnota3+$Qybnota4+$Qybnota5;

$QybPROMEDIO= $S10 / 5;




# Orientacion para la vida 

$QueryOOpv = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M11' AND N.idmaterias= '$M11' AND N.carnet='$alumno' ");
 $Ovp = mysqli_fetch_array($QueryOOpv);

$Opv= $Ovp['NOMMAT']; 
$Opvnota1= $Ovp['EVA1P1']; 
$Opvnota2= $Ovp['EVA2P1']; 
$Opvnota3= $Ovp['EVA3P1']; 
$Opvnota4= $Ovp['EVA4P1']; 
$Opvnota5= $Ovp['EVA5P1']; 
$OpvonotaRecu= $Ovp['NRP1']; 

$S11=$Opvnota1+$Opvnota2+$Opvnota3+$Opvnota4+$Opvnota5;

$OpvPROMEDIO= $S11 / 5;



# Laboratorio de creatividad

$QueryLdcv = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M12' AND N.idmaterias= '$M12' AND N.carnet='$alumno' ");
 $ldcj = mysqli_fetch_array($QueryLdcv);

$LaboratorioDeCreatividad= $ldcj['NOMMAT']; 
$Ldcnota1= $ldcj['EVA1P1']; 
$Ldcnota2= $ldcj['EVA2P1']; 
$Ldcnota3= $ldcj['EVA3P1']; 
$Ldcnota4= $ldcj['EVA4P1']; 
$Ldcnota5= $ldcj['EVA5P1']; 
$LdcnotaRecu= $ldcj['NRP1']; 

$S12=$Ldcnota1+$Ldcnota2+$Ldcnota3+$Ldcnota4+$Ldcnota5;

$LdcPROMEDIO= $S12 / 5;



# Formacion Cristiana

$QueryForc = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M13' AND N.idmaterias= '$M8' AND N.carnet='$alumno' ");
 $forcr = mysqli_fetch_array($QueryForc);

$FormacionCristiana= $forcr['NOMMAT']; 
$Forcrisnota1= $forcr['EVA1P1']; 
$Forcrisnota2= $forcr['EVA2P1']; 
$Forcrisnota3= $forcr['EVA3P1']; 
$Forcrisnota4= $forcr['EVA4P1']; 
$Forcrisnota5= $forcr['EVA5P1']; 
$ForcrisnotaRecu= $forcr['NRP1']; 

$S13=$Forcrisnota1+$Forcrisnota2+$Forcrisnota3+$Forcrisnota4+$Forcrisnota5;

$ForcrisPROMEDIO= $S13 / 5;



# Presupuesto

$Querypresu = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M14' AND N.idmaterias= '$M14' AND N.carnet='$alumno' ");
 $presu = mysqli_fetch_array($Querypresu);

$Presupuesto= $presu['NOMMAT']; 
$Presunota1= $presu['EVA1P1']; 
$Presunota2= $presu['EVA2P1']; 
$Presunota3= $presu['EVA3P1']; 
$Presunota4= $presu['EVA4P1']; 
$Presunota5= $presu['EVA5P1']; 
$PresunotaRecu= $presu['NRP1']; 

$S14=$Presunota1+$Presunota2+$Presunota3+$Presunota4+$Presunota5;

$PresuPROMEDIO= $S14 / 5;


# Comercializacion

$Querycomer = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M15' AND N.idmaterias= '$M15' AND N.carnet='$alumno' ");
 $co3 = mysqli_fetch_array($Querycomer);

$Comercializacion= $co3['NOMMAT']; 
$Comernota1= $co3['EVA1P1']; 
$Comernota2= $co3['EVA2P1']; 
$Comernota3= $co3['EVA3P1']; 
$Comernota4= $co3['EVA4P1']; 
$Comernota5= $co3['EVA5P1']; 
$ComernotaRecu= $co3['NRP1']; 

$S15=$Comernota1+$Comernota2+$Comernota3+$Comernota4+$Comernota5;

$ComerPROMEDIO= $S15 / 5;




# Contabilidad de costos

$Queryconta = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P1/'$p1'as EVA1P1,N.EVA2P1/'$p2'as EVA2P1,N.EVA3P1/'$p3'as EVA3P1,N.EVA4P1/'$p4'as EVA4P1,N.EVA5P1/'$p5'as EVA5P1,N.NRP1,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M16' AND N.idmaterias= '$M16' AND N.carnet='$alumno' ");
 $contab = mysqli_fetch_array($Queryconta);

$ContabilidadDeCostos= $contab['NOMMAT']; 
$Contanota1= $contab['EVA1P1']; 
$Contanota2= $contab['EVA2P1']; 
$Contanota3= $contab['EVA3P1']; 
$Contanota4= $contab['EVA4P1']; 
$Contanota5= $contab['EVA5P1']; 
$ContanotaRecu= $contab['NRP1']; 

$S16=$Contanota1+$Contanota2+$Contanota3+$Contanota4+$Contanota5;

$ContaPROMEDIO= $S16 / 5;





 ?>