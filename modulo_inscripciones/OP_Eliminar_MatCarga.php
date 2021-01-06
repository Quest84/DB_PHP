<?php
include("conexion.php");

	$id = $_REQUEST['id'];
	$id2 = $_REQUEST['id2'];

	$query = "DELETE FROM materias_carga WHERE id_carga_acad = '$id'
	and clave_materia = '$id2'";

	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: tabla_MatCarga.php");
	} else {
		echo "Fallo la insercion";
	}
?>