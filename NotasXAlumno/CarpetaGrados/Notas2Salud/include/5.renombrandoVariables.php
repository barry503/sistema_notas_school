
<!-- le damos los valores alas variables existentes -->
<?php

#1 lenguaje
   // dandoles valores alas variables de lenguaje
   $Lleng= $tds1->Lleng; 
   $Lnota1= $tds1->Lnota1; 
   $Lnota2= $tds1->Lnota2; 
   $Lnota3= $tds1->Lnota3; 
   $Lnota4= $tds1->Lnota4; 
   $Lnota5= $tds1->Lnota5; 
   $LnotaRecu= $tds1->LnotaRecu;  

   $S1=$Lnota1 * $p1 + $Lnota2 * $p2 + $Lnota3 * $p3 + $Lnota4 * $p4 + $Lnota5 * $p5;/*lol*/

   $LPROMEDIO= $S1 / 100;
#

#2 Matematicas
   $Matematicas= $tds2->Matematicas; 
   $Mnota1= $tds2->Mnota1;
   $Mnota2= $tds2->Mnota2; 
   $Mnota3= $tds2->Mnota3; 
   $Mnota4= $tds2->Mnota4; 
   $Mnota5= $tds2->Mnota5; 
   $MnotaRecu= $tds2->MnotaRecu;

   $S2=$Mnota1 * $p1 + $Mnota2 * $p2 + $Mnota3 * $p3 + $Mnota4 * $p4 + $Mnota5 * $p5;/*lol*/

   $MPROMEDIO= $S2 / 100;
#

#3 CienciasFisicas
   $CienciasFisicas= $tds3->CienciasFisicas;
   $CFnota1= $tds3->CFnota1;
   $CFnota2= $tds3->CFnota2;
   $CFnota3= $tds3->CFnota3;
   $CFnota4= $tds3->CFnota4;
   $CFnota5= $tds3->CFnota5;
   $CFnotaRecu= $tds3->CFnotaRecu;

   $S3=$CFnota1 * $p1 + $CFnota2 * $p2 + $CFnota3 * $p3 + $CFnota4 * $p4 + $CFnota5 * $p5;/*lol*/

   $CFPROMEDIO= $S3 / 100;
#

#4 Estudios sociales
   $Sociales= $tds4->Sociales;
   $Socnota1= $tds4->Socnota1;
   $Socnota2= $tds4->Socnota2;
   $Socnota3= $tds4->Socnota3;
   $Socnota4= $tds4->Socnota4;
   $Socnota5= $tds4->Socnota5;
   $SocnotaRecu= $tds4->SocnotaRecu;

   $S4=$Socnota1 * $p1 + $Socnota2 * $p2 + $Socnota3 * $p3 + $Socnota4 * $p4 + $Socnota5 * $p5;/*lol*/

   $SocPROMEDIO= $S4 / 100;
#

#5a Seminario
   $Seminario= $tds5->Seminario;
   $Semnota1= $tds5->Semnota1;
   $Semnota2= $tds5->Semnota2;
   $Semnota3= $tds5->Semnota3;
   $Semnota4= $tds5->Semnota4;
   $Semnota5= $tds5->Semnota5;
   $SemnotaRecu= $tds5->SemnotaRecu;

   $S5=$Semnota1 * $p1 + $Semnota2 * $p2 + $Semnota3 * $p3 + $Semnota4 * $p4 + $Semnota5 * $p5;/*lol*/

   $SemPROMEDIO= $S5 / 100;
#

#6 Educacion Fisica
   $EducacionFisica= $tds6->EducacionFisica; 
   $Edunota1= $tds6->Edunota1; 
   $Edunota2= $tds6->Edunota2; 
   $Edunota3= $tds6->Edunota3; 
   $Edunota4= $tds6->Edunota4; 
   $Edunota5= $tds6->Edunota5; 
   $EdunotaRecu= $tds6->EdunotaRecu; 

   $S6=$Edunota1 * $p1 + $Edunota2 * $p2 + $Edunota3 * $p3 + $Edunota4 * $p4 + $Edunota5 * $p5;/*lol*/

   $EduPROMEDIO= $S6 / 100;
#

#7 Informatica
   $Informatica= $tds7->Informatica;
   $Infonota1= $tds7->Infonota1;
   $Infonota2= $tds7->Infonota2;
   $Infonota3= $tds7->Infonota3;
   $Infonota4= $tds7->Infonota4;
   $Infonota5= $tds7->Infonota5;
   $InfonotaRecu= $tds7->InfonotaRecu;

   $S7=$Infonota1 * $p1 + $Infonota2 * $p2 + $Infonota3 * $p3 + $Infonota4 * $p4 + $Infonota5 * $p5;/*lol*/

   $InforPROMEDIO= $S7 / 100;
