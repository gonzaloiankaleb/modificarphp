<?php
	include 'conexion.php';
?>
<html>
  <head>
    <title>Login - Empleado</title>
  </head>
  <body>
    <h1>Login - Empleado</h1>

<?php
	$mensaje = "";
	if ( isset($_POST['valor1']) ) {
		$sql = "SELECT * FROM usuario WHERE nick = '" . $_POST['valor1'] . "' and pass = '" . $_POST['valor2'] . "'";
		$result = mysqli_query($conn, $sql );

		if ($row = mysqli_fetch_array($result)) {
			$mensaje = "Bienvenido " . $row['nombre'];
		} else {
			$mensaje = "Usuario o password incorrectos";
		}
		$conn->close();
	}
?>
	<form action="loginEmpleado.php" method="post">
		Nick <input type="text" id="valor1" name="valor1" /> <br>
		Constraseña <input type="text" id="valor2" name="valor2" /> <br>
		<br> <?php echo $mensaje ?> <br>
		<input id='backbutton' type="submit" value="enviar"/>
	</form>
  </body>
</html>