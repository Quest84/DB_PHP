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
					<th colspan="1"><a href="F_Insertar_Pagos.php">Nuevo</a></th>
					<th colspan="7">Pagos</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th><center>ID_Pago</center></th>
					<th><center>Folio</center></th>
					<th><center>Tipo de Pago</center></th>
					<th><center>Cantidad</center></th>
					<th colspan = "2"><center>Operaciones</center></th>

				</tr>
				<?php
					include ("conexion.php");

					$query = "SELECT * FROM pagos ORDER BY id_Pago";
					$resultado = $conexion->query($query);
					while($row = $resultado->fetch_assoc()){
				?>
						<tr>
							<td><center><?php echo $row['id_pago']; ?></center></td>
							<td><center><?php echo $row['folio']; ?></center></td>
							<td><center><?php echo $row['tipoPago']; ?></center></td>
							<td><center><?php echo $row['Cantidad']; ?></center></td>
							<td><a href = "F_Modificar_Pagos.php?id=<?php echo $row['id_pago']; ?>;">Modificar</a></td>
							<td><a href = "OP_Eliminar_Pagos.php?id=<?php echo $row['id_pago']; ?>;">Eliminar</a></td>

						</tr>						

					<?php
							}
					?>
			</tbody>
		</table>
	</center>
</body>
</html>
