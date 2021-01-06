<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
	<center>
		<form method = "LINK" action = "index.php">
			<input type = "submit" value = "Regresar">
		</form>	
		<table border = "3">
			<thead>
				<tr>
					<th colspan="1"><a href="F_Insertar_Inscripciones.php">Nuevo</a></th>
					<th colspan="7">Inscripciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th><center>ID Inscripcion</center></th>
					<th><center>ID Carga Academica</center></th>
					<th colspan = "2"><center>Operaciones</center></th>

				</tr>
				<?php
					include ("conexion.php");

					$query = "SELECT * FROM Inscripciones ORDER BY id_inscripcion";
					$resultado = $conexion->query($query);
					while($row = $resultado->fetch_assoc()){
				?>
						<tr>
							<td><center><?php echo $row['id_inscripcion']; ?></center></td>
							<td><center><?php echo $row['id_carga_acad']; ?></center></td>
							<td><a href = "F_Modificar_Inscripciones.php?id=<?php echo $row['id_inscripcion']; ?>;">Modificar</a></td>
							<td><a href = "OP_Eliminar_Inscripciones.php?id=<?php echo $row['id_inscripcion']; ?>;">Eliminar</a></td>

						</tr>						

					<?php
							}
					?>
			</tbody>
		</table>
	</center>
</body>
</html>
