<?php 
$CondiGrado = $_POST["grado"];

/*DE 1 A 6 GRADO*/if ($CondiGrado <= 6) {
	if ($CondiGrado == 1) {
		#Inclusion de 1 A 6 Grado 
		include 'NotasXgrado1A6.php';
	}else if ($CondiGrado == 2) {
		#Inclusion de 1 A 6 Grado 
		include 'NotasXgrado1A6.php';
	}else if ($CondiGrado == 3) {
		#Inclusion de 1 A 6 Grado 
		include 'NotasXgrado1A6.php';
	}else if ($CondiGrado == 4) {
		#Inclusion de 1 A 6 Grado 
		include 'NotasXgrado1A6.php';
	}else if ($CondiGrado == 5) {
		#Inclusion de 1 A 6 Grado 
		include 'NotasXgrado1A6.php';
	}else if ($CondiGrado == 6) {
		#Inclusion de 1 A 6 Grado 
		include 'NotasXgrado1A6.php';
	}
}/* DE 7 A 9 GRADO*/else if ($CondiGrado <= 9) {
	if ($CondiGrado == 7) {
		#Inclusion de 7 A 9 Grado 
		include 'NotasXgrado7A9.php';
	}else if ($CondiGrado == 8) {
		#Inclusion de 7 A 9 Grado 
		include 'NotasXgrado7A9.php';
	}else if ($CondiGrado == 9) {
		#Inclusion de 7 A 9 Grado 
		include 'NotasXgrado7A9.php';
	}
}/*BTO CONTADOR*/else if ($CondiGrado <= 12) {
	
	if ($CondiGrado == 10) {
		# DE 1BTO CONTA A 3BTO CONTA
		include 'NotasBtoContador.php';
		
	}else if ($CondiGrado == 11) {
		# DE 1BTO CONTA A 3BTO CONTA
		include 'NotasBtoContador.php';
		
	}else if ($CondiGrado == 12) {
		# DE 1BTO CONTA A 3BTO CONTA
		include 'NotasBtoContador.php';
		
	} 
}/*BTO SALUD*/else if ($CondiGrado >= 13) {
	if ($CondiGrado == 13) {
        # 1 bto salud
		include 'NotasBtoSalud.php';
	}else if ($CondiGrado == 14) {
		# 2 bto salud
		include 'NotasBtoSalud.php';
	}else if ($CondiGrado == 15) {
		# 3 bto salud
		include 'NotasBtoSalud.php';
	}
}








 ?>