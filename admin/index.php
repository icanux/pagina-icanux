<?php require_once ('../conexion.php');

$menuadmin = 'admin';

if (!isset($_SESSION['iduser']) || rango($_SESSION['iduser']) != 10) {header('location:'.$dato[0]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Admin</title>
 <link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
 <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/style.css">

 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include '../inc/header.php';?>

<?php include '../inc/menu.php';?>
<div class="contenedor fondo-blanco relleno-8 borde-negro" style="min-height: 600px;">
    <div class="fila">



    <div class="columna columna-m-3 columna-g-3">

<?php include ('sidebar.php');?>
</div>
      <div class="columna columna-m-9 columna-g-9">
        <h1>Admin</h1>


        </div>


    </div>
  </div>
</div>


<?php include '../inc/footer.php';?>

</body>
<script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
</body>
</html>

