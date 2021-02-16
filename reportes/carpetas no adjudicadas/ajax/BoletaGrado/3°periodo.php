<?php 

// consultas para traer las notas del tercer periodo



#Lenguaje

$QueryLenguaje = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M1' AND N.idmaterias= '$M1' AND N.carnet='$alumno' ");
 $lengua = mysqli_fetch_array($QueryLenguaje);

$Lleng= $lengua['NOMMAT']; 
$Lnota1= $lengua['EVA1P3']; 
$Lnota2= $lengua['EVA2P3']; 
$Lnota3= $lengua['EVA3P3']; 
$Lnota4= $lengua['EVA4P3']; 
$Lnota5= $lengua['EVA5P3']; 
$LnotaRecu= $lengua['NRP3']; 

$S1=$Lnota1+$Lnota2+$Lnota3+$Lnota4+$Lnota5;

$LPROMEDIO= $S1 / 5;



#Matematicas
$QueryMatematicas = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M2' AND N.idmaterias= '$M2' AND N.carnet='$alumno' ");
 $mate = mysqli_fetch_array($QueryMatematicas);

$Matematicas= $mate['NOMMAT']; 
$Mnota1= $mate['EVA1P3']; 
$Mnota2= $mate['EVA2P3']; 
$Mnota3= $mate['EVA3P3']; 
$Mnota4= $mate['EVA4P3']; 
$Mnota5= $mate['EVA5P3']; 
$MnotaRecu= $mate['NRP3']; 

$S2=$Mnota1+$Mnota2+$Mnota3+$Mnota4+$Mnota5;

$MPROMEDIO= $S2 / 5;






#CienciasFisicas
$Querycienciaf = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M3' AND N.idmaterias= '$M3' AND N.carnet='$alumno' ");
 $CF = mysqli_fetch_array($Querycienciaf);

$CienciasFisicas= $CF['NOMMAT']; 
$CFnota1= $CF['EVA1P3']; 
$CFnota2= $CF['EVA2P3']; 
$CFnota3= $CF['EVA3P3']; 
$CFnota4= $CF['EVA4P3']; 
$CFnota5= $CF['EVA5P3']; 
$CFnotaRecu= $CF['NRP3']; 

$S3=$CFnota1+$CFnota2+$CFnota3+$CFnota4+$CFnota5;

$CFPROMEDIO= $S3 / 5;





#Estudios sociales
$QuerySOCIAles = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M4' AND N.idmaterias= '$M4' AND N.carnet='$alumno' ");
 $Soc = mysqli_fetch_array($QuerySOCIAles);

$Sociales= $Soc['NOMMAT']; 
$Socnota1= $Soc['EVA1P3']; 
$Socnota2= $Soc['EVA2P3']; 
$Socnota3= $Soc['EVA3P3']; 
$Socnota4= $Soc['EVA4P3']; 
$Socnota5= $Soc['EVA5P3']; 
$SocnotaRecu= $Soc['NRP3']; 

$S4=$Socnota1+$Socnota2+$Socnota3+$Socnota4+$Socnota5;

$SocPROMEDIO= $S4 / 5;


#Seminario
$QuerySemi = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M5' AND N.idmaterias= '$M5' AND N.carnet='$alumno' ");
 $semi = mysqli_fetch_array($QuerySemi);

$Seminario= $semi['NOMMAT']; 
$Semnota1= $semi['EVA1P3']; 
$Semnota2= $semi['EVA2P3']; 
$Semnota3= $semi['EVA3P3']; 
$Semnota4= $semi['EVA4P3']; 
$Semnota5= $semi['EVA5P3']; 
$SemnotaRecu= $semi['NRP3']; 

$S5=$Semnota1+$Semnota2+$Semnota3+$Semnota4+$Semnota5;

$SemPROMEDIO= $S5 / 5;





# Educacion Fisica


$QueryEf = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M6' AND N.idmaterias= '$M6' AND N.carnet='$alumno' ");
 $EDU = mysqli_fetch_array($QueryEf);

$EducacionFisica= $EDU['NOMMAT']; 
$Edunota1= $EDU['EVA1P3']; 
$Edunota2= $EDU['EVA2P3']; 
$Edunota3= $EDU['EVA3P3']; 
$Edunota4= $EDU['EVA4P3']; 
$Edunota5= $EDU['EVA5P3']; 
$EdunotaRecu= $EDU['NRP3']; 

