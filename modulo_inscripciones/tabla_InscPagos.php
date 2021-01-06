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
					<th colspan="1"><a href="F_Insertar_InscPagos.php"><L>Nuevo</L></a></th>
					<th colspan="7"><L>Inscripciones-Pagos</L></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<font size="14" face="roboto" color=white>
					<th><center><L>ID Inscripcion</L></center></th>
					<th><center><L>ID Pago</L></center></th>
					<th colspan = "1"><center><L>Operaciones</L></center></th>

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
							<td><a href = "OP_Eliminar_InscPagos.php?id=<?php echo $row['id_pago']; ?>;">
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
