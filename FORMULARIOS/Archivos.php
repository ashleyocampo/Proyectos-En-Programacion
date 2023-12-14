<html>
    <head>
        <title>Formulario I</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
         <?php

			/////////////// LEER ARCHIVOS
			$fp = fopen("fichero.txt", "r"); //abre el archivo para lectura
			while(!feof($fp)) {
				$linea = fgets($fp);  // fgets recupera el contenido de una línea de un archivo
				echo $linea . "<br />";
			}
			fclose($fp);  // fclose cierra un archivo abierto, es de caracter obligatorio usarlo
			
			/// Otra forma de leer archivos
			$texto = file_get_contents("fichero.txt"); //Para recuperar el contenido total del archivo, sin saltos de línea
			$texto = nl2br($texto); //nl2br convierte los saltos de línea a etiquetas <br />
			echo $texto;
			

			
			/////////////// ESCRIBIR ARCHIVOS
			$fp = fopen("fichero.txt", "a+");  // Para escritura
			fwrite($fp, "Esto es una nueva linea de texto" . PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP
			fputs($fp, "Prueba de escritura". PHP_EOL);  // fputs escribe una línea en un archivo
			fclose($fp);
			echo "Archivo creado";
			
			
				
		?>
		<p>Link de acceso a la UTC <a href="http://www.utc.ac.cr">aquí</a></p>
    </body>
</html>