<html>
    <head>
        <title>MostrarDinosaurio</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
		<h3>Dinosaurio Mostrado </h3>
		
		<?php
		echo $_REQUEST ['dinosaurio'] . "<br/>". $_REQUEST ['genero'];
		echo $_REQUEST ['alimentacion'] . "<br/>". $_REQUEST ['fecha'];
		echo $_REQUEST ['alimentacion1'] . "<br/>". $_REQUEST ['genero1'];
		echo $_REQUEST ['edad'] . "<br/>". $_REQUEST ['consideraciones'];
		if (isset($_REQUEST ['tipo1'])) {
			echo $_REQUEST ['tipo1'] . "<br/>";
		}
		if (isset($_REQUEST ['tipo2'])) {
			echo $_REQUEST ['tipo2'] . "<br/>";
		}
		if (isset($_REQUEST ['tipo3'])) {
			echo $_REQUEST ['tipo3'] . "<br/>";
		}
		
		/////////////// ESCRIBIR ARCHIVOS
			$fp = fopen("bitacora.txt", "a+");  // Para escritura
			fwrite($fp, "Nombre del dinosaurio: " .$_REQUEST['dinosaurio']. PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP
			fwrite($fp, "Genero: " .$_REQUEST['genero']. PHP_EOL);
			fwrite($fp, "Alimentacion: " .$_REQUEST['alimentacion']. PHP_EOL);
			fwrite($fp, "Fecha de Registro: " .$_REQUEST['fecha']. PHP_EOL);
			fwrite($fp, "Tipo de Dinosaurio: " .$_REQUEST['tipo']. PHP_EOL);
			fwrite($fp, "Edad del Dinosaurio: " .$_REQUEST['edad']. PHP_EOL);
			fwrite($fp, "Consideraciones importantes: " .$_REQUEST['consideraciones']. PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP
			fwrite($fp, "------------------------------------------" . PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP

			fclose($fp);
			echo "Bitácora creada";
				header("Location: Menu.php");
	
?>
</body>
	
</html>