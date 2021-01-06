<?php

include("conexion.php");

	$id = $_REQUEST['id'];

	$num_control = $_POST['NControl'];
	$ID_Grupo = $_POST['ID_Grupo'];

	$query = "UPDATE Carga_Academica SET num_control = '$num_control', id_grupo = '$ID_Grupo' WHERE id_carga_acad = '$id'";

	$resultado = $conexion->query($query);


	if($resultado){
		header("Location: tabla_CargaAcad.php");
	} else {
		echo "Fallo al insertar";
	}


?>