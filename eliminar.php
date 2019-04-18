<?php

include("conexion.php");

$Id = $_REQUEST['Id'];

$query = "DELETE FROM bd_carros WHERE Id='$Id'";
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: mostrar.php");
	
}
else {
	echo "No, se inserto";
}