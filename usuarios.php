<?php require_once ('conexion.php');

$menu = 'usuarios';
if (!isset($_SESSION['iduser'])) {header('location:'.$dato[0]);
}

//consultar datos del user
$accion_users   = sprintf("SELECT * FROM users ORDER BY id DESC");
$consulta_users = mysqli_query($conexion, $accion_users);
$datos_users    = mysqli_fetch_assoc($consulta_users);
$cantidad_users = mysqli_num_rows($consulta_users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $dato_post['title'];?></title>
  <link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/style.css">

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include 'inc/header.php';?>

<?php include 'inc/menu.php';?>
<div class="contenedor fondo-gris relleno-8 borde-negro" style="max-height: 600px;">
    <div class="fila">
       <h1>Usuarios de la comunidad icanux</h1> <br> <br>
        <br>
      <div class="columna columna-m-9 columna-g-9" style="white-space: pre-line; display: inline-flex;">




<?php while ($datos_users = mysqli_fetch_assoc($consulta_users)) {
	?>                      <div class="fila">
					      <div class="columna columna-m-9 columna-g-9" style="white-space: pre-line; display: inline-flex;">
											             <a href=" <?php echo $dato[0].'perfil/'.$datos_users['id'].'/'.$datos_users['name'];?> ">
											               <img class="imgusuario" id="imgusuario" src="user/avatar/<?php echo $datos_users['avatar'];?>">
	<?php echo $datos_users['name'];
	?></a>
					        </div> </div>
	<?php }?>
</div>

         <div class="columna columna-m-3 columna-g-3">



         </div>

       </div>
     </div>
     <center>
      <div  >
<?php include 'inc/footer.php';?>

        <script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
        <script type="text/javascript" src="<?php echo $dato[0];?>/js/efectos.js"></script>
      </body>
      </html>

<?php mysqli_free_result($consulta_users);