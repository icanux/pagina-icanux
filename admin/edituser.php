<?php require_once ('conexion.php');

$menuadmin = 'edituser';

//Validación de rango y valores
if (!isset($_SESSION['iduser']) || rango($_SESSION['iduser']) != 10 || !isset($_GET['iduser'])) {header('Location:'.$dato[0]);
}

$iduser = $_GET['iduser'];

//CONSULTA A LA BASE DE DATOS
$accion_editar = sprintf("SELECT * FROM users WHERE id=%s",
	formatearcadena($iduser, 'int'));

$consulta_editar = mysqli_query($conexion, $accion_editar);
$datos_editar    = mysqli_fetch_assoc($consulta_editar);
$cantidad_editar = mysqli_num_rows($consulta_editar);

if (isset($_POST['rangos'])) {

	//Actualizar datos web
	$accion_editar = sprintf("UPDATE users SET rango=%s WHERE id=%s",
		formatearcadena($_POST['rangos'], 'int'),
		formatearcadena($iduser, 'int'));

	$consulta_editar = mysqli_query($conexion, $accion_editar) or die(mysqli_error());

	header('Location:'.$dato[0].'admin/usuarios.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>editar</title>
  <link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/style.css">
  <script type="text/javascript" src="<?php echo $dato[0];?>ckeditor/ckeditor.js" ></script>


  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">


<?php include ('../inc/header.php');?>

<?php include ('../inc/menu.php');?>
<div class="contenedor fondo-blanco relleno-8 borde-gris" style="min-height: 600px">



  <div class="fila">


<div class="columna columna-m-3 columna-g-3">
<?php include ('sidebar.php');?>

  </div>


  <div class="columna columna-m-9 columna-g-9">
    <h1>Editar  rango de <?php echo $datos_editar['user'];?></h1>



    <form action="" method="post" onsubmit="return validar_editaruser(rangos.value);" class="formulario" id="formAgregar" style="max-width: 600px">


      <div class="formulario-grupo">
        <label for="rangos">Rango user:</label>
        <select name="rangos" id="rangos">
          <option value="">Seleccionar rango</option>
          <option value="0"  <?php if ($datos_editar['rango'] == 0) {echo 'selected';
}
?>  >Baneado</option>
          <option value="1"  <?php if ($datos_editar['rango'] == 1) {echo 'selected';
}
?>  >usuario normal</option>
          <option value="10"  <?php if ($datos_editar['rango'] == 10) {echo 'selected';
}
?>>Administrador</option>
        </select>

      </div>



      <div class="formulario-grupo oculto" id="editaruser-error">
        <div class="alerta alerta-rojo alerta-pequenia" id="editaruser-mensaje">Error</div>
      </div>


      <div class="formulario-grupo">
        <input type="submit" value="Editar" class="boton boton-agregar derecha">
      </div>





    </form>



  </div>



  </div>




  </div>



<?php include ('../inc/footer.php');?>





  <script src="<?php echo $dato[0];?>js/base.js"></script>
  <script src="<?php echo $dato[0];?>js/efectos.js"></script>
</body>
</html>
<?php mysqli_free_result($consulta_editar);?>
