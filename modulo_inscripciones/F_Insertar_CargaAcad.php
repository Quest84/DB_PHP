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
		<form method = "LINK" action = "tabla_CargaAcad.php">
				<input type = "submit" value = "Regresar">
			</form>			
		<form action = "OP_Insertar_CargaAcad.php" method = "POST">
		<form>
			<font size face="roboto" color=black>
			<br/>
			<th><L>Insertar [Carga Academica]</L></th>
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