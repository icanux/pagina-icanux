<?php require_once ('conexion.php');

$menu = 'registro';

if (isset($_SESSION['iduser'])) {header('location:'.$dato[0]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
  <link rel="shorcut icon" type="image/x-icon" href="img/HELMI1.ico">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">


  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include 'inc/header.php';?>

<?php include 'inc/menu.php';?>
<div class="contenedor fondo-gris" style="min-height: 600px;">
      <div class="fila">
          <div class="columna columna-m-12 columna-g-12">

    <center>
           <h1>FORMULARIO DE REGISTRO </h1>


           <form onsubmit="return false" class="formulario" id="formRegistro" style="max-width: 400px;">

                        <div class="formulario-grupo">
                              <label for="nam">Nombre:</label>
                              <input  type="text" name="nam" id="nam" placeholder="Nombre...">
                        </div>
                        <div class="formulario-grupo">
                              <label for="ap">Apellidos:</label>
                              <input type="text" name="ap" id="ap" placeholder="Apellidos...">
                        </div>

                        <div class="formulario-grupo">
                              <label for="user">Usuario:</label>
                              <input type="text" name="user" id="user" class="nombre" placeholder="Nombre de usuario..." style="background-color: white;">
                        </div>

                         <div class="formulario-grupo">
                              <label for="correo">Email:</label>
                              <input type="email" name="correo" id="correo" placeholder="Ejemplo@icanux.com">
                        </div>

                         <div class="formulario-grupo">
                              <label for="pass1">Contraseña:</label>
                              <input type="password" name="pass1" id="pass1" placeholder="">
                        </div>

                         <div class="formulario-grupo">
                              <label for="pass2">Repetir contraseña:</label>
                              <input type="password" name="pass2" id="pass2" placeholder="">
                        </div>
                         <div class="formulario-grupo">
                              <label for="num">telefono:</label>
                              <input type="text" name="num" id="num" placeholder="">
                        </div>



                        <div class="formulario-grupo oculto" id="registro-error">
                          <div id="registro-mensaje" class="alerta alerta-rojo alerta-pequenia" >Error</div>
                        </div>

                        <div class="formulario-grupo">
                            <input type="submit"  class="boton boton-agregar derecha" value="registrar" onclick="registro(nam.value, ap.value,user.value,correo.value,pass1.value,pass2.value,num.value);">
                        </div>

                    </form>




</center>


          </div>
      </div>
  </div>


<?php include 'inc/footer.php';?>


  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/base.js"></script>
  <script type="text/javascript" src="js/efectos.js"></script>
</body>
</html>