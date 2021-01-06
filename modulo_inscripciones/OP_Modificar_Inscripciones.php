<?php

include("conexion.php");

	$id = $_REQUEST['id'];

	$ID_Inscripcion = $_POST['ID_Inscripcion'];
	$ID_Carga_Acad = $_POST['ID_Carga_Acad'];

	$query = "UPDATE Inscripciones SET ID_Carga_Acad = '$ID_Carga_Acad' WHERE ID_Inscripcion = '$id'";

	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: tabla_Inscripciones.php");
	} else {
		echo "Fallo la insercion";
	}

?>