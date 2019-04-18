<!DOCTYPE html>
<html long="es">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="stylesheet.css">
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src='scriptPrincipal.js'></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="reset.css">
		
		<link rel="stylesheet" href="main.css">
		<title>Formulario</title>
	</head>
	<body>

		<div class="container">
		<div class="form__top">
			<h2><span>Registro</span></h2>
		</div>		
		<form action="registrar.php" class="form-registrer"  method="POST" onsubmit="return validar();">
			<input class="input" type="text" id="Nombre" name="Nombre" placeholder="&#128100;  Nombre" required>
            <input class="input" type="email" id="Email" name="Email" placeholder="&#9993;  Email" required>
            <input class="input" type="text" id="Telefono" name="Telefono" placeholder="&#128222;  Telefono" required>
            <input class="input" type="text" id="Usuario" name="Usuario" placeholder="&#8962;  Usuario" required>
            <input class="input" type="password" id="Clave" name="Clave" placeholder="&#338222;  Clave" required>
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">


            	<a href="prueba-inicio.php" class="btn__reset" type="reset">Regresar</a>	


            	<a href="iniciarSesion.php" class="btn__submit" type="submit">INISIAR SESION</a>	
            </div>
		</form>
	</div>
	</body>
</html>