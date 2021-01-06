<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<center>
		<form method = "LINK" action = "tabla_CargaAcad.php">
				<input type = "submit" value = "Regresar">
			</form>	
				<?php
					$id = $_REQUEST['id'];

					include ("conexion.php");
					
					$query = "SELECT * FROM Carga_Academica WHERE id_carga_acad = '$id'";
					$resultado = $conexion->query($query);
					$row=$resultado->fetch_assoc();
				?>	

		<form action = "OP_Modificar_CargaAcad.php?id=<?php echo $row['id_carga_acad'];?>" method = "POST">
		<form>
			<br/>
			<th>Modificar [Carga Academica]</th>
			<br/>
			<br/>
			<th>Numero de Control<th>
			<br/>
			<input type="text" REQUIRE name = "NControl" placeholder = "" value = "<?php echo $row['num_control'];?>"/>
			<br/>
			<br/>
			<th>ID del Grupo<th>
			<br/>
			<input type = "text" REQUIRE name = "ID_Grupo" placeholder = "" value = "<?php echo $row['id_grupo'];?>"/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>