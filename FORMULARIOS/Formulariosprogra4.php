<html>
	<head>
		<title> Mi formulario </title>
		<meta uft-8>
	</head>
	<body>
		<h3>Login </h3>
		<form name ="login" method ="POST" action= "mostrar login.php">
		Digite su usuario:
		<input name="usuario" type= "text" value= "" required placeholder= "Usuario"/> </br>
		Digite su contraseña:
		<input type="password" name ="clave" value="" required placeholder= "Clave"/> </br>
		
		<input type="submit" name ="aceptar" value="Ingresar"/>
		<input type="reset" name ="cancelar" value="Cancelar"/>
	</form>
	<!-- comentarios en html -->
	</body>
	
</html>
<?php	
	if (!empty ($_REQUEST ['aceptar'])){
		echo $_REQUEST ['usuario'] . "<br/>". $_REQUEST ['clave'];
		
		//comentarios en PHP
	}
	
?>