<html>
	<head>
		<title> Registro de Dinosaurios</title>
		<meta uft-8>
	</head>
	<body>
	<h3>Dinosaurios</h3>
		<form name ="datos" method ="POST" action= "MostrarDinosaurio.php">
		Nombre del dinosaurio:
		<input name="dinosaurio" type= "text" value= "" required placeholder= ""/> </br>
	    Género:</br>
		<input name="genero" type= "radio" value= "2" required placeholder= "Genero" onchange="cal()" onkeyup="cal()"/> Hembra</br>
		<input name="genero" type= "radio" value= "4" required placeholder= "Genero" onchange="cal()" onkeyup="cal()"/> Macho </br>
		Alimentación:</br>
		<input name="alimentacion" type= "radio" value= "2" required placeholder= "alimentacion" onchange="cal()" onkeyup="cal()"/> Vegetariano</br>
		<input name="alimentacion" type= "radio" value= "4" required placeholder= "alimentacion" onchange="cal()" onkeyup="cal()"/> Carnívoro </br>
		Fecha de Registro:
		<input name="fecha" type= "date" value= "" placeholder= "Fecha"/> </br>
		Tipo de Dinosaurio:</br>
		<input name="tipo1" type= "checkbox" value= "1" placeholder= "Tipo" onchange="cal()" onkeyup="cal()"/>Ave</br>
		<input name="tipo2" type= "checkbox" value= "2" placeholder= "Tipo" onchange="cal()" onkeyup="cal()"/>Pez</br>
		<input name="tipo3" type= "checkbox" value= "3"  placeholder= "Tipo" onchange="cal()" onkeyup="cal()"/>Terrestre</br>
		Edad del Dinosaurio:
	   <input type="number" name ="edad" value="" required placeholder= "Edad"/> </br>
	    Consideraciones importantes:</br>
		<textarea name="consideraciones" value="" required placeholder= "consideraciones" /> </textarea> </br> 
		</br> 
	
		<input type="submit" name ="aceptar" value="Ingresar"/>
		<input type="submit" name ="reesribir" value="Ingresar Valores"/>
		<input type="reset" name ="cancelar" value="Cancelar"/>
		
		</br> 
		</br> 
		<a href="MostrarDinosaurio.php">Mostrar Dinosaurios</a> </br>
		<a href="MostrarArreglo.php">Mostrar Niveles de Estres</a> </br>
		
	</form>
	
	</body>
	
</html>