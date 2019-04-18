<!DOCTYPE html>
<html long="es">
  <head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src='scriptPrincipal.js'></script>

    <meta name="viewport" content="width=device-width,user-scalable=no ,initial-scale=1.0, maximun-sacale=1, minimun-scale=1">
    <link rel="stylesheet" href="reset.css">
    
    <link rel="stylesheet" href="main.css">
    <title>Formulario</title>
  </head>
  <body>

    <div class="container">
    <div class="form__top">
      <h2><span>Inisiar Sesion</span></h2>
    </div>    
            <form action="validar.php" class="form-reg"  method="POST">
            <input class="input" type="text" id="Usuario" name="Usuario" placeholder="&#128100;  Usuario" required>
            <input class="input" type="password" id="Clave" name="Clave" placeholder="&#9993;  Clave" required>
            <input class="input" type="Email" id="Email" name="Email" placeholder="&#9993;  Email" required>
            <div class="btn__form">
              <a href="registro.php" class="btn__submit" type="submit">REGISTRARSE</a>

              <a href="prueba-inicio.php" class="btn__reset" type="reset">Regresar</a>

              <input class="btn__submit" type="submit" value="INISIAR SESION">
            </div>
    </form>
  </div>
  </body>
</html>