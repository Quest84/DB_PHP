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
		<form method = "LINK" action = "tabla_Pagos.php">
				<input type = "submit" value = "Regresar">
			</form>	
				<?php
					$id = $_REQUEST['id'];

					include ("conexion.php");
					
					$query = "SELECT * FROM Pagos WHERE ID_Pago = '$id'";
					$resultado = $conexion->query($query);
					$row=$resultado->fetch_assoc();
				?>	

		<form action = "OP_Modificar_Pagos.php?id=<?php echo $row['id_pago'];?>" method = "POST">
		<form>
			<font size face="roboto" color=black>
			<br/>
			<th><L>Modificar [Pagos]</L></th>
			<br/>
			<br/>
			<th><L>Folio</L><th>
			<br/>
			<input type="text" REQUIRE name = "Folio" placeholder = "" value = "<?php echo $row['folio'];?>"/>
			<br/>
			<br/>
			<th><L>Tipo de Pago</L><th>
			<br/>
			<input type="text" REQUIRE name = "tipoPago" placeholder = "" value = "<?php echo $row['tipoPago'];?>"/>
			<br/>
			<br/>
			<th><L>Cantidad</L><th>
			<br/>
			<input type = "text" REQUIRE name = "Cantidad" placeholder = "" value = "<?php echo $row['Cantidad'];?>"/>
			<br/>
			<br/>
			<input type = "submit" value = "Aceptar"/>
</body>
</html>