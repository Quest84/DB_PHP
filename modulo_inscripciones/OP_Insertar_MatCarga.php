<?php

include("conexion.php");

	//Creacion de las variables de los campos de la tabla
	$ID_Carga = $_POST['id_carga_acad'];
	$Clave_Materia = $_POST['clave_materia'];

	$query = "INSERT INTO Materias_Carga (id_carga_acad, clave_materia) VALUES 
	('$ID_Carga', '$Clave_Materia')";

	$resultado = $conexion->query($query);


	if($resultado){
		header("Location: tabla_MatCarga.php");
	} else {
		echo "Fallo la insercion";
	}


?>