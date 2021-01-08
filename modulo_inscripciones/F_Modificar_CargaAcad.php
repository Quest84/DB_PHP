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
</style>
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
					
					$query = "SELECT * FROM carga_academica WHERE id_carga_acad = '$id'";
					$resultado = $conexion->query($query);
					$row=$resultado->fetch_assoc();
				?>	

		<form action = "OP_Modificar_CargaAcad.php?id=<?php echo $row['id_carga_acad'];?>" method = "POST">
		<form>
			<font size face="roboto" color=black>
			<br/>
			<th><L>Modificar [Carga Academica]</L></th>
			<br/>
			<br/>
			<th><L>Numero de Control</L><th>
			<br/>
			<input type="text" REQUIRE name = "NControl" placeholder = "" value = "<?php echo $row['num_control'];?>"/>
			<br/>
			<br/>
			<th><L>ID del Grupo</L><th>
			<br/>
			<input type = "text" REQUIRE name = "ID_Grupo" placeholder = "" value = "<?php echo $row['id_grupo'];?>"/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>