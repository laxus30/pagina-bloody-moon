<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['Usuario'];
if ($varsesion == null || $varsesion = '') {
echo 'Usted no tiene autorizacion';
die();
}
session_destroy();
header("Location:prueba-inicio.php")

					