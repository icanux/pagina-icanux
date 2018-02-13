<?php require_once ('../conexion.php');

//Validar tcomentario
if (!isset($_SESSION['iduser']) || !isset($_POST['mensaje']) || $_POST['mensaje'] == '') {error_log('jorge-borracho');exit;
}

//insertar coment mensaje, iduser, idpost

$accion_adduser = sprintf("INSERT INTO coments (autor, post, coment) VALUES (%s, %s, %s)",
	formatearcadena($_SESSION['iduser'], 'int'),
	formatearcadena($_SESSION['idpost'], 'int'),
	formatearcadena($_POST['mensaje'], 'text'));

$consulta_adduser = mysqli_query($conexion, $accion_adduser) or die(mysqli_error());

?>
<div class="fila">
	<div class="columna columna-m-2 columna-g-2">
<?php echo nombre($_SESSION['iduser']);?>
</div>

	<div class="columna columna-m-10 columna-g-10">
<?php echo $_POST['mensaje'];?>
	</div>


</div>