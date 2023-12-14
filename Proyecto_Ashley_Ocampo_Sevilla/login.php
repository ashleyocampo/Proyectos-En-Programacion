<html>
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Battle Fight</title>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>

<div id="container">
	<div id="intro">
	<table width="750" border="0" cellpadding="0" cellspacing="0">
 <tr>
  <td colspan="3" width="900" height="500" background="header.jpg" valign="top" style="padding:0 0 0 10">
  </tr>
   <tr style="justify-content:center">
			<h3><span>Login</span></h3>
		<form name ="login" method ="POST" action= "">
		Digite su usuario:
		<input name="usuario" type= "text" value= "" required placeholder= "Usuario"/> </br></br>
		Digite su contraseña:
		<input type="password" name ="clave" value="" required placeholder= "Clave"/> </br></br> 
		
		<input type="submit" name ="aceptar" value="Ingresar"/> &nbsp;
		<input type="reset" name ="cancelar" value="Cancelar"/>
		
	</form>
	 </tr>
	  </table>
	
		</div>
	</div>
	</body>
	<div id="supportingText">
		<div id="explanation">
			<h3><span></span></h3>

		<div id="footer">
		</div>

	</div>

</html>

	<?php
	if (!empty($_POST['aceptar'])){
		
		echo $_REQUEST ['usuario'] . "<br/>". $_REQUEST ['clave'];
		
		//comentarios en PHP
		date_default_timezone_set('America/Costa_Rica');
 
        $fecha_actual = date("d-m-Y h:i:s");
		
		/////////////// ESCRIBIR ARCHIVOS
			$fp = fopen("bitacora.txt", "a+");  // Para escritura
			fwrite($fp, "Nombre de Usuario: " .$_REQUEST['usuario']. PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP
			fwrite($fp, "Fecha Ingreso: " . $fecha_actual. PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP
			fwrite($fp, "------------------" . PHP_EOL); //PHP_EOL (end of line) introduce un salto de línea en PHP

			fclose($fp);
			echo "Bitácora creada";
				header("Location: menu.php");
	}
	?>	