$S6=$Edunota1+$Edunota2+$Edunota3+$Edunota4+$Edunota5;

$EduPROMEDIO= $S6 / 5;










# Informatica


$Queryforma = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M7' AND N.idmaterias= '$M7' AND N.carnet='$alumno' ");
 $infor = mysqli_fetch_array($Queryforma);

$Informatica= $infor['NOMMAT']; 
$Infonota1= $infor['EVA1P3']; 
$Infonota2= $infor['EVA2P3']; 
$Infonota3= $infor['EVA3P3']; 
$Infonota4= $infor['EVA4P3']; 
$Infonota5= $infor['EVA5P3']; 
$InfonotaRecu= $infor['NRP3']; 

$S7=$Infonota1+$Infonota2+$Infonota3+$Infonota4+$Infonota5;

$InforPROMEDIO= $S7 / 5;






# Ingles

$QueryIng = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M8' AND N.idmaterias= '$M8' AND N.carnet='$alumno' ");
 $gles = mysqli_fetch_array($QueryIng);

$Ingles= $gles['NOMMAT']; 
$Ingnota1= $gles['EVA1P3']; 
$Ingnota2= $gles['EVA2P3']; 
$Ingnota3= $gles['EVA3P3']; 
$Ingnota4= $gles['EVA4P3']; 
$Ingnota5= $gles['EVA5P3']; 
$IngnotaRecu= $gles['NRP3']; 

$S8=$Ingnota1+$Ingnota2+$Ingnota3+$Ingnota4+$Ingnota5;

$IngPROMEDIO= $S8 / 5;







# Tecnologia

$QueryTecno = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M9' AND N.idmaterias= '$M9' AND N.carnet='$alumno' ");
 $tecno = mysqli_fetch_array($QueryTecno);

$Tecnologia= $tecno['NOMMAT']; 
$Tecnnota1= $tecno['EVA1P3']; 
$Tecnnota2= $tecno['EVA2P3']; 
$Tecnnota3= $tecno['EVA3P3']; 
$Tecnnota4= $tecno['EVA4P3']; 
$Tecnnota5= $tecno['EVA5P3']; 
$TecnnotaRecu= $tecno['NRP3']; 

$S9=$Tecnnota1+$Tecnnota2+$Tecnnota3+$Tecnnota4+$Tecnnota5;

$TecnPROMEDIO= $S9 / 5;





# QUimicaYBiologia

$QueryQyB = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M10' AND N.idmaterias= '$M10' AND N.carnet='$alumno' ");
 $qyb = mysqli_fetch_array($QueryQyB);

$QUimicaYBiologia= $qyb['NOMMAT']; 
$Qybnota1= $qyb['EVA1P3']; 
$Qybnota2= $qyb['EVA2P3']; 
$Qybnota3= $qyb['EVA3P3']; 
$Qybnota4= $qyb['EVA4P3']; 
$Qybnota5= $qyb['EVA5P3']; 
$QybnotaRecu= $qyb['NRP3']; 

$S10=$Qybnota1+$Qybnota2+$Qybnota3+$Qybnota4+$Qybnota5;

$QybPROMEDIO= $S10 / 5;




# Orientacion para la vida 

$QueryOOpv = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M11' AND N.idmaterias= '$M11' AND N.carnet='$alumno' ");
 $Ovp = mysqli_fetch_array($QueryOOpv);

$Opv= $Ovp['NOMMAT']; 
$Opvnota1= $Ovp['EVA1P3']; 
$Opvnota2= $Ovp['EVA2P3']; 
$Opvnota3= $Ovp['EVA3P3']; 
$Opvnota4= $Ovp['EVA4P3']; 
$Opvnota5= $Ovp['EVA5P3']; 
$OpvonotaRecu= $Ovp['NRP3']; 

$S11=$Opvnota1+$Opvnota2+$Opvnota3+$Opvnota4+$Opvnota5;

$OpvPROMEDIO= $S11 / 5;



# Laboratorio de creatividad

