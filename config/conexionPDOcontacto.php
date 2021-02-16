<?php 




try{
	$base=new PDO('mysql:host=localhost; dbname=dbsnotas', 'root', '');//RESPETAR LOS ESPACIOS DESDUES DE LAS COMAS
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//SetAttribute lleva dos T
	$base->exec("SET CHARACTER SET UTF8");
// echo "conectado";

	}catch(exception $e){
		die ('Error'.$e->getMessage());
		echo "Linea del error".$e->getline();
	}



 ?>

 <?php

	$coneion= new mysqli("localhost", "root", "", "dbsnotas");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		// echo "conectado"; 
		// printf("Estas conectado");
	}
?>