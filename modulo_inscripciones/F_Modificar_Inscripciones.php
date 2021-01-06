<!DOCTYPE html>
<html>
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
			<br/>
			<th>Modificar [Inscripciones]</th>
			<br/>
			<br/>
			<th>ID Carga Academica<th>
			<br/>
			<input type="text" REQUIRE name = "ID_Carga_Acad" placeholder = "" value = "<?php echo $row['id_carga_acad'];?>"/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>