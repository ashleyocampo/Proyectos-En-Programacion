<html>
    <head>
        <title>Arrays</title>
    </head>
    <body>
		<h3>Arrays unidimensionales / Vectores</h3>
        <?php
			//Diferentes formas de declarar un array unidimensional
            $estacion[0] = "Primavera";
			$estacion[1] = "Verano";
			$estacion[2] = "Otoño";
			$estacion[3] = "Invierno";
			echo $estacion[3],"<br/>";

			$ciudad[] = "Sevilla";
			$ciudad[] = "Madrid";
			$ciudad[] = "Barcelona";
			$ciudad[] = "Valencia";
			echo $ciudad[3],"<br/>";
					
			$color = array("azul", 4, $estacion[2], 4.6);
			echo $color[1],"<br/>";
        ?>
		<br>
		<h3>Arrays de dos dimensiones / Matrices</h3>
		<?php
			//Diferentes formas de declarar un array de dos dimensiones
			$animal[0][0] = "Perro";
			$animal[0][1] = "Gato";
			$animal[1][0] = "Lombriz";
			$animal[1][1] = "Burro";
			$animal[2][0] = "Murciélago";
			$animal[2][1] = "Cocodrilo";
			echo $animal[2][1],"<br/>";

			$animales = array(
			array("Perro", "Gato"),
			array("Lombriz", "Burro"),
			array("Murciélago", "Cocodrilo"));
			echo $animales[2][1],"<br/>";

			$Animal[0] = array("Perro", "Gato");
			$Animal[1] = array("Lombriz", "Burro");
			$Animal[2] = array("Murciélago", "Cocodrilo");
			echo $Animal[2][1],"<br/>";
		?>
		<br>
		<h3>Arrays Asociativos </h3>
		<?php
		//Diferentes formas de declarar un array asociativos
			$colores_vehiculos = array(
			'coche' => 'Rojo',
			'moto' => 'verde',
			'avion' => 'amarillo');
			echo $colores_vehiculos['moto'],"<br/>";

			$indice = 'coche';
			$color_vehiculos = array(
			$indice => 'Rojo',
			'moto' => 'verde',
			'avion' => 'amarillo');
			echo $color_vehiculos[$indice],"<br/>";

			$colores_vehi['coche'] = 'Rojo';
			$colores_vehi['moto'] = 'verde';
			$colores_vehi['avion'] = 'amarillo';
			echo $colores_vehi['moto'],"<br/>";
		?>
		<br>
		<h3>Funciones</h3>
		<h5>Recorrer Arreglos por medio de una funcion</h5>
		<?php
			//Declaración de funciones
			function mostrarArreglo($array) {
				for($i=0; $i<count($array); $i++) {
					echo $array[$i].'<br/>';
				}
			}	//Fin de declaración de funciones
			
			mostrarArreglo($ciudad);  //llamada a la funcion
		?>
    </body>
</html>