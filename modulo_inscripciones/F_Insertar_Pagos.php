<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
		<form method = "LINK" action = "tabla_Pagos.php">
				<input type = "submit" value = "Regresar">
			</form>			
		<form action = "OP_Insertar_Pagos.php" method = "POST">
		<form>
			<br/>
			<th>Insertar [Pagos]</th>
			<br/>
			<input type = "text" REQUIRE name = "ID_Pago" placeholder = "ID del Pago" value = ""/>
			<br/>
			<br/>
			<input type="text" REQUIRE name = "Folio" placeholder = "Folio..." value = ""/>
			<br/>
			<br/>
			<input type = "text" REQUIRE name = "tipoPago" placeholder = "Tipo de Pago..." value = ""/>
			<br/>
			<br/>
			<input type = "text" REQUIRE name = "Cantidad" placeholder = "Cantidad..." value = ""/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>