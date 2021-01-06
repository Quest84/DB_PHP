<!DOCTYPE html>
<html>
<head>
	<title>Guardar</title>
</head>
<body>
	<center>
		<form method = "LINK" action = "tabla_Inscripciones.php">
				<input type = "submit" value = "Regresar">
			</form>			
		<form action = "OP_Insertar_Inscripciones.php" method = "POST">
		<form>
			<br/>
			<th>Insertar [Inscripciones]</th>
			<br/>
			<input type = "text" REQUIRE name = "ID_Inscripcion" placeholder = "ID de la Inscripcion..." value = ""/>
			<br/>
			<br/>
			<input type="text" REQUIRE name = "ID_Carga_Acad" placeholder = "ID de la Carga Academica..." value = ""/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>