<?php require_once ('../conexion.php');

$menu = 'usuario';

if (!isset($_GET['iduser'])) {header('location:'.$dato[0]);
}

$iduser = $_GET['iduser'];
//consultar datos del user
$accion_usuario = sprintf("SELECT * FROM users WHERE id=$iduser AND name=%s",
	formatearcadena($_GET['nombre'], 'text'));
$consulta_usuario = mysqli_query($conexion, $accion_usuario);
$datos_usuario    = mysqli_fetch_assoc($consulta_usuario);
$cantidad_usuario = mysqli_num_rows($consulta_usuario);

if ($cantidad_usuario == 0) {header('location:'.$dato[0]);
}

if ($datos_usuario['id'] == $_SESSION['iduser']) {header('location:'.$dato[0].'user/perfil')
	?>
																										<!DOCTYPE html>
																										<html lang="en">
																										<head>
																											<meta charset="UTF-8">
																											<title>perfil de <?php echo $datos_usuario['user'];
}
?></title>
  <link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/style.css">


  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include '../inc/header.php';?>

<?php include '../inc/menu.php';?>
<div class="contenedor fondo-gris relleno-8 borde-negro" style="min-height: 600px;">
      <div class="fila">
          <div class="columna columna-m-9 columna-g-9">
            <h1>perfil de <?php echo $datos_usuario['user'];?></h1>


            <img id="imagenusuario" src="<?php echo $dato[0];?>user/avatar/<?php echo $datos_usuario['avatar'];?>" alt="<?php echo $datos_perfil['user'];?>">
            <br>
            <strong>Nombre:</strong><?php echo $datos_usuario['user'];?>
            <br>
            <strong>Apellidos: </strong> <?php echo $datos_usuario['l_name'];?>
             <br>
            <strong>Username: </strong><?php echo $datos_usuario['user'];?>
             <br>
            <strong>Correo: </strong><?php echo $datos_usuario['email'];?>
            <br>
            <strong>telefono : </strong><?php echo $datos_usuario['num'];?>
          </div>

          <div class="columna columna-m-3 columna-g-3">
              LOGO
              <img src="<?php echo $dato[0];?>img/HELMI2.png">
              <img src="<?php echo $dato[0];?>img/HELMI1.png">
              </div>

          </div>
      </div>
  </div>


<?php include 'inc/footer.php';?>

</body>
  <script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>

  <script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
</body>
</html>


<?php mysqli_free_result($consulta_usuario);