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
					<th colspan="1"><a href="F_Insertar_InscPagos.php">Nuevo</a></th>
					<th colspan="7">Inscripciones-Pagos</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th><center>ID Inscripcion</center></th>
					<th><center>ID Pago</center></th>
					<th colspan = "1"><center>Operaciones</center></th>

				</tr>
				<?php
					include ("conexion.php");

					$query = "SELECT * FROM Inscripciones_Pago ORDER BY id_inscripcion";
					$resultado = $conexion->query($query);
					while($row = $resultado->fetch_assoc()){
				?>
						<tr>
							<td><center><?php echo $row['id_inscripcion']; ?></center></td>
							<td><center><?php echo $row['id_pago']; ?></center></td>
							<td><a href = "OP_Eliminar_InscPagos.php?id=<?php echo $row['id_pago']; ?>;"><center/>Eliminar</center></td>
						</tr>						
					<?php
							}
					?>
			</tbody>
		</table>
	</center>
</body>
</html>
