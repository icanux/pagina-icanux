<?php require_once ('../conexion.php');

$menu = 'perfil';
if (!isset($_SESSION['iduser'])) {header('location:'.$dato[0]);
}

$iduser = $_SESSION['iduser'];
//consultar datos del user
$accion_perfil   = "SELECT * FROM users WHERE id=$iduser";
$consulta_perfil = mysqli_query($conexion, $accion_perfil);
$datos_perfil    = mysqli_fetch_assoc($consulta_perfil);
$cantidad_perfil = mysqli_num_rows($consulta_perfil);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>perfil  </title>
  <link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
   <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/style.css">

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include '../inc/header.php';?>

<?php include '../inc/menu.php';?>
<div class="contenedor fondo-blanco relleno-8 borde-gris" style="min-height: 600px;">
      <div class="fila">
          <div class="columna columna-m-9 columna-g-9">
            <h1>mi perfil</h1>


            <img id="imgenavatar" src="<?php echo $dato[0];?>user/avatar/<?php echo $datos_perfil['avatar'];?>" alt="<?php echo $datos_perfil['user'];?>">

            <br>
<a onclick="$('#imagenavatar').click();" class="boton  boton-cambiar">cambiar imagen</a>


    <form onsubmit="return false" id="formAvatar" class="oculto" method="POST">
      <input type="file" name="imagenavatar" id="imagenavatar" onchange="subir();">
    </form>
            <br>
            <strong>Nombre: </strong><?php echo $datos_perfil['name'];?>
            <br>
            <strong>Apellidos: </strong><?php echo $datos_perfil['l_name'];?>
             <br>
            <strong>Username: </strong> <?php echo $datos_perfil['user'];?>
             <br>
            <strong>Correo: </strong><?php echo $datos_perfil['email'];?>
            <br>
          <strong>telefono: </strong><?php echo $datos_perfil['num'];?>
          <br>
          <br>
          <a href="editar" class=" boton boton-editar">editar perfil</a>

          </div>

          <div class="columna columna-m-3 columna-g-3">

              <img src="<?php echo $dato[0];?>img/HELMI2.png">
              <img src="<?php echo $dato[0];?>img/HELMI1.png">
              </div>

          </div>
      </div>
  </div>


<?php include 'inc/footer.php';?>

   <script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
  <script type="text/javascript" src="<?php echo $dato[0];?>/js/efectos.js"></script>
</body>
</html>


<?php mysqli_free_result($consulta_perfil);