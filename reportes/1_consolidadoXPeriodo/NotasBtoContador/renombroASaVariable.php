
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

   $S1=$Lnota1 * $p1 +$Lnota2 * $p2 +$Lnota3 * $p3 +$Lnota4 * $p4 +$Lnota5 * $p5;/*lol*/

   $LPROMEDIO= $S1 / 100;
#





#Matematicas
   $Matematicas= $tds2->Matematicas; 
   $Mnota1= $tds2->Mnota1;
   $Mnota2= $tds2->Mnota2; 
   $Mnota3= $tds2->Mnota3; 
   $Mnota4= $tds2->Mnota4; 
   $Mnota5= $tds2->Mnota5; 
   $MnotaRecu= $tds2->MnotaRecu;

   $S2=$Mnota1 * $p1 +$Mnota2 * $p2 +$Mnota3 * $p3 +$Mnota4 * $p4 +$Mnota5 * $p5;/*lol*/

   $MPROMEDIO= $S2 / 100;
#




#CienciasFisicas
   $CienciasFisicas= $tds3->CienciasFisicas;
   $CFnota1= $tds3->CFnota1;
   $CFnota2= $tds3->CFnota2;
   $CFnota3= $tds3->CFnota3;
   $CFnota4= $tds3->CFnota4;
   $CFnota5= $tds3->CFnota5;
   $CFnotaRecu= $tds3->CFnotaRecu;

   $S3=$CFnota1 * $p1 +$CFnota2 * $p2 +$CFnota3 * $p3 +$CFnota4 * $p4 +$CFnota5 * $p5;/*lol*/

   $CFPROMEDIO= $S3 / 100;
#




#Estudios sociales
   $Sociales= $tds4->Sociales;
   $Socnota1= $tds4->Socnota1;
   $Socnota2= $tds4->Socnota2;
   $Socnota3= $tds4->Socnota3;
   $Socnota4= $tds4->Socnota4;
   $Socnota5= $tds4->Socnota5;
   $SocnotaRecu= $tds4->SocnotaRecu;

   $S4=$Socnota1 * $p1 +$Socnota2 * $p2 +$Socnota3 * $p3 +$Socnota4 * $p4 +$Socnota5 * $p5;/*lol*/

   $SocPROMEDIO= $S4 / 100;
#




#Seminario
   $Seminario= $tds5->Seminario;
   $Semnota1= $tds5->Semnota1;
   $Semnota2= $tds5->Semnota2;
   $Semnota3= $tds5->Semnota3;
   $Semnota4= $tds5->Semnota4;
   $Semnota5= $tds5->Semnota5;
   $SemnotaRecu= $tds5->SemnotaRecu;

   $S5=$Semnota1 * $p1 +$Semnota2 * $p2 +$Semnota3 * $p3 +$Semnota4 * $p4 +$Semnota5 * $p5;/*lol*/

   $SemPROMEDIO= $S5 / 100;
#




# Educacion Fisica
   $EducacionFisica= $tds6->EducacionFisica; 
   $Edunota1= $tds6->Edunota1; 
   $Edunota2= $tds6->Edunota2; 
   $Edunota3= $tds6->Edunota3; 
   $Edunota4= $tds6->Edunota4; 
   $Edunota5= $tds6->Edunota5; 
   $EdunotaRecu= $tds6->EdunotaRecu; 

   $S6=$Edunota1 * $p1 +$Edunota2 * $p2 +$Edunota3 * $p3 +$Edunota4 * $p4 +$Edunota5 * $p5;/*lol*/

   $EduPROMEDIO= $S6 / 100;
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

   $S7=$Infonota1 * $p1 +$Infonota2 * $p2 +$Infonota3 * $p3 +$Infonota4 * $p4 +$Infonota5 * $p5;/*lol*/

   $InforPROMEDIO= $S7 / 100;
#





