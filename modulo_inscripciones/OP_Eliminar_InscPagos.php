<?php
include("conexion.php");

	$id = $_REQUEST['id'];

	$query = "DELETE FROM inscripciones_pago WHERE id_pago = '$id'";

	$resultado = $conexion->query($query);

	if($resultado){
		header("Location: tabla_InscPagos.php");
	} else {
		echo "Fallo la insercion";
	}
?>