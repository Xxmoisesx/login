<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="whitd=device-width,initial-scale=1">
	<title>inicio</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body id="binicio">
<div id="ini">
<?php 
session_start();
echo "Hola bienvenido-".$_SESSION['apodo'];
echo "<br><a href='destruir.php'>Cerrar sesion</a>";
 ?>
 </div>
 <img id="g" src="gif.gif">
 </body>
</html>