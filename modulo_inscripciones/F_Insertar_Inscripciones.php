<!DOCTYPE html>
<html>
<style>
L{
	font-size:18px;
}

body{
	background-image: url("tesjo.png");
	background-repeat: no-repeat;
  	background-attachment: fixed;
  	background-position: center;

}
</style>
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
			<font size face="roboto" color=black>
			<br/>
			<th><L>Insertar [Inscripciones]</L></th>
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