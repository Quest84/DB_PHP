<?php

include("conexion.php");


	$ID_cargaAcad = $_POST['ID_CargaAcademica'];
	$num_control = $_POST['NControl'];
	$ID_grupo = $_POST['ID_Grupo'];

	$query = "INSERT INTO carga_academica (id_carga_acad, num_control, id_grupo) VALUES 
	('$ID_cargaAcad', '$num_control', '$ID_grupo')";

	$resultado = $conexion->query($query);


	if($resultado){
		header("Location: tabla_CargaAcad.php");
	} else {
		echo "Fallo al insertar";
	}


?>