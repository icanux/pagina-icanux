<?php require_once ('conexion.php');

$menu = 'agregar';

if (!isset($_SESSION['iduser'])) {header('location:'.$dato[0]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>agregar noticias</title>
  <link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/my-style.css">
  <script type="text/javascript" src="<?php echo $dato[0];?>ckeditor/ckeditor.js" ></script>


  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include 'inc/header.php';?>
<div class="contenedor  relleno-8 borde-gris">
    <div class="fila">
      <div class="columna columna-m-12 columna-g-12">

        <center>
         <h1>AGREGAR NOTICIAS </h1>


         <form onsubmit="return false" class="formulario" id="formAgregar" style="max-width: 600px;">

          <div class="form-team">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo">
          </div>


          <div class="form-team">
            <label for="imagen" >Imagen:</label>
            <input class="izquierda" type="file" name="imagen[]" id="imagen" multiple>
          </div>
          <br>
          <div class="form-team">
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria"  class="izquierda">
              <option value="">selecionar categoria</option>
              <option value="1">Noticias</option>
              <option value="2">Acuerdos</option>
            </select>
          </div>
          <div class="form-team">
            <label for="contenido">Contenido:</label>
            <textarea name="contenido" id="contenido" cols="30" rows="10"></textarea>
          </div>
          <div class="form-team oculto" id="agregar-error">
            <div id="agregar-mensaje" class="alerta alerta-rojo alerta-pequenia" >Error</div>
          </div>
          <br>
          <div class="form-team">
            <input type="submit"  class="button button-enviar" value="agregar post" onclick="CKEDITOR.instances.contenido.updateElement();agregar(titulo.value, categoria.value,contenido.value);">
          </div>

        </form>

        <script>

          CKEDITOR.replace( 'contenido',
          {
            height: '300px',
          });
        </script>


      </center>


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