# Ingles
   $Ingles= $tds8->Ingles;
   $Ingnota1= $tds8->Ingnota1;
   $Ingnota2= $tds8->Ingnota2;
   $Ingnota3= $tds8->Ingnota3;
   $Ingnota4= $tds8->Ingnota4;
   $Ingnota5= $tds8->Ingnota5;
   $IngnotaRecu= $tds8->IngnotaRecu;

   $S8=$Ingnota1 * $p1 +$Ingnota2 * $p2 +$Ingnota3 * $p3 +$Ingnota4 * $p4 +$Ingnota5 * $p5;/*lol*/

   $IngPROMEDIO= $S8 / 100;
#




# Tecnologia
   $Tecnologia= $tds9->Tecnologia;
   $Tecnnota1= $tds9->Tecnnota1;
   $Tecnnota2= $tds9->Tecnnota2;
   $Tecnnota3= $tds9->Tecnnota3;
   $Tecnnota4= $tds9->Tecnnota4;
   $Tecnnota5= $tds9->Tecnnota5;
   $TecnnotaRecu= $tds9->TecnnotaRecu;

   $S9=$Tecnnota1 * $p1 +$Tecnnota2 * $p2 +$Tecnnota3 * $p3 +$Tecnnota4 * $p4 +$Tecnnota5 * $p5;/*lol*/

   $TecnPROMEDIO= $S9 / 100;
#




# QUimicaYBiologia
   $QUimicaYBiologia= $tds10->QUimicaYBiologia;
   $Qybnota1= $tds10->Qybnota1;
   $Qybnota2= $tds10->Qybnota2;
   $Qybnota3= $tds10->Qybnota3;
   $Qybnota4= $tds10->Qybnota4;
   $Qybnota5= $tds10->Qybnota5;
   $QybnotaRecu= $tds10->QybnotaRecu;

   $S10=$Qybnota1 * $p1 +$Qybnota2 * $p2 +$Qybnota3 * $p3 +$Qybnota4 * $p4 +$Qybnota5 * $p5;/*lol*/

   $QybPROMEDIO= $S10 / 100;
#




# Orientacion para la vida 
   $Opv= $tds11->Opv;
   $Opvnota1= $tds11->Opvnota1;
   $Opvnota2= $tds11->Opvnota2;
   $Opvnota3= $tds11->Opvnota3;
   $Opvnota4= $tds11->Opvnota4;
   $Opvnota5= $tds11->Opvnota5;
   $OpvnotaRecu= $tds11->OpvnotaRecu;

   $S11=$Opvnota1 * $p1 +$Opvnota2 * $p2 +$Opvnota3 * $p3 +$Opvnota4 * $p4 +$Opvnota5 * $p5;/*lol*/

   $OpvPROMEDIO= $S11 / 100;
#




# Laboratorio de creatividad
   $LaboratorioDeCreatividad= $tds12->LaboratorioDeCreatividad;
   $Ldcnota1= $tds12->Ldcnota1;
   $Ldcnota2= $tds12->Ldcnota2;
   $Ldcnota3= $tds12->Ldcnota3;
   $Ldcnota4= $tds12->Ldcnota4;
   $Ldcnota5= $tds12->Ldcnota5;
   $LdcnotaRecu= $tds12->LdcnotaRecu;

   $S12=$Ldcnota1 * $p1 +$Ldcnota2 * $p2 +$Ldcnota3 * $p3 +$Ldcnota4 * $p4 +$Ldcnota5 * $p5;/*lol*/

   $LdcPROMEDIO= $S12 / 100;
#




# Formacion Cristiana
   $FormacionCristiana= $tds13->FormacionCristiana;
   $Forcrisnota1= $tds13->Forcrisnota1;
   $Forcrisnota2= $tds13->Forcrisnota2;
   $Forcrisnota3= $tds13->Forcrisnota3;
   $Forcrisnota4= $tds13->Forcrisnota4;
   $Forcrisnota5= $tds13->Forcrisnota5;
   $ForcrisnotaRecu= $tds13->ForcrisnotaRecu;

   $S13=$Forcrisnota1 * $p1 +$Forcrisnota2 * $p2 +$Forcrisnota3 * $p3 +$Forcrisnota4 * $p4 +$Forcrisnota5 * $p5;/*lol*/

   $ForcrisPROMEDIO= $S13 / 100;
