
<!-- le damos los valores alas variables existentes -->
<?php

#lenguaje
   // dandoles valores alas variables de lenguaje
   $Lleng= $tds->Lleng; 
   $Lnota1= $tds->Lnota1; 
   $Lnota2= $tds->Lnota2; 
   $Lnota3= $tds->Lnota3; 
   $Lnota4= $tds->Lnota4; 
   $Lnota5= $tds->Lnota5; 
   $LnotaRecu= $tds->LnotaRecu;  

   $S1=$Lnota1+$Lnota2+$Lnota3+$Lnota4+$Lnota5;

   $LPROMEDIO= $S1 / 5;
#





#Matematicas
   $Matematicas= $tds->Matematicas; 
   $Mnota1= $tds->Mnota1;
   $Mnota2= $tds->Mnota2; 
   $Mnota3= $tds->Mnota3; 
   $Mnota4= $tds->Mnota4; 
   $Mnota5= $tds->Mnota5; 
   $MnotaRecu= $tds->MnotaRecu;

   $S2=$Mnota1+$Mnota2+$Mnota3+$Mnota4+$Mnota5;

   $MPROMEDIO= $S2 / 5;
#




#CienciasFisicas
   $CienciasFisicas= $tds->CienciasFisicas;
   $CFnota1= $tds->CFnota1;
   $CFnota2= $tds->CFnota2;
   $CFnota3= $tds->CFnota3;
   $CFnota4= $tds->CFnota4;
   $CFnota5= $tds->CFnota5;
   $CFnotaRecu= $tds->CFnotaRecu;

   $S3=$CFnota1+$CFnota2+$CFnota3+$CFnota4+$CFnota5;

   $CFPROMEDIO= $S3 / 5;
#




#Estudios sociales
   $Sociales= $tds->Sociales;
   $Socnota1= $tds->Socnota1;
   $Socnota2= $tds->Socnota2;
   $Socnota3= $tds->Socnota3;
   $Socnota4= $tds->Socnota4;
   $Socnota5= $tds->Socnota5;
   $SocnotaRecu= $tds->SocnotaRecu;

   $S4=$Socnota1+$Socnota2+$Socnota3+$Socnota4+$Socnota5;

   $SocPROMEDIO= $S4 / 5;
#




#Seminario
   $Seminario= $tds->Seminario;
   $Semnota1= $tds->Semnota1;
   $Semnota2= $tds->Semnota2;
   $Semnota3= $tds->Semnota3;
   $Semnota4= $tds->Semnota4;
   $Semnota5= $tds->Semnota5;
   $SemnotaRecu= $tds->SemnotaRecu;

   $S5=$Semnota1+$Semnota2+$Semnota3+$Semnota4+$Semnota5;

   $SemPROMEDIO= $S5 / 5;
#




# Educacion Fisica
   $EducacionFisica= $tds->EducacionFisica; 
   $Edunota1= $tds->Edunota1; 
   $Edunota2= $tds->Edunota2; 
   $Edunota3= $tds->Edunota3; 
   $Edunota4= $tds->Edunota4; 
   $Edunota5= $tds->Edunota5; 
   $EdunotaRecu= $tds->EdunotaRecu; 

   $S6=$Edunota1+$Edunota2+$Edunota3+$Edunota4+$Edunota5;

   $EduPROMEDIO= $S6 / 5;
#






 // Me falta completarla desde aqui
# Informatica
   $Informatica= $tds->Informatica;
   $Infonota1= $tds->Infonota1;
   $Infonota2= $tds->Infonota2;
   $Infonota3= $tds->Infonota3;
   $Infonota4= $tds->Infonota4;
   $Infonota5= $tds->Infonota5;
   $InfonotaRecu= $tds->InfonotaRecu;

   $S7=$Infonota1+$Infonota2+$Infonota3+$Infonota4+$Infonota5;

   $InforPROMEDIO= $S7 / 5;
#





# Ingles
   $Ingles= $tds->Ingles;
   $Ingnota1= $tds->Ingnota1;
   $Ingnota2= $tds->Ingnota2;
   $Ingnota3= $tds->Ingnota3;
   $Ingnota4= $tds->Ingnota4;
   $Ingnota5= $tds->Ingnota5;
   $IngnotaRecu= $tds->IngnotaRecu;

   $S8=$Ingnota1+$Ingnota2+$Ingnota3+$Ingnota4+$Ingnota5;

   $IngPROMEDIO= $S8 / 5;
#




