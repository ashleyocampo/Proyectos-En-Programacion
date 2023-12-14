<html>
    <head>
        <title>Salir</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
		<h3>Log out </h3>
		<?php
		echo $_REQUEST ['usuario'] . "<br/>". $_REQUEST ['clave'];
		
		//comentarios en PHP
		date_default_timezone_set('America/Costa_Rica');
 
        $fecha_actual = date("d-m-Y h:i:s");
		
		/////////////// ESCRIBIR ARCHIVOS
			$fp = fopen("bitacora.txt", "a+");  // Para escritura
			fwrite($fp, "Fecha de Salida: " . $fecha_actual. PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP
			fwrite($fp, "------------------" . PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP

			fclose($fp);
			echo "Bitácora creada";
				header("Location: login.php");
	
?>
</body>
	
</html>