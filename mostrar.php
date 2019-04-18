<?php
include "cn.php";
  // Se prendio esta mrd :v
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Productos</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<meta name="description" content="Bootstrap HTML5">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">

	<script src="js/jquery.js"></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/packery.pkgd.min.js"></script>
 
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
		</head>

<body class="index-2">
<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<div class="social">

						<a href="prueba-inicio.php"><span class="bd-ra fa fa-lock"></span></a>
					</div>
					<h1><a href="#">Productos</a></h1>
					<nav>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>ADMINISTRADOR PRODUCTOS</span></h2>

						<center>
		<table border="2">
			<thead>
				<tr>
					<th colspan="6"><a href="indexad.php">Nuevo</a></th>
				</tr>
				<tr>
					<th>Id--</th>
					<th>Productos--</th>
					<th>Nombre--</th>
					<th>Precio--</th>
					<th colspan="2">Operaciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include("conexion.php");

				$query = "SELECT * FROM bd_carros";
				$resultado = $conexion->query($query);
				while($row = $resultado->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['Id']; ?></td>
						<td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['Productos']); ?>"/></td>
						<td><?php echo $row['Nombre']; ?></td>
						<td><?php echo $row['Precio']; ?></td>
						<th><a href="modificar.php?Id=<?php echo $row['Id'];?>">Modificar</a></th>
						<th><a href="eliminar.php?Id=<?php echo $row['Id'];?>">Eliminar</a></th>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</center>
</header>
</div>
</div>
</div>
</div>
</section>
</body>
</html>

