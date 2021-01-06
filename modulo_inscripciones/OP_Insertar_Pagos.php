<?php

include("conexion.php");

	//Creacion de las variables de los campos de la tabla
	$ID_Pago = $_POST['ID_Pago'];
	$Folio = $_POST['Folio'];
	$TipoPago = $_POST['tipoPago'];
	$Cantidad = $_POST['Cantidad'];

	$query = "INSERT INTO Pagos (id_pago, folio, tipoPago, cantidad) VALUES 
	('$ID_Pago', '$Folio', '$TipoPago', '$Cantidad')";

	$resultado = $conexion->query($query);


	if($resultado){
		header("Location: tabla_Pagos.php");
	} else {
		echo "Fallo la insercion";
	}


?>