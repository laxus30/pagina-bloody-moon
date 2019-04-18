<?php
include("cn.php");

$Nombre=$_POST["Nombre"];
$Email=$_POST["Email"];
$Telefono=$_POST["Telefono"];
$Usuario=$_POST["Usuario"];
$Clave=$_POST["Clave"];

$insertar = "INSERT INTO tb_reg(Nombre, Email, Telefono, Usuario, Clave) VALUES ('$Nombre','$Email','$Telefono','$Usuario','$Clave')";

$verificar_Usuario = mysqli_query($conexion, "SELECT * FROM tb_reg WHERE Usuario = '$Usuario'");
if (mysqli_num_rows($verificar_Usuario) > 0) {
	echo '<script>
	alert("El usuario ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;

}
$verificar_Email = mysqli_query($conexion, "SELECT * FROM tb_reg WHERE Email = '$Email'");
if (mysqli_num_rows($verificar_Email) > 0) {
	echo '<script>
	alert("El correo ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
} else {
	echo 'Usuario registrado correctamente';
}
header("Location:index.php");
mysqli_close($conexion);
?>