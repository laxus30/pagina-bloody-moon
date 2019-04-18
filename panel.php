<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['Usuario'];

if ($varsesion == null || $varsesion = '') {
	echo 'Usted no tiene autorizacion';
	die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charse="UtF-8">
	<title>Document</title>
</head>
<body>
<h1>Panel de administracion</h1>
<h2>Bienvenido: <?php echo $_SESSION['Usuario'] ?> </h2>
<a href="prueba-inicio.html">Cerrar Sesion</a>
</body>
</html>

