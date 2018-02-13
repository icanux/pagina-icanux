<?php require_once ('conexion.php');

$menu = 'iniciar';

if (isset($_SESSION['iduser'])) {header('location:'.$dato[0]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar</title>
  <link rel="shorcut icon" type="image/x-icon" href="img/HELMI1.ico">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">


  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro" id="f-i" >
<?php include 'inc/header.php';?>

<?php include 'inc/menu.php';?>
<div class="contenedor fondo-transparente relleno-1" style="min-height: 600px;">
      <div class="fila" style="min-height: 600px;">
          <div class="columna columna-m-12 columna-g-12">

    <center>



           <form onsubmit="return false" class="formulario" id="formInicio" style="max-width: 300px; margin-top: 200px;">

                        <div class="formulario-grupo">
                           <h1>Iniciar </h1>
                        </div>

                        <div class="formulario-grupo">
                              <label for="user">Usuario o Email:</label>
                              <input type="text" name="user" id="user" placeholder="Usuario , Ejemplo@icanux.com">
                        </div>


                         <div class="formulario-grupo">
                              <label for="pass">Contraseña:</label>
                              <input type="password" name="pass" id="pass" placeholder="">
                        </div>
                        <div class="formulario-grupo oculto" id="login-error">
                          <div class="alerta alerta-rojo alerta-pequenia" id="login-mensaje"> Error</div>
                        </div>

                        <div class="formulario-grupo">

                          <div class="recordarme">
                            <input type="checkbox" name="recordar" id="recordar"><label for="recordar">remember password</label>

                          </div>

                        </div>

                        <div class="formulario-grupo">
                            <input type="submit"  class="boton boton-enviar" value="Ingresar" onclick="login(user.value , pass.value);">
                        </div>

                    </form>




</center>


          </div>


      </div>
  </div>

  <div>
<!-- <?php include 'inc/footer.php';?>
</div> -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/efectos.js"></script>
  <script type="text/javascript" src="js/base.js"></script>
</body>
</html>