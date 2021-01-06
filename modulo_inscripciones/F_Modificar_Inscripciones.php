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
	<title>Modificar</title>
</head>
<body>
	<center>
		<form method = "LINK" action = "tabla_Inscripciones.php">
				<input type = "submit" value = "Regresar">
			</form>	
				<?php
					$id = $_REQUEST['id'];

					include ("conexion.php");
					
					$query = "SELECT * FROM Inscripciones WHERE ID_Inscripcion = '$id'";
					$resultado = $conexion->query($query);
					$row=$resultado->fetch_assoc();
				?>	

		<form action = "OP_Modificar_Inscripciones.php?id=<?php echo $row['id_inscripcion'];?>" method = "POST">
		<form>
			<font size face="roboto" color=black>
			<br/>
			<th><L>Modificar [Inscripciones]</L></th>
			<br/>
			<br/>
			<th><L>ID Carga Academica</L><th>
			<br/>
			<input type="text" REQUIRE name = "ID_Carga_Acad" placeholder = "" value = "<?php echo $row['id_carga_acad'];?>"/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>