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
    <link rel="stylesheet" type="text/css" href="css/base.css">
  	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/my-style.css">



  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro" id="f-i" >
<?php include 'inc/header.php';?>

<div class="main-content">
      <div class="ed-container">
          <div class="ed-item m-12 l-12">

    <center>



           <form onsubmit="return false" class="formulario" id="formInicio">

                        <div class="formu-iniciar">
                           <h1>Iniciar </h1>
                        </div>

                        <div class="form-team">
                              <label for="user">Usuario o Email:</label>
                              <input type="text" name="user" id="user" placeholder="Usuario , Ejemplo@icanux.com">
                        </div>


                         <div class="form-team">
                              <label for="pass">Contraseña:</label>
                              <input type="password" name="pass" id="pass" placeholder="">
                        </div>
                        <div class="form-team oculto" id="login-error">
                          <div class="alerta alerta-rojo alerta-pequenia" id="login-mensaje"> Error</div>
                        </div>

                        <div class="form-team">
                          <br>
                          <div class="recordarme">
                            <input type="checkbox" name="recordar" id="recordar"><label for="recordar">Recordar contraseña</label>

                          </div>

                        </div>
                        <br>
                        <div class="form-team">
                            <input type="submit"  class="button button-enviar" value="Ingresar" onclick="login(user.value , pass.value);">
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
  <script type="text/javascript" src="js/ed-grid.js"></script>

</body>
</html>