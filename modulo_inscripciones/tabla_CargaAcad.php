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
					<th colspan="1"><a href="F_Insertar_CargaAcad.php">Nuevo</a></th>
					<th colspan="7">Carga Academica</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th><center>ID Carga Academica</center></th>
					<th><center>Numero de Control</center></th>
					<th><center>ID del Grupo</center></th>
					<th colspan = "2"><center>Operaciones</center></th>
					

				</tr>
				<?php
					include ("conexion.php");

					$query = "SELECT * FROM Carga_Academica ORDER BY id_carga_acad";
					$resultado = $conexion->query($query);
					while($row = $resultado->fetch_assoc()){
				?>
						<tr>
							<td><center><?php echo $row['id_carga_acad']; ?></center></td>
							<td><center><?php echo $row['num_control']; ?></center></td>
							<td><center><?php echo $row['id_grupo']; ?></center></td>
							<td><a href = "F_Modificar_CargaAcad.php?id=<?php echo $row['id_carga_acad']; ?>;">Modificar</a></td>
							<td><a href = "OP_Eliminar_CargaAcad.php?id=<?php echo $row['id_carga_acad']; ?>;">Eliminar</a></td>

						</tr>						

					<?php
							}
					?>
			</tbody>
		</table>
	</center>
</body>
</html>
