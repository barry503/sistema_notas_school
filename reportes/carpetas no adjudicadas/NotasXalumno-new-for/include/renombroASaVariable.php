
<!-- le damos los valores alas variables existentes -->
<?php

#lenguaje
   // dandoles valores alas variables de lenguaje
   $Lleng= $tds1->Lleng; 
   $Lnota1= $tds1->Lnota1; 
   $Lnota2= $tds1->Lnota2; 
   $Lnota3= $tds1->Lnota3; 
   $Lnota4= $tds1->Lnota4; 
   $Lnota5= $tds1->Lnota5; 
   $LnotaRecu= $tds1->LnotaRecu;  

   $S1=$Lnota1+$Lnota2+$Lnota3+$Lnota4+$Lnota5;

   $LPROMEDIO= $S1 / 5;
#





#Matematicas
   $Matematicas= $tds2->Matematicas; 
   $Mnota1= $tds2->Mnota1;
   $Mnota2= $tds2->Mnota2; 
   $Mnota3= $tds2->Mnota3; 
   $Mnota4= $tds2->Mnota4; 
   $Mnota5= $tds2->Mnota5; 
   $MnotaRecu= $tds2->MnotaRecu;

   $S2=$Mnota1+$Mnota2+$Mnota3+$Mnota4+$Mnota5;

   $MPROMEDIO= $S2 / 5;
#




#CienciasFisicas
   $CienciasFisicas= $tds3->CienciasFisicas;
   $CFnota1= $tds3->CFnota1;
   $CFnota2= $tds3->CFnota2;
   $CFnota3= $tds3->CFnota3;
   $CFnota4= $tds3->CFnota4;
   $CFnota5= $tds3->CFnota5;
   $CFnotaRecu= $tds3->CFnotaRecu;

   $S3=$CFnota1+$CFnota2+$CFnota3+$CFnota4+$CFnota5;

   $CFPROMEDIO= $S3 / 5;
#




#Estudios sociales
   $Sociales= $tds4->Sociales;
   $Socnota1= $tds4->Socnota1;
   $Socnota2= $tds4->Socnota2;
   $Socnota3= $tds4->Socnota3;
   $Socnota4= $tds4->Socnota4;
   $Socnota5= $tds4->Socnota5;
   $SocnotaRecu= $tds4->SocnotaRecu;

   $S4=$Socnota1+$Socnota2+$Socnota3+$Socnota4+$Socnota5;

   $SocPROMEDIO= $S4 / 5;
#




#Seminario
   $Seminario= $tds5->Seminario;
   $Semnota1= $tds5->Semnota1;
   $Semnota2= $tds5->Semnota2;
   $Semnota3= $tds5->Semnota3;
   $Semnota4= $tds5->Semnota4;
   $Semnota5= $tds5->Semnota5;
   $SemnotaRecu= $tds5->SemnotaRecu;

   $S5=$Semnota1+$Semnota2+$Semnota3+$Semnota4+$Semnota5;

   $SemPROMEDIO= $S5 / 5;
#




# Educacion Fisica
   $EducacionFisica= $tds6->EducacionFisica; 
   $Edunota1= $tds6->Edunota1; 
   $Edunota2= $tds6->Edunota2; 
   $Edunota3= $tds6->Edunota3; 
   $Edunota4= $tds6->Edunota4; 
   $Edunota5= $tds6->Edunota5; 
   $EdunotaRecu= $tds6->EdunotaRecu; 

   $S6=$Edunota1+$Edunota2+$Edunota3+$Edunota4+$Edunota5;

   $EduPROMEDIO= $S6 / 5;
#






 // Me falta completarla desde aqui
# Informatica
   $Informatica= $tds7->Informatica;
   $Infonota1= $tds7->Infonota1;
   $Infonota2= $tds7->Infonota2;
   $Infonota3= $tds7->Infonota3;
   $Infonota4= $tds7->Infonota4;
   $Infonota5= $tds7->Infonota5;
   $InfonotaRecu= $tds7->InfonotaRecu;

   $S7=$Infonota1+$Infonota2+$Infonota3+$Infonota4+$Infonota5;

   $InforPROMEDIO= $S7 / 5;
#





# Ingles
   $Ingles= $tds8->Ingles;
   $Ingnota1= $tds8->Ingnota1;
   $Ingnota2= $tds8->Ingnota2;
   $Ingnota3= $tds8->Ingnota3;
   $Ingnota4= $tds8->Ingnota4;
   $Ingnota5= $tds8->Ingnota5;
   $IngnotaRecu= $tds8->IngnotaRecu;

   $S8=$Ingnota1+$Ingnota2+$Ingnota3+$Ingnota4+$Ingnota5;

   $IngPROMEDIO= $S8 / 5;
#




