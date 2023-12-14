<html>
	<head>
		<title> Agregar personas </title>
		<meta uft-8>
	</head>
	<body>
		<h3>Mostrar Login  </h3>
		<?php
		
		
		//comentarios en PHP
	echo $_REQUEST ['nombre'] . "<br/>";
	echo $_REQUEST ['cedula'] . "<br/>";
	echo $_REQUEST ['fecha'] . "<br/>";
	echo $_REQUEST ['genero'] . "<br/>";
	echo $_REQUEST ['correo'] . "<br/>";
	echo $_REQUEST ['telefono'] . "<br/>";
	echo $_REQUEST ['perfil'] . "<br/>";
		
	if (isset($_REQUEST ['nivel1'])) {
        echo $_REQUEST ['nivel1'] . "<br/>";
	}
	if (isset($_REQUEST ['nivel2'])) {
        echo $_REQUEST ['nivel2'] . "<br/>";
	}
	if (isset($_REQUEST ['nivel3'])) {
        echo $_REQUEST ['nivel3'] . "<br/>";
	}
	if (isset($_REQUEST ['nivel4'])) {
        echo $_REQUEST ['nivel4'] . "<br/>";
	}
	echo $_REQUEST ['direccion'] . "<br/>";

	?>
	
	</body>
	
</html>