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
  <link rel="shorcut icon" type="image/x-icon" href="img/HELMI1.ico">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="ckeditor/ckeditor.js" ></script>


  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="fondo-oscuro">
<?php include 'inc/header.php';?>

<?php include 'inc/menu.php';?>
<div class="contenedor  relleno-8 borde-gris" style="min-height: 600px;background-color: white;">
      <div class="fila">
          <div class="columna columna-m-12 columna-g-12">

    <center>
           <h1>AGREGAR NOTICIAS </h1>


           <form onsubmit="return false" class="formulario" id="formAgregar" style="max-width: 800px;">

                        <div class="formulario-grupo">
                              <label for="titulo">Titulo:</label>
                              <input type="text" name="titulo" id="titulo" style="background-color: aqua;">
                        </div>


                        <div class="formulario-grupo">
                              <label for="imagen" >Imagen:</label>
                              <input class="izquierda" type="file" name="imagen[]" id="imagen" multiple style="background-color: aqua; color: black;">
                        </div>

                         <div class="formulario-grupo">
                              <label for="categoria">Categoria:</label>
                              <select name="categoria" id="categoria"  class="izquierda" style="max-width: 275px; background-color: aqua;">
                                <option value="">selecionar categoria</option>
                                <option value="1">Noticias</option>
                                <option value="2">Acuerdos</option>
                              </select>
                        </div>
                        <div class="formulario-grupo">
                              <label for="contenido">Contenido:</label>
                             <textarea name="contenido" id="contenido" cols="30" rows="10"></textarea>
                        </div>




                        <div class="formulario-grupo oculto" id="agregar-error">
                          <div id="agregar-mensaje" class="alerta alerta-rojo alerta-pequenia" >Error</div>
                        </div>

                        <div class="formulario-grupo">
                            <input type="submit"  class="boton boton-agregar derecha" value="agregar post" onclick="CKEDITOR.instances.contenido.updateElement();agregar(titulo.value, categoria.value,contenido.value);">
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
  <script type="text/javascript" src="js/base.js"></script>
  <script type="text/javascript" src="js/efectos.js"></script>
</body>
</html>