# Tecnologia
   $Tecnologia= $tds9->Tecnologia;
   $Tecnnota1= $tds9->Tecnnota1;
   $Tecnnota2= $tds9->Tecnnota2;
   $Tecnnota3= $tds9->Tecnnota3;
   $Tecnnota4= $tds9->Tecnnota4;
   $Tecnnota5= $tds9->Tecnnota5;
   $TecnnotaRecu= $tds9->TecnnotaRecu;

   $S9=$Tecnnota1+$Tecnnota2+$Tecnnota3+$Tecnnota4+$Tecnnota5;

   $TecnPROMEDIO= $S9 / 5;
#




# QUimicaYBiologia
   $QUimicaYBiologia= $tds10->QUimicaYBiologia;
   $Qybnota1= $tds10->Qybnota1;
   $Qybnota2= $tds10->Qybnota2;
   $Qybnota3= $tds10->Qybnota3;
   $Qybnota4= $tds10->Qybnota4;
   $Qybnota5= $tds10->Qybnota5;
   $QybnotaRecu= $tds10->QybnotaRecu;

   $S10=$Qybnota1+$Qybnota2+$Qybnota3+$Qybnota4+$Qybnota5;

   $QybPROMEDIO= $S10 / 5;
#




# Orientacion para la vida 
   $Opv= $tds11->Opv;
   $Opvnota1= $tds11->Opvnota1;
   $Opvnota2= $tds11->Opvnota2;
   $Opvnota3= $tds11->Opvnota3;
   $Opvnota4= $tds11->Opvnota4;
   $Opvnota5= $tds11->Opvnota5;
   $OpvnotaRecu= $tds11->OpvnotaRecu;

   $S11=$Opvnota1+$Opvnota2+$Opvnota3+$Opvnota4+$Opvnota5;

   $OpvPROMEDIO= $S11 / 5;
#




# Laboratorio de creatividad
   $LaboratorioDeCreatividad= $tds12->LaboratorioDeCreatividad;
   $Ldcnota1= $tds12->Ldcnota1;
   $Ldcnota2= $tds12->Ldcnota2;
   $Ldcnota3= $tds12->Ldcnota3;
   $Ldcnota4= $tds12->Ldcnota4;
   $Ldcnota5= $tds12->Ldcnota5;
   $LdcnotaRecu= $tds12->LdcnotaRecu;

   $S12=$Ldcnota1+$Ldcnota2+$Ldcnota3+$Ldcnota4+$Ldcnota5;

   $LdcPROMEDIO= $S12 / 5;
#




# Formacion Cristiana
   $FormacionCristiana= $tds13->FormacionCristiana;
   $Forcrisnota1= $tds13->Forcrisnota1;
   $Forcrisnota2= $tds13->Forcrisnota2;
   $Forcrisnota3= $tds13->Forcrisnota3;
   $Forcrisnota4= $tds13->Forcrisnota4;
   $Forcrisnota5= $tds13->Forcrisnota5;
   $ForcrisnotaRecu= $tds13->ForcrisnotaRecu;

   $S13=$Forcrisnota1+$Forcrisnota2+$Forcrisnota3+$Forcrisnota4+$Forcrisnota5;

   $ForcrisPROMEDIO= $S13 / 5;
#




# Presupuesto
   $Presupuesto= $tds14->Presupuesto;
   $Presunota1= $tds14->Presunota1;
   $Presunota2= $tds14->Presunota2;
   $Presunota3= $tds14->Presunota3;
   $Presunota4= $tds14->Presunota4;
   $Presunota5= $tds14->Presunota5;
   $PresunotaRecu= $tds14->PresunotaRecu;

   $S14=$Presunota1+$Presunota2+$Presunota3+$Presunota4+$Presunota5;

   $PresuPROMEDIO= $S14 / 5;
#




# Comercializacion
   $Comercializacion= $tds15->Comercializacion;
   $Comernota1= $tds15->Comernota1;
   $Comernota2= $tds15->Comernota2;
   $Comernota3= $tds15->Comernota3;
   $Comernota4= $tds15->Comernota4;
   $Comernota5= $tds15->Comernota5;
   $ComernotaRecu= $tds15->ComernotaRecu;

   $S15=$Comernota1+$Comernota2+$Comernota3+$Comernota4+$Comernota5;

   $ComerPROMEDIO= $S15 / 5;
#




# Contabilidad de costos

   $ContabilidadDeCostos= $tds16->ContabilidadDeCostos;
   $Contanota1= $tds16->Contanota1;
   $Contanota2= $tds16->Contanota2;
   $Contanota3= $tds16->Contanota3;
   $Contanota4= $tds16->Contanota4;
   $Contanota5= $tds16->Contanota5;
   $ContanotaRecu= $tds16->ContanotaRecu;

   $S16=$Contanota1+$Contanota2+$Contanota3+$Contanota4+$Contanota5;

   $ContaPROMEDIO= $S16 / 5;
#




#final de todo

 ?>










