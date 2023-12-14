<html>
	<head>
		<title> Agregar personas </title>
		<meta uft-8>
	</head>
	<body>
	<h3>Personas </h3>
		<form name ="datos" method ="POST" action= "MostrarPersonas.php">
		Digite su nombre:
		<input name="nombre" type= "text" value= "" required placeholder= "Nombre"/> </br>
		Digite su cédula:
		<input type="number" name ="cedula" value="" required placeholder= "Cedula"/> </br>
		Fecha de nacimiento:
		<input name="fecha" type= "date" value= "" required placeholder= "Fecha"/> </br>
		Indique su género:
		<input name="genero" type= "radio" value= "Masculino" required placeholder= "Genero"/> Masculino </br>
		<input name="genero" type= "radio" value= "Femenino" required placeholder= "Genero"/>Femenino </br>
		Digite su correo:
		<input name="correo" type= "email" value= "" required placeholder= "Correo"/> </br>
		Digite su télefono.
		<input name="telefono" type= "tel" value= "" required placeholder= "Telefono"/> </br>
		Perfil:
		<input name="perfil" type= "radio" value= "Plataforma" required placeholder= "Perfil"/> Plataforma</br>
		<input name="perfil" type= "radio" value= "Administrativo" required placeholder= "Perfil"/> Administrativo</br>
		<input name="perfil" type= "radio" value= "Docente" required placeholder= "Perfil"/>Docente </br>
		<input name="perfil" type= "radio" value= "Estudiante" required placeholder= "Perfil"/> Estudiante</br>
		Nivel:
		<input name="nivel1" type= "checkbox" value= "Diplomado" placeholder= "Nivel"/>Diplomado</br>
		<input name="nivel2" type= "checkbox" value= "Bachillerato" placeholder= "Nivel"/>Bachillerato</br>
		<input name="nivel3" type= "checkbox" value= "Licenciatura"  placeholder= "Nivel"/>Licenciatura</br>
		<input name="nivel4" type= "checkbox" value= "Maestria" placeholder= "Nivel"/>Maestria</br>
		Indique su dirección:
		<input name="direccion" type= "text" value= "" required placeholder= "Direccion"/> </br>

		
		<input type="submit" name ="aceptar" value="Ingresar"/>
		<input type="reset" name ="cancelar" value="Cancelar"/>
	</form>
	<!-- comentarios en html -->
	</body>
	
</html>
