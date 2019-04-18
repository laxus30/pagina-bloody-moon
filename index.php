<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">
	<link rel="stylesheet" href="css/camera.css">

	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src='js/camera.js'></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/script.js"></script>
	<script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>

	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	</head>
<body class="index">
<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<div class="social">
						<a href="#"><span  class="bd-ra fa fa-facebook"></span></a>
						<a href="#"><span class="bd-ra fa fa-tumblr"></span></a>
						<a href="#"><span class="bd-ra fa fa-google-plus"></span></a>
						<a href="prueba-inicio.php"><span class="bd-ra fa fa-lock"></span></a>
							</div>
					<h1 ><a>Bienvenido</a></h1>
					<nav>
						<ul class="sf-menu">
							<li class="current"><a href="index.php">Inicio</a></li>
							<li><a href="index-1.php">Diversidad y cultura </a></li>
							<li><a href="index-2.php">Productos</a></li>
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
		<div class="camera_container">
			<div id="camera_wrap">
				<div class="item" data-src="images/vid.jpg">
					<div class="camera_caption fadeIn">
						<h3>Hacemos juegos para gamers</h3>
					</div>
				</div>
				<div class="item" data-src="images/vid.jpg">
					<div class="camera_caption fadeIn">
						<h3>vive soñando</h3>
					</div>
				</div>
				<div class="item" data-src="images/vid.jpg">
					<div class="camera_caption fadeIn">
						<h3>imagina y crea</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-3">
		<div class="container">
			<div class="row">
				<div class="grid_4">
					<p class="first">Bloody Moon fue fundada en 2019 por Montan Salguero Daniel Enrique con la intención de cambiar la forma en que los videojuegos son creados y apoyados para los jugadores. En 2019, Bloody lanzó su primer título, forest of monsters, a nivel mundial. Desde entonces,</p>
					<p class="secont">el juego se ha convertido en el juego de PC más jugado del mundo y un impulsor clave del crecimiento explosivo de los deportes electrónicos. Los jugadores<br> son la base de nuestra comunidad y es para ellos que continuamos evolucionando y mejorando la experiencia de forest of monsters. Bloody Moon tiene su sede en Los Ángeles, California, y cuenta con 23 oficinas en todo el mundo.</p>
					
				</div>
		<div class="grid_7 offset_1">
					<header>
						<h2>Nuestros valores</h2>
					</header>
					<div class="img_block"><img src="images/index_img-7.jpg" alt=""></div>
					<p>Nuestros valores son nuestra estrella del norte; La guía de quiénes queremos ser. Son lo que buscamos para obtener ayuda cuando no alcanzamos nuestros objetivos, y la lente que usamos para evaluar cada decisión que tomamos.

					
					<div class="container">
		<form class="myForm">
				En 2012 escribimos nuestro manifiesto: una declaración de quién creíamos que éramos como una empresa joven todavía al comienzo de su viaje. Nos sirvió bien durante muchos años, pero no evolucionó junto con nosotros. Hoy, necesitamos valores que representen lo que queremos ser para nuestro próximo capítulo.
					 <br><br>
					Co-creamos nuestros valores con más de 1,700 seguidores en todo el mundo, preguntándoles quiénes debemos ser para cumplir nuestra promesa a los jugadores. Para hacer realidad estos valores, prometemos institucionalizar estos valores a lo largo de nuestra empresa, para que se conviertan en parte de la realidad diaria de cada Rioter:
					<br><br>
					• Invertiremos continuamente en el cultivo de un entorno en el que todos y cada uno de los seguidores puedan prosperar y alcanzar su máximo rendimiento. 
					<br><br>
					• Nos esforzaremos por procesos justos y equitativos en los que los seguidores puedan confiar. 
					<br><br>
					• Nuestros líderes vivirán los valores y los promoverán activamente dentro de sus equipos.
					<br><br>
					Nuestra ambición es que Bloody Moon sea el mejor lugar para trabajar para todos aquellos que sienten pasión por nuestra misión.</p>
		</form>
		<button id="myButton" class="btn" onclick="ShowHideElement()">Mas</button>
	</div>

	<script type="text/javascript">
		$(".myForm").hide();

		function ShowHideElement(){
			let text ="";

			if ($("#myButton").text()=== "Mas") {
				$(".myForm").show();
				text="Ocultar";
			}else{
				$(".myForm").hide();
				text="Mas";
			}
			$("#myButton").html(text);
		}
	</script>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
		<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<style type="text/css">
							span{
								color:#494646;
							}
						</style>
						<h2><span>Nuestro material</span></h2>
					</header>
					<div class="isotope clearfix">
						<a href="images/portada.png" class="item-1 w-1"><div class="img_block"><img src="images/portada.png" alt="img"></div><i>+</i></a>
						<a href="images/portada1.png" class="item-2 w-2"><div class="img_block"><img src="images/portada1.png" alt="img"></div><i>+</i></a>
						<a href="images/portada2.png" class="item-3 w-1"><div class="img_block"><img src="images/portada2.png" alt="img"></div><i>+</i></a>
						<a href="images/qw.png" class="item-4 w-2"><div class="img_block"><img src="images/qw.png" alt="img"></div><i>+</i></a>
						<a href="images/qw2.png" class="item-5 w-1"><div class="img_block"><img src="images/qw2.png" alt="img"></div><i>+</i></a>
						<a href="images/Idle (1).png" class="item-6 w-1"><div class="img_block"><img src="images/Idle (1).png" alt="img"></div><i>+</i></a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-4  parallax-block" data-stellar-background-ratio="0.5">
		<span class="el-1">nuestros mejores</span>
		<span class="el-2">projectos</span>
	
	</div>
	<div class="full-width-container block-5">
		<div class="container">
			<div class="row">
				<div class="item-1 clearfix">
					<div class="grid_2">
						<div class="img_block"><img src="images/index_img-8.jpg" alt=""></div>
					</div>
					<div class="grid_10">
						<div class="text">
						¿Cómo te convertiste en un artista de juegos?
						<br><br>
						Mi primer trabajo fue hacer ilustraciones en 3D para videojuegos y arte de cajas de juguetes, campañas publicitarias, pósters y demás. Pero los juegos siempre fueron mi pasión, y sabía que ahí era donde quería terminar.
						<br><br>
						Dejé ese trabajo para concentrarme a tiempo completo en la creación de personajes 3D estilizados, asegurándome de cargar cada pieza en mi portafolio en línea y en las redes sociales. Un reclutador de Blizzard se contactó conmigo después de ver mi trabajo en Polycount, comentó que se parecía a los modelos pintados a mano de World of Warcraft y mostró el equipo de arte. Quedaron impresionados y, después de entrevistarme durante unos meses, comencé mi primer día en Blizzard.
						<br><br>
						En mi tiempo libre hice modelos de League y los publiqué en comunidades artísticas en línea. Publiqué un modelo Marauder Soraka en  mi ArtStation  porque es mi campeona favorita y me encanta el estilo agresivo de esa línea de piel. Un Rioter, con quien ahora trabajo, lo vio en Twitter y me envió un mensaje sobre cómo mostrárselo al equipo de arte.
						<br><br>
						Estoy muy contento de haber podido obtener ambos trabajos después de publicar mi trabajo en línea. Me hizo darme cuenta de lo importante que es esto y el marketing para penetrar en la industria.

					</div>
					</div>
				</div>
				<div class="item-2 clearfix">
					<div class="grid_10">
						<div class="text">QUIEN: Bill Barteldes
										<br><br>
										¿Por qué perseguiste una carrera en videojuegos?
										<br><br>
										Siempre me han gustado los juegos, algunos de mis primeros recuerdos son al ver a mis padres jugar juegos de aventura en nuestra Apple II. Nunca pensé que podría ser lo que hago profesionalmente. Siempre he tratado de mantenerme cerca de las cosas que me apasionan, que afortunadamente me llevaron a Riot.</div>
					</div>
					<div class="grid_2">
						<div class="img_block"><img src="images/index_img-9.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-6">
		<div class="google-map-api"> 
			<div id="map-canvas" class="gmap"></div> 
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
				<!--{%FOOTER_LINK} -->
		</div>
	</div>
	<div class="footer_bottom"><a href="http://www.templatemonster.com/" rel="nofollow"><img src="images/footer-logo.png" alt="logo"></a></div>
