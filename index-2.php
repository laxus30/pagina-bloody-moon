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
						<a href="#"><span class="bd-ra fa fa-facebook"></span></a>
						<a href="#"><span class="bd-ra fa fa-tumblr"></span></a>
						<a href="#"><span class="bd-ra fa fa-google-plus"></span></a>
						<a href="prueba-inicio.php"><span class="bd-ra fa fa-lock"></span></a>
					</div>
					<h1><a href="index.php">Productos</a></h1>
					<nav>
						<ul class="sf-menu">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="index-1.php">Diversidad y cultura</a></li>
							<li class="current"><a href="index-2.php">Productos</a></li>
							<li><a href="index-3.php">Bloody Moon</a></li>
							<li><a href="index-4.php">Contactanos</a></li>
						</ul>
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
						<h2><span>Nuestros juegos</span></h2>

					</header>
				</div>
	<center>
		<table border="2">
			<thead>
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
					</tr>
					<?php

				}
				?>
			</tbody>
			<a href="#" class="btn btn-default producto" precio="1000" titulo="forest of monsters"role="button" style="color:#000FFF;">
						Comprar</a>
			<a href="#" class="btn btn-default producto" precio="1113" titulo="forest of monsters: Deluxe"role="button" style="color:#000FFF;">
						Comprar</a>
			<a href="#" class="btn btn-default producto" precio="1000" titulo="forest of monsters: survival"role="button" style="color:#000FFF;">
						Comprar</a>
			<a href="#" class="btn btn-default producto" precio="100" titulo="arbol"role="button" style="color:#000FFF;">
						Comprar</a>

		</table>
	</center>

			</div>
		</div>

	</div>
</section>

<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<div class="copyright">
					<pre>© <span id="copyright-year"></span> |  Privacy Policy</pre>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom"><a href="http://www.templatemonster.com/" rel="nofollow"><img src="images/footer-logo.png" alt="logo"></a></div>
</footer>
<script>
	$(function(){
		$('#touch_gallery a').touchTouch();
	});
</script>
<script src="minicart.js"></script>
	<script>
	  // configuración inicial del carrito 
	  paypal.minicart.render({
	  strings:{
	    button:'Pagar'
	   ,buttonAlt: "Total"
	   ,subtotal: 'Total:'
	   ,empty: 'No hay productos en el carrito'
	  }
	  });
	  // Eventos para agregar productos al carrito
	  
	   $('.producto').click(function(e){
	       e.stopPropagation();
		    paypal.minicart.cart.add({
			business: 'Daniel98@gmail.com', // Cuenta paypal para recibir el dinero
			item_name: $(this).attr("titulo"),
			 amount: $(this).attr("precio"),
			 currency_code: 'MXN',
			
			});
	   });
	  
	</script>
</body>
</html>