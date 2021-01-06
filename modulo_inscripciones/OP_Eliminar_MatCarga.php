<?php
include("conexion.php");

	$id_carga = $_REQUEST['id_carga'];
	$id_materia = $_REQUEST['id_materia']

	$query = "DELETE FROM materias_carga WHERE id_carga_acad = '$id_carga'
	and clave_materia = '$id_materia'";

	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: tabla_MatCarga.php");
	} else {
		echo "Fallo la insercion";
	}
?>