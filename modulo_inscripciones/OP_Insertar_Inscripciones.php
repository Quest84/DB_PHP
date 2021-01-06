<?php

include("conexion.php");

	//Creacion de las variables de los campos de la tabla
	$ID_Inscripcion = $_POST['ID_Inscripcion'];
	$ID_Carga_Acad = $_POST['ID_Carga_Acad'];

	$query = "INSERT INTO Inscripciones (ID_Inscripcion, ID_Carga_Acad) VALUES 
	('$ID_Inscripcion', '$ID_Carga_Acad')";

	$resultado = $conexion->query($query);


	if($resultado){
		header("Location: tabla_Inscripciones.php");
	} else {
		echo "Fallo la insercion";
	}


?>