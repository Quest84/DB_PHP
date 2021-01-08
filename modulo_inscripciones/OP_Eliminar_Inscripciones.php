<?php
include("conexion.php");

	$id = $_REQUEST['id'];

	$ID_Inscripcion = $_POST['ID_Inscripcion'];
	$ID_Carga_Acad = $_POST['ID_Carga_Acad'];

	$query = "DELETE FROM inscripciones WHERE id_inscripcion = '$id'";

	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: tabla_Inscripciones.php");
	} else {
		echo "Fallo la insercion";
	}
?>