#




# Presupuesto
   $Presupuesto= $tds14->Presupuesto;
   $Presunota1= $tds14->Presunota1;
   $Presunota2= $tds14->Presunota2;
   $Presunota3= $tds14->Presunota3;
   $Presunota4= $tds14->Presunota4;
   $Presunota5= $tds14->Presunota5;
   $PresunotaRecu= $tds14->PresunotaRecu;

   $S14=$Presunota1 * $p1 +$Presunota2 * $p2 +$Presunota3 * $p3 +$Presunota4 * $p4 +$Presunota5 * $p5;/*lol*/

   $PresuPROMEDIO= $S14 / 100;
#




# Comercializacion
   $Comercializacion= $tds15->Comercializacion;
   $Comernota1= $tds15->Comernota1;
   $Comernota2= $tds15->Comernota2;
   $Comernota3= $tds15->Comernota3;
   $Comernota4= $tds15->Comernota4;
   $Comernota5= $tds15->Comernota5;
   $ComernotaRecu= $tds15->ComernotaRecu;

   $S15=$Comernota1 * $p1 +$Comernota2 * $p2 +$Comernota3 * $p3 +$Comernota4 * $p4 +$Comernota5 * $p5;/*lol*/

   $ComerPROMEDIO= $S15 / 100;
#




# Contabilidad de costos

   $ContabilidadDeCostos= $tds16->ContabilidadDeCostos;
   $Contanota1= $tds16->Contanota1;
   $Contanota2= $tds16->Contanota2;
   $Contanota3= $tds16->Contanota3;
   $Contanota4= $tds16->Contanota4;
   $Contanota5= $tds16->Contanota5;
   $ContanotaRecu= $tds16->ContanotaRecu;

   $S16=$Contanota1 * $p1 +$Contanota2 * $p2 +$Contanota3 * $p3 +$Contanota4 * $p4 +$Contanota5 * $p5;/*lol*/

   $ContaPROMEDIO= $S16 / 100;
#




# Moral urbanidad y civica

   // $MoralUrbanidadYCivica= $tds17->MoralUrbanidadYCivica;
   // $MoralYcinota1= $tds17->MoralYcinota1;
   // $MoralYcinota2= $tds17->MoralYcinota2;
   // $MoralYcinota3= $tds17->MoralYcinota3;
   // $MoralYcinota4= $tds17->MoralYcinota4;
   // $MoralYcinota5= $tds17->MoralYcinota5;
   // $MoralYcinotaRecu= $tds17->MoralYcinotaRecu;

   // $S17=$MoralYcinota1 * $p1 +$MoralYcinota2 * $p2 +$MoralYcinota3 * $p3 +$MoralYcinota4 * $p4 +$MoralYcinota5 * $p5;/*lol*/

   // $MoralYciPROMEDIO= $S17 / 100;
#



#Practica Profesional
$PracticaProfesional= $tds45->PracticaProfesional;   
$Ppnota1 = $tds45->Ppnota1;
$Ppnota2 = $tds45->Ppnota2;
$Ppnota3 = $tds45->Ppnota3;
$Ppnota4 = $tds45->Ppnota4;
$Ppnota5 = $tds45->Ppnota5;
$PpnotaRecu = $tds45->PpnotaRecu;


   $S45=$Ppnota1 * $p1 +$Ppnota2 * $p2 +$Ppnota3 * $p3 +$Ppnota4 * $p4 +$Ppnota5 * $p5;/*lol*/

   $PpPROMEDIO= $S45 / 100;




# Adjudicacion para las Conducta

   // $cta1= $Condu->cta1;
   // $cta2= $Condu->cta2;
   // $cta3= $Condu->cta3;
   // $cta4= $Condu->cta4;
   // $cta5= $Condu->cta5;
   // $cta6= $Condu->cta6;
  
#









#final de todo

 ?>










