<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
		<form method = "LINK" action = "tabla_CargaAcad.php">
				<input type = "submit" value = "Regresar">
			</form>			
		<form action = "OP_Insertar_CargaAcad.php" method = "POST">
		<form>
			<br/>
			<th>Insertar [Carga Academica]</th>
			<br/>
			<input type = "text" REQUIRE name = "ID_CargaAcademica" placeholder = "ID de la Carga Academica" value = ""/>
			<br/>
			<br/>
			<input type="text" REQUIRE name = "NControl" placeholder = "Numero de Control..." value = ""/>
			<br/>
			<br/>
			<input type = "text" REQUIRE name = "ID_Grupo" placeholder = "ID del Grupo..." value = ""/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>