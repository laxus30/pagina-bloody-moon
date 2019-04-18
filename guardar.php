<?php

include("conexion.php");

$Productos = addslashes(file_get_contents($_FILES['Productos']['tmp_name']));
$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];

$query = "INSERT INTO bd_carros(Productos,Nombre,Precio) VALUES ('$Productos', '$Nombre', '$Precio')";
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: mostrar.php");
}
else {
	echo "No, se inserto";
}