<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
		<form method = "LINK" action = "tabla_MatCarga.php">
				<input type = "submit" value = "Regresar">
			</form>			
		<form action = "OP_Insertar_MatCarga.php" method = "POST">
		<form>
			<br/>
			<th>Insertar [Pagos]</th>
			<br/>
			<input type = "text" REQUIRE name = "id_carga_acad" placeholder = "ID de la Carga Academica..." value = ""/>
			<br/>
			<br/>
			<input type="text" REQUIRE name = "clave_materia" placeholder = "ID de la Materia..." value = ""/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>