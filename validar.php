<?php
 session_start();

$Usuario=$_POST["Usuario"];
$Clave=$_POST["Clave"];
$Email=$_POST["Email"];

$_SESSION['Usuario']=$Usuario;
$_SESSION['Clave']=$Clave;
$_SESSION['Email']=$Email;

$conexion = mysqli_connect("localhost", "root", "", "bd_registro");

 $consulta="SELECT * FROM tb_reg WHERE Clave='$Clave' and pasadmin='$Email'";

 $resultado=mysqli_query($conexion,$consulta);

 $filas=mysqli_num_rows($resultado);
 if ($filas > 0) {
 	header("Location: mostrar.php");
 }
 else {
 	 $consulta="SELECT * FROM tb_reg WHERE Clave='$Clave' and Email='$Email'";

 $resultado=mysqli_query($conexion,$consulta);

  $filas=mysqli_num_rows($resultado);
  if ($filas > 0) {
 	header("Location: index.php");
 }
}
 mysqli_free_result($resultado);
 mysqli_close($conexion);
 ?> 