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
					<th colspan="1"><a href="F_Insertar_MatCarga.php">Nuevo</a></th>
					<th colspan="7">Materias-Carga</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th><center>ID Carga Academica</center></th>
					<th><center>ID Materia</center></th>
					<th colspan = "1"><center>Operaciones</center></th>

				</tr>
				<?php
					include ("conexion.php");

					$query = "SELECT * FROM Materias_Carga ORDER BY ID_Carga_Acad";
					$resultado = $conexion->query($query);
					while($row = $resultado->fetch_assoc()){
				?>
						<tr>
							<td><center><?php echo $row['id_carga_acad']; ?></center></td>
							<td><center><?php echo $row['clave_materia']; ?></center></td>
							<td><a href = "OP_Eliminar_MatCarga.php?id=<?php echo $row['id_carga_acad']; ?>;">
							<center><img border ="0" alt= "eliminar" src=eliminar.png width="30" height="30">
							</a><center/>
						</tr>						
					<?php
							}
					?>
			</tbody>
		</table>
	</center>
</body>
</html>