# Tecnologia
   $Tecnologia= $tds->Tecnologia;
   $Tecnnota1= $tds->Tecnnota1;
   $Tecnnota2= $tds->Tecnnota2;
   $Tecnnota3= $tds->Tecnnota3;
   $Tecnnota4= $tds->Tecnnota4;
   $Tecnnota5= $tds->Tecnnota5;
   $TecnnotaRecu= $tds->TecnnotaRecu;

   $S9=$Tecnnota1+$Tecnnota2+$Tecnnota3+$Tecnnota4+$Tecnnota5;

   $TecnPROMEDIO= $S9 / 5;
#




# QUimicaYBiologia
   $QUimicaYBiologia= $tds->QUimicaYBiologia;
   $Qybnota1= $tds->Qybnota1;
   $Qybnota2= $tds->Qybnota2;
   $Qybnota3= $tds->Qybnota3;
   $Qybnota4= $tds->Qybnota4;
   $Qybnota5= $tds->Qybnota5;
   $QybnotaRecu= $tds->QybnotaRecu;

   $S10=$Qybnota1+$Qybnota2+$Qybnota3+$Qybnota4+$Qybnota5;

   $QybPROMEDIO= $S10 / 5;
#




# Orientacion para la vida 
   $Opv= $tds->Opv;
   $Opvnota1= $tds->Opvnota1;
   $Opvnota2= $tds->Opvnota2;
   $Opvnota3= $tds->Opvnota3;
   $Opvnota4= $tds->Opvnota4;
   $Opvnota5= $tds->Opvnota5;
   $OpvonotaRecu= $tds->OpvonotaRecu;

   $S11=$Opvnota1+$Opvnota2+$Opvnota3+$Opvnota4+$Opvnota5;

   $OpvPROMEDIO= $S11 / 5;
#




# Laboratorio de creatividad
   $LaboratorioDeCreatividad= $tds->LaboratorioDeCreatividad;
   $Ldcnota1= $tds->Ldcnota1;
   $Ldcnota2= $tds->Ldcnota2;
   $Ldcnota3= $tds->Ldcnota3;
   $Ldcnota4= $tds->Ldcnota4;
   $Ldcnota5= $tds->Ldcnota5;
   $LdcnotaRecu= $tds->LdcnotaRecu;

   $S12=$Ldcnota1+$Ldcnota2+$Ldcnota3+$Ldcnota4+$Ldcnota5;

   $LdcPROMEDIO= $S12 / 5;
#




# Formacion Cristiana
   $FormacionCristiana= $tds->FormacionCristiana;
   $Forcrisnota1= $tds->Forcrisnota1;
   $Forcrisnota2= $tds->Forcrisnota2;
   $Forcrisnota3= $tds->Forcrisnota3;
   $Forcrisnota4= $tds->Forcrisnota4;
   $Forcrisnota5= $tds->Forcrisnota5;
   $ForcrisnotaRecu= $tds->ForcrisnotaRecu;

   $S13=$Forcrisnota1+$Forcrisnota2+$Forcrisnota3+$Forcrisnota4+$Forcrisnota5;

   $ForcrisPROMEDIO= $S13 / 5;
#




# Presupuesto
   $Presupuesto= $tds->Presupuesto;
   $Presunota1= $tds->Presunota1;
   $Presunota2= $tds->Presunota2;
   $Presunota3= $tds->Presunota3;
   $Presunota4= $tds->Presunota4;
   $Presunota5= $tds->Presunota5;
   $PresunotaRecu= $tds->PresunotaRecu;

   $S14=$Presunota1+$Presunota2+$Presunota3+$Presunota4+$Presunota5;

   $PresuPROMEDIO= $S14 / 5;
#




# Comercializacion
   $Comercializacion= $tds->Comercializacion;
   $Comernota1= $tds->Comernota1;
   $Comernota2= $tds->Comernota2;
   $Comernota3= $tds->Comernota3;
   $Comernota4= $tds->Comernota4;
   $Comernota5= $tds->Comernota5;
   $ComernotaRecu= $tds->ComernotaRecu;

   $S15=$Comernota1+$Comernota2+$Comernota3+$Comernota4+$Comernota5;

   $ComerPROMEDIO= $S15 / 5;
#




# Contabilidad de costos

   $ContabilidadDeCostos= $tds->ContabilidadDeCostos;
   $Contanota1= $tds->Contanota1;
   $Contanota2= $tds->Contanota2;
   $Contanota3= $tds->Contanota3;
   $Contanota4= $tds->Contanota4;
   $Contanota5= $tds->Contanota5;
   $ContanotaRecu= $tds->ContanotaRecu;

   $S16=$Contanota1+$Contanota2+$Contanota3+$Contanota4+$Contanota5;

   $ContaPROMEDIO= $S16 / 5;
#




#final de todo

 ?>










