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
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/styles.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/my-style.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body style="background: #171717">
<?php include 'inc/header.php';?>
<div class="main-content">
    <div class="ed-container">
      <h1 class="user-title">Usuarios de la comunidad icanux</h1>
     <div class="ed-item">



       <div class="ed-container">
<?php while ($datos_users = mysqli_fetch_assoc($consulta_users)) {
	?>
	         <div class="ed-item  s-50 m-20 l-20">
	          <a href=" <?php echo $dato[0].'perfil/'.$datos_users['id'].'/'.$datos_users['name'];?> ">
	            <img class="imgusuario" id="imgusuario" src="user/avatar/<?php echo $datos_users['avatar'];?>"> <br>
	<?php echo $datos_users['name'];
	?></a>
	          </div> 	<?php }?>
</div>

      </div>

    </div>
  </div>
<?php include 'inc/footer.php';?>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/ed-grid.js"></script>
  <script type="text/javascript" src="js/efectos.js"></script>
  <script type="text/javascript">
    edgrid.menu('nav','menu');
  </script>
</body>
</html>

<?php mysqli_free_result($consulta_users);