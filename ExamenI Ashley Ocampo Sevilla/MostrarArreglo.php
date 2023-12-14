<html>
	<head>
		<title> Nivel de estrés del dinosaurio </title>
		<meta uft-8>
	</head>
	<body>
		<h3>Nivel de estrés del dinosaurio</h3>
		<?php
		function cal() {
			  try {
				var a = document.getElementByname("genero1").value ,
					b = document.getElementByname("alimentacion1").value,
					c = document.getElementByname("tipo1").value;
				 var suma1 = parseInt(a) + parseInt(b) + parseInt(c);
				 document.writeln(suma1);
			  } catch (e) {
			  }
			}
		function cal1() {
			  try {
				var a = document.getElementByname("genero1").value ,
					b = document.getElementByname("alimentacion1").value,
					c = document.getElementByname("tipo2").value;
				 var suma2 = parseInt(a) + parseInt(b) + parseInt(c);
				 document.writeln(suma2);
			  } catch (e) {
			  }
			}
		function cal2() {
			  try {
				var a = document.getElementByname("genero1").value ,
					b = document.getElementByname("alimentacion1").value,
					c = document.getElementByname("tipo3").value;
				 var suma3 =parseInt(a) + parseInt(b) + parseInt(c);
				 document.writeln(suma3);
			  } catch (e) {
			  }
			}
		function cal3() {
			  try {
				var a = document.getElementByname("genero").value ,
					b = document.getElementByname("alimentacion").value,
					c = document.getElementByname("tipo1").value;
				 var suma4 = parseInt(a) + parseInt(b) + parseInt(c);
				 document.writeln(suma4);
			  } catch (e) {
			  }
			}
		function cal() {
			  try {
				var a = document.getElementByname("genero").value ,
					b = document.getElementByname("alimentacion").value,
					c = document.getElementByname("tipo2").value;
				 var suma5 = parseInt(a) + parseInt(b) + parseInt(c);
				 document.writeln(suma5);
			  } catch (e) {
			  }
			}
		function cal() {
			  try {
				var a = document.getElementByname("genero").value ,
					b = document.getElementByname("alimentacion").value,
					c = document.getElementByname("tipo3").value;
				 var suma6 = parseInt(a) + parseInt(b) + parseInt(c);
				 document.writeln(suma6);
			  } catch (e) {
			  }
			}
			
		
		
		//comentarios en PHP
		echo $_REQUEST ['fecha'] . "<br/>";
		echo $_REQUEST ['dinosaurio'] . "<br/>";
		echo $_REQUEST ['alimentacion'] . "<br/>";
		if (isset($_REQUEST ['tipo1'])) {
				echo $_REQUEST ['tipo1'] . "<br/>";
			}
			if (isset($_REQUEST ['tipo2'])) {
				echo $_REQUEST ['tipo2'] . "<br/>";
			}
			if (isset($_REQUEST ['tipo3'])) {
				echo $_REQUEST ['tipo3'] . "<br/>";
			}
	
	

		
	?>
	
	</body>
	
</html>