#

#8 Ingles
   $Ingles= $tds8->Ingles;
   $Ingnota1= $tds8->Ingnota1;
   $Ingnota2= $tds8->Ingnota2;
   $Ingnota3= $tds8->Ingnota3;
   $Ingnota4= $tds8->Ingnota4;
   $Ingnota5= $tds8->Ingnota5;
   $IngnotaRecu= $tds8->IngnotaRecu;

   $S8=$Ingnota1 * $p1 + $Ingnota2 * $p2 + $Ingnota3 * $p3 + $Ingnota4 * $p4 + $Ingnota5 * $p5;/*lol*/

   $IngPROMEDIO= $S8 / 100;
#

#11 Orientacion para la vida 
   $Opv= $tds11->Opv;
   $Opvnota1= $tds11->Opvnota1;
   $Opvnota2= $tds11->Opvnota2;
   $Opvnota3= $tds11->Opvnota3;
   $Opvnota4= $tds11->Opvnota4;
   $Opvnota5= $tds11->Opvnota5;
   $OpvnotaRecu= $tds11->OpvnotaRecu;

   $S11=$Opvnota1 * $p1 + $Opvnota2 * $p2 + $Opvnota3 * $p3 + $Opvnota4 * $p4 + $Opvnota5 * $p5;/*lol*/

   $OpvPROMEDIO= $S11 / 100;
#

#13 Formacion Cristiana
   $FormacionCristiana= $tds13->FormacionCristiana;
   $Forcrisnota1= $tds13->Forcrisnota1;
   $Forcrisnota2= $tds13->Forcrisnota2;
   $Forcrisnota3= $tds13->Forcrisnota3;
   $Forcrisnota4= $tds13->Forcrisnota4;
   $Forcrisnota5= $tds13->Forcrisnota5;
   $ForcrisnotaRecu= $tds13->ForcrisnotaRecu;

   $S13=$Forcrisnota1 * $p1 + $Forcrisnota2 * $p2 + $Forcrisnota3 * $p3 + $Forcrisnota4 * $p4 + $Forcrisnota5 * $p5;/*lol*/

   $ForcrisPROMEDIO= $S13 / 100;
#
#__________________________________
# Adjudicacion para las Conducta

   $cta1= $Condu->cta1;
   $cta2= $Condu->cta2;
   $cta3= $Condu->cta3;
   $cta4= $Condu->cta4;
   $cta5= $Condu->cta5;
   $cta6= $Condu->cta6;  
#


#incluyo las variables renonbradras de los ,Modulos correspondientes
#renonbrando los objetos de la consulta a variables imprimibles en la tabla

# Modulo 1

   $Modulo1= $ModulConsult1->Modulo;
   $Modud1nota1= $ModulConsult1->mod1;
   $Modud1nota2= $ModulConsult1->mod2;
   $Modud1nota3= $ModulConsult1->mod3;
   $Modud1nota4= $ModulConsult1->mod4;
   $Modud1nota5= $ModulConsult1->mod5;
   $Modud1notaRecu= $ModulConsult1->modnotaRecu;

   $S17=$Modud1nota1 * $p1 +$Modud1nota2 * $p2 +$Modud1nota3 * $p3 +$Modud1nota4 * $p4 +$Modud1nota5 * $p5;/*lol*/

   $Modud1PROMEDIO= $S17 / 100;
#
# Modulo 2

   $Modulo2= $ModulConsult2->Modulo;
   $Modud2nota1= $ModulConsult2->mod1;
   $Modud2nota2= $ModulConsult2->mod2;
   $Modud2nota3= $ModulConsult2->mod3;
   $Modud2nota4= $ModulConsult2->mod4;
   $Modud2nota5= $ModulConsult2->mod5;
   $Modud2notaRecu= $ModulConsult2->modnotaRecu;

   $S18=$Modud2nota1 * $p1 +$Modud2nota2 * $p2 +$Modud2nota3 * $p3 +$Modud2nota4 * $p4 +$Modud2nota5 * $p5;/*lol*/

   $Modud2PROMEDIO= $S18 / 100;
#
#Modulo 3

   $Modulo3= $ModulConsult3->Modulo;
   $Modud3nota1= $ModulConsult3->mod1;
   $Modud3nota2= $ModulConsult3->mod2;
   $Modud3nota3= $ModulConsult3->mod3;
   $Modud3nota4= $ModulConsult3->mod4;
   $Modud3nota5= $ModulConsult3->mod5;
   $Modud3notaRecu= $ModulConsult3->modnotaRecu;

   $S19=$Modud3nota1 * $p1 +$Modud3nota2 * $p2 +$Modud3nota3 * $p3 +$Modud3nota4 * $p4 +$Modud3nota5 * $p5;/*lol*/

   $Modud3PROMEDIO= $S19 / 100;
