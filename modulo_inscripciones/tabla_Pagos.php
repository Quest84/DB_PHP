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
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: red;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>
<head>
	<title>Tabla</title>
</head>
<body>
	<font size face="roboto" color=white>
	<center>
		<form method = "LINK" action = "index.php">
			<input type = "submit" value = "Regresar">
		</form>	
		<table border = "3">
			<thead>
				<tr>
					<table style border=1 bgcolor=black>
					<th colspan="1"><a href="F_Insertar_Pagos.php"><L>Nuevo</L></a></th>
					<th colspan="7"><L>Pagos</L></th>
				</tr>
			</thead>
			<tbody>
				<font size="14" face="roboto" color=white>
				<tr>
					<th><L><center>ID_Pago</L></center></th>
					<th><L><center>Folio</L></center></th>
					<th><L><center>Tipo de Pago</L></center></th>
					<th><L><center>Cantidad</L></center></th>
					<th colspan = "2"><center><L>Operaciones</L></center></th>

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
							<td><a href = "F_Modificar_Pagos.php?id=<?php echo $row['id_pago']; ?>;">
							<center><img border ="0" alt= "editar" src=editar.png width="30" height="30">
							</a><center/>
							<td><a href = "OP_Eliminar_Pagos.php?id=<?php echo $row['id_pago']; ?>;">
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
