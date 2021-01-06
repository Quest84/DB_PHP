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
					<th colspan="1"><a href="F_Insertar_Inscripciones.php">Nuevo</a></th>
					<th colspan="7">Inscripciones</th>
				</tr>
			</thead>
			<tbody>
				<font size="14" face="roboto" color=white>
				<tr>
					<th><center><L>ID Inscripcion</L></center></th>
					<th><center><L>ID Carga Academica</L></center></th>
					<th colspan = "2"><center><L>Operaciones</L></center></th>

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
							<td><a href = "F_Modificar_Inscripciones.php?id=<?php echo $row['id_inscripcion']; ?>;">
							<center><img border ="0" alt= "editar" src=editar.png width="30" height="30">
							</a><center/>
							<td><a href = "OP_Eliminar_Inscripciones.php?id=<?php echo $row['id_inscripcion']; ?>;">
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