#
#Modulo 4

   $Modulo4= $ModulConsult4->Modulo;
   $Modud4nota1= $ModulConsult4->mod1;
   $Modud4nota2= $ModulConsult4->mod2;
   $Modud4nota3= $ModulConsult4->mod3;
   $Modud4nota4= $ModulConsult4->mod4;
   $Modud4nota5= $ModulConsult4->mod5;
   $Modud4notaRecu= $ModulConsult4->modnotaRecu;

   $S20=$Modud4nota1 * $p1 +$Modud4nota2 * $p2 +$Modud4nota3 * $p3 +$Modud4nota4 * $p4 +$Modud4nota5 * $p5;/*lol*/

   $Modud4PROMEDIO= $S20 / 100;
#
#Modulo 5

   $Modulo5= $ModulConsult5->Modulo;
   $Modud5nota1= $ModulConsult5->mod1;
   $Modud5nota2= $ModulConsult5->mod2;
   $Modud5nota3= $ModulConsult5->mod3;
   $Modud5nota4= $ModulConsult5->mod4;
   $Modud5nota5= $ModulConsult5->mod5;
   $Modud5notaRecu= $ModulConsult5->modnotaRecu;

   $S21=$Modud5nota1 * $p1 +$Modud5nota2 * $p2 +$Modud5nota3 * $p3 +$Modud5nota4 * $p4 +$Modud5nota5 * $p5;/*lol*/

   $Modud5PROMEDIO= $S21 / 100;
#
#Modulo 6

   $Modulo6= $ModulConsult6->Modulo;
   $Modud6nota1= $ModulConsult6->mod1;
   $Modud6nota2= $ModulConsult6->mod2;
   $Modud6nota3= $ModulConsult6->mod3;
   $Modud6nota4= $ModulConsult6->mod4;
   $Modud6nota5= $ModulConsult6->mod5;
   $Modud6notaRecu= $ModulConsult6->modnotaRecu;

   $S22=$Modud6nota1 * $p1 +$Modud6nota2 * $p2 +$Modud6nota3 * $p3 +$Modud6nota4 * $p4 +$Modud6nota5 * $p5;/*lol*/

   $Modud6PROMEDIO= $S22 / 100;
#
#Modulo 7

   $Modulo7= $ModulConsult7->Modulo;
   $Modud7nota1= $ModulConsult7->mod1;
   $Modud7nota2= $ModulConsult7->mod2;
   $Modud7nota3= $ModulConsult7->mod3;
   $Modud7nota4= $ModulConsult7->mod4;
   $Modud7nota5= $ModulConsult7->mod5;
   $Modud7notaRecu= $ModulConsult7->modnotaRecu;

   $S23=$Modud7nota1 * $p1 +$Modud7nota2 * $p2 +$Modud7nota3 * $p3 +$Modud7nota4 * $p4 +$Modud7nota5 * $p5;/*lol*/

   $Modud7PROMEDIO= $S23 / 100;
#
#Modulo 8

   $Modulo8= $ModulConsult8->Modulo;
   $Modud8nota1= $ModulConsult8->mod1;
   $Modud8nota2= $ModulConsult8->mod2;
   $Modud8nota3= $ModulConsult8->mod3;
   $Modud8nota4= $ModulConsult8->mod4;
   $Modud8nota5= $ModulConsult8->mod5;
   $Modud8notaRecu= $ModulConsult8->modnotaRecu;

   $S24=$Modud8nota1 * $p1 +$Modud8nota2 * $p2 +$Modud8nota3 * $p3 +$Modud8nota4 * $p4 +$Modud8nota5 * $p5;/*lol*/

   $Modud8PROMEDIO= $S24 / 100;
#


// ----------------------------------------------------------------------------------------

#17 MORAL URBANIDAD Y CIVICA
   // $MORAL_URBANIDAD_Y_CIVICA= $tds17->MORAL_URBANIDAD_Y_CIVICA;
   // $MoralUnota1= $tds17->MoralUnota1;
   // $MoralUnota2= $tds17->MoralUnota2;
   // $MoralUnota3= $tds17->MoralUnota3;
   // $MoralUnota4= $tds17->MoralUnota4;
   // $MoralUnota5= $tds17->MoralUnota5;
   // $MoralUnotaRecu= $tds17->MoralUnotaRecu;

   // $S17=$MoralUnota1 * $p1 +$MoralUnota2 * $p2 +$MoralUnota3 * $p3 +$MoralUnota4 * $p4 +$MoralUnota5 * $p5;/*lol*/

   // $MoralUPROMEDIO= $S17 / 100;
#




#final de todo

 ?>