$QueryLdcv = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M12' AND N.idmaterias= '$M12' AND N.carnet='$alumno' ");
 $ldcj = mysqli_fetch_array($QueryLdcv);

$LaboratorioDeCreatividad= $ldcj['NOMMAT']; 
$Ldcnota1= $ldcj['EVA1P3']; 
$Ldcnota2= $ldcj['EVA2P3']; 
$Ldcnota3= $ldcj['EVA3P3']; 
$Ldcnota4= $ldcj['EVA4P3']; 
$Ldcnota5= $ldcj['EVA5P3']; 
$LdcnotaRecu= $ldcj['NRP3']; 

$S12=$Ldcnota1+$Ldcnota2+$Ldcnota3+$Ldcnota4+$Ldcnota5;

$LdcPROMEDIO= $S12 / 5;



# Formacion Cristiana

$QueryForc = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M13' AND N.idmaterias= '$M8' AND N.carnet='$alumno' ");
 $forcr = mysqli_fetch_array($QueryForc);

$FormacionCristiana= $forcr['NOMMAT']; 
$Forcrisnota1= $forcr['EVA1P3']; 
$Forcrisnota2= $forcr['EVA2P3']; 
$Forcrisnota3= $forcr['EVA3P3']; 
$Forcrisnota4= $forcr['EVA4P3']; 
$Forcrisnota5= $forcr['EVA5P3']; 
$ForcrisnotaRecu= $forcr['NRP3']; 

$S13=$Forcrisnota1+$Forcrisnota2+$Forcrisnota3+$Forcrisnota4+$Forcrisnota5;

$ForcrisPROMEDIO= $S13 / 5;



# Presupuesto

$Querypresu = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M14' AND N.idmaterias= '$M14' AND N.carnet='$alumno' ");
 $presu = mysqli_fetch_array($Querypresu);

$Presupuesto= $presu['NOMMAT']; 
$Presunota1= $presu['EVA1P3']; 
$Presunota2= $presu['EVA2P3']; 
$Presunota3= $presu['EVA3P3']; 
$Presunota4= $presu['EVA4P3']; 
$Presunota5= $presu['EVA5P3']; 
$PresunotaRecu= $presu['NRP3']; 

$S14=$Presunota1+$Presunota2+$Presunota3+$Presunota4+$Presunota5;

$PresuPROMEDIO= $S14 / 5;


# Comercializacion

$Querycomer = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M15' AND N.idmaterias= '$M15' AND N.carnet='$alumno' ");
 $co3 = mysqli_fetch_array($Querycomer);

$Comercializacion= $co3['NOMMAT']; 
$Comernota1= $co3['EVA1P3']; 
$Comernota2= $co3['EVA2P3']; 
$Comernota3= $co3['EVA3P3']; 
$Comernota4= $co3['EVA4P3']; 
$Comernota5= $co3['EVA5P3']; 
$ComernotaRecu= $co3['NRP3']; 

$S15=$Comernota1+$Comernota2+$Comernota3+$Comernota4+$Comernota5;

$ComerPROMEDIO= $S15 / 5;




# Contabilidad de costos

$Queryconta = mysqli_query($coneion,"SELECT N.carnet,N.EVA1P3/'$p1'as EVA1P3,N.EVA2P3/'$p2'as EVA2P3,N.EVA3P3/'$p3'as EVA3P3,N.EVA4P3/'$p4'as EVA4P3,N.EVA5P3/'$p5'as EVA5P3,N.NRP3,m.idmaterias,m.NOMMAT FROM materias m INNER JOIN notas N  WHERE m.idmaterias= '$M16' AND N.idmaterias= '$M16' AND N.carnet='$alumno' ");
 $contab = mysqli_fetch_array($Queryconta);

$ContabilidadDeCostos= $contab['NOMMAT']; 
$Contanota1= $contab['EVA1P3']; 
$Contanota2= $contab['EVA2P3']; 
$Contanota3= $contab['EVA3P3']; 
$Contanota4= $contab['EVA4P3']; 
$Contanota5= $contab['EVA5P3']; 
$ContanotaRecu= $contab['NRP3']; 

$S16=$Contanota1+$Contanota2+$Contanota3+$Contanota4+$Contanota5;

$ContaPROMEDIO= $S16 / 5;





 ?>