</footer>
<script>
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			height: '68.125%',
			thumbnails: false,
			pagination: true,
			fx: 'simpleFade',
			loader: 'none',
			hover: false,
			navigation: false,
			playPause: false,
			minHeight: "975px",
		});
	});
</script>
<script>
	$(document).ready(function() { 
			if ($('html').hasClass('desktop')) {
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 20,
					resposive: true,
					hideDistantElements: true,
				});
			}
		});
</script>
<script type="text/javascript">
		google_api_map_init();
		function google_api_map_init(){
			var map;
			var coordData = new google.maps.LatLng(parseFloat(40.6894388), parseFloat(-73.9036233,10)); 

			var styleArray = [
				{"featureType":"water","stylers":[{"color":"#021019"}]},
				{"featureType":"landscape","stylers":[{"color":"#08304b"}]},
				{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},
				{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},
				{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},
				{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},
				{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},
				{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},
				{"featureType":"transit","stylers":[{"color":"#146474"}]},
				{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}
				]
			 
			function initialize() { 
			  var mapOptions = { 
				zoom: 12, 
				center: coordData, 
				scrollwheel: false, 
				styles: styleArray 
			  } 
 
			  var contentString = "<div></div>"; 
			  var infowindow = new google.maps.InfoWindow({ 
				content: contentString, 
				maxWidth: 200 
			  }); 
			   
			  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions); 


			google.maps.event.addDomListener(window, 'resize', function() {

			  map.setCenter(coordData);

			  var center = map.getCenter();
			});
		}

			google.maps.event.addDomListener(window, "load", initialize); 

		}
</script>
<script>
	$(function(){
		$('.isotope a').touchTouch();
	});
</script>

</body>
</html>