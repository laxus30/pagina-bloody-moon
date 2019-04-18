<?php

include("conexion.php");

$Id = $_REQUEST['Id'];

$Productos = addslashes(file_get_contents($_FILES['Productos']['tmp_name']));
$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];

$query = "UPDATE bd_carros SET Nombre='$Nombre', Productos='$Productos', Precio='$Precio' WHeRE Id='$Id'";
$resultado = $conexion->query($query);

if ($resultado) {

	header("Location: mostrar.php");
}
else {
	echo "No, se inserto";
}