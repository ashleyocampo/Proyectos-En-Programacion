<?php
date_default_timezone_set('America/Costa_Rica'); // Establecemos la Zona Horaria
$fecha = date("d/m/Y"); // Solicitamos la fecha y lo almacenamos en esa varibale
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="<meta http-equiv="\" content="IE=edge" content="text/html; charset=ISO-8859-1">
<title>Battle Fight</title>
<link rel="STYLESHEET" href="style2.css" type="text/css">
</head>
<body bgcolor="FFFFFF">
<div align="center">
<table width="750" border="0" cellpadding="0" cellspacing="0">
 <tr>
  <td colspan="3" width="750" height="200" background="header.jpg" valign="top" style="padding:0 0 0 10">
   <table width="700" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td width="750" colspan="3" class="logo">
    <b>
     Battle Fight</b>
    
     </td>
    </tr>
    <tr>
     <td width="330" class="slogan">
     
     Let's Play!!
    
     </td>
     <td width="400" align="right">
      <table width="400" border="0" cellpadding="0" cellspacing="0">
       <tr>
        <td align="right" height="20">

        </td>
       </tr>
      </table>
     </td>
     <td width="20"></td>
    </tr>
   </table>
  </td>
 </tr>
 <tr>
  <td colspan="3" height="15" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td colspan="3" height="1" bgcolor="CCCCCC"></td>
 </tr>
 <tr>
  <td colspan="3" height="10" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td width="170" bgcolor="FFFFFF" valign="top">
  <span style="font-size:6px"><br></span>
  <div align="center">
   <table width="140" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td><a href="menu.php">Inicio</a></td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="equipo.php">Equipos</a></td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="torneo.php">Torneos</a></td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="usuarios.php">Usuarios</a></td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="acercade.php">Acerca de</a></td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="logout.php">Salir</a></td>
    </tr>
   </table>
   <br><span style="font-size:6px"><br></span>
   
  <span style="font-size:6px"><br></span>
  </div>
  </td>
  <td width="1" bgcolor="CCCCCC"></td>
  <td width="579" valign="top">
  <span style="font-size:6px"><br></span>
  <div align="center">
   <table width="549" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td colspan="4" height="1" bgcolor="AAAAAA"></td>
     <td width="5" height="1" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td rowspan="2" colspan="2" width="542" height="27" bgcolor="#597F20" class="class1">&nbsp;&nbsp;Torneo</td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" height="4" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0" height="23"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" height="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" bgcolor="FFFFFF">
      <table width="542" border="0" cellpadding="17" cellspacing="0">
       <tr>
        <td style="color:999999;line-height:1.6em">
        <div align="justify">
		<form name ="datos" method ="POST" action= "">
		<table border="0" windth="20%" align="center">
		Codigo de Torneo:
		<input type="number" name ="codigo" value="" required placeholder= "Codigo"/> </br> </p>
		Fecha
		<input name="fecha" type= "text" value= "<?php echo $fecha; ?> " readonly required= "Fecha"/> </br> </p>
		Precio:
		<input type="number" name ="precio" value="" required placeholder= "Precio"/> $ </br> </p>
		Categoria:</br>
		<input name="categoria" type= "radio" value= "B" required placeholder= "Categoria"/> Beginner </br>
		<input name="categoria" type= "radio" value= "M" required placeholder= "Categoria"/> Middle </br>
		<input name="categoria" type= "radio" value= "E" required placeholder= "Categoria"/> Expert </br>
		<input type="submit" name ="aceptar" value="Ingresar"/> &nbsp;
		<input type="reset" name ="cancelar" value="Cancelar"/>
		</table>
		</form>
		<form name ="datos" method ="POST" action= "">
		<table border="0" windth="20%" align="center">
	    <a href= "mostrarTorneo.php">Mostrar Torneos</a> </p>
		</table>
		</form>		
		</div>
        </td>
       </tr>
      </table>
     </td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" height="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" height="5" bgcolor="FFFFFF"></td>
     <td width="4" height="5" bgcolor="FFFFFF"></td>
     <td width="538" height="5" bgcolor="F0F0F0"></td>
     <td width="1" height="5" bgcolor="F0F0F0"></td>
     <td width="5" height="5" bgcolor="F0F0F0"></td>
    </tr>
   </table>
  <br>
   <table width="549" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td colspan="4" height="1" bgcolor="AAAAAA"></td>
     <td width="5" height="1" bgcolor="FFFFFF"></td>
    </tr>
      </table>
     </td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" height="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" height="5" bgcolor="FFFFFF"></td>
     <td width="4" height="5" bgcolor="FFFFFF"></td>
     <td width="538" height="5" bgcolor="F0F0F0"></td>
     <td width="1" height="5" bgcolor="F0F0F0"></td>
     <td width="5" height="5" bgcolor="F0F0F0"></td>
    </tr>
   </table>
  <span style="font-size:6px"><br></span>
  </div>
  </td>
 </tr>
 <tr>
  <td colspan="3" height="10" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td colspan="3" height="1" bgcolor="CCCCCC"></td>
 </tr>
 <tr>
  <td colspan="3" height="5" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td colspan="3" bgcolor="FFFFFF" align="right">
  Copyright © 2005 All Rights Reserved 
  </td>
 </tr>
</table>
</div>
</body>
</html>
<?php
if (!empty($_POST['aceptar'])){
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "battlefight");

$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
date_default_timezone_set('America/Costa_Rica');
 
        $fecha_actual = date("y");
$query = "INSERT INTO torneo VALUES ('$_REQUEST[codigo]', '$_REQUEST[fecha]', '$_REQUEST[precio]',  '$_REQUEST[categoria]')";

if (mysqli_query($link, $query))
	echo "<script language='JavaScript'>alert('El torneo se agrego correctamente');</script>";
else echo "<script language='JavaScript'>alert('El torneo no se agrego correctamente');</script>";
mysqli_close($link);
}
?>