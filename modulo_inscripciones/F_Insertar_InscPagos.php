<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
		<form method = "LINK" action = "tabla_InscPagos.php">
				<input type = "submit" value = "Regresar">
			</form>			
		<form action = "OP_Insertar_InscPagos.php" method = "POST">
		<form>
			<br/>
			<th>Insertar [Pagos]</th>
			<br/>
			<input type = "text" REQUIRE name = "ID_Inscripcion" placeholder = "ID de la Inscripcion..." value = ""/>
			<br/>
			<br/>
			<input type="text" REQUIRE name = "ID_Pago" placeholder = "ID del Pago..." value = ""/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>