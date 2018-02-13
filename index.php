  <?php require_once ('conexion.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $dato[2];?></title>
  <link rel="shorcut icon" type="image/x-icon" href="<?php echo $dato[0];?>img/HELMI1.ico">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $dato[0];?>css/style.css">

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="<?php echo strip_tags($dato[5]);?>">
  <meta name="robots" content="index, follow">
</head>
<body>

<?php include 'inc/header.php';?>

<?php include 'inc/menu.php';?>
<div class="cabecera" id="f-i"  style="">
  <div class="contenedor" style="padding: 20px;">


    <form  class="form">
          <div style="justify-content: center;display: flex;">
           <div class="icon-ii">
           <img src="img/LOGO-ICANUX.png" style="width: 250px;"></div>
          </div>
<br>
     <div>
<div class="" style="justify-content: center;display: flex;">
<div class="cont" style="width: 50%;text-align: center;">
  La Comunidad de Software Libre Icanux es una comunidad formada inicialmente por estudiantes de Facultad de Sistemas de la Universidad Nacional "San Luis Gonzaga" de Ica, pero abierta a toda la comunidad iqueña interesada en proyectos FOSS.
</div>
</div>


</div>
<br><br>
    </form>


  <div class="fila" style="color: silver;margin-top: 50px;text-align: center;" >




    <div class="columna columna-m-4 columna-g-4">
    <div class="centrar" style="justify-content: center;">



     <div class="icon-i"> <i class="fa fa-laptop" aria-hidden="true" id="icono"></i></div>

    </div>
    <div class="title">
      Mision
    </div>
    <br>
     Promover el Software Libre y soberanía tecnológica
    </div>
    <div class="columna columna-m-4 columna-g-4">
    <div class="centrar" style="justify-content: center;">
      <div class="icon-i"><i class="fa fa-rocket" aria-hidden="true" id="icono"></i></div>
    </div>
    <div class="title">
      Visión
    </div>
    <br>
   Tener conocimientos avanzados sobre tecnologías libres y poder realizar aportes
    </div>
    <div class="columna columna-m-4 columna-g-4">
    <div class="centrar" style="justify-content: center;">
      <div class="icon-i"><i class="fa fa-heart" aria-hidden="true" id="icono"></i></div>
    </div>
    <div class="title">
      Objetivos
    </div>
    <br>
    LapresentepropuestabuscacomoprincipalobjetivoelcambiodeimageninstitucionalsisepuededecirdelacomunidaddesoftwarelibreICANUX.Semostraranacontinuaciónunaseriedeimágenesconceptualesdeloqueseplaneaseaconsideradocomopropuesta
    </div>
  </div>
 <br><br><br><br>

  </div>
</div>
<div class="contenedor fondo-blanco relleno-8 borde-negro">
      <div class="fila">
          <div class="columna columna-m-9 columna-g-9">

<h2>¿Qué es el software libre?</h2>

<blockquote ><p>
¿Tiene alguna pregunta acerca de las licencias de software libre que no esté
respondida aquí? Consulte nuestra otra <a
href="http://www.fsf.org/licensing">información sobre licencias</a>, y si es
necesario contacte con el Compliance Lab de la FSF en <a
href="mailto:licensing@fsf.org">licensing@fsf.org</a>.</p>
</blockquote>

<h3>Definición de software libre</h3>

<blockquote>
<p>
La definición de software libre estipula los criterios que se tienen que
cumplir para que un programa sea considerado libre. De vez en cuando
modificamos esta definición para clarificarla o para resolver problemas
sobre cuestiones delicadas. Más abajo en esta página, en la sección <a
href="#History">Historial</a>, se puede consultar la lista de modificaciones
que afectan la definición de software libre.
</p>
</blockquote>

<p>
«Software libre» es el software que respeta la libertad de los usuarios y la
comunidad. A grandes rasgos, significa que <b>los usuarios tienen la
libertad de ejecutar, copiar, distribuir, estudiar, modificar y mejorar el
software</b>. Es decir, el «software libre» es una cuestión de libertad, no
de precio. Para entender el concepto, piense en «libre» como en «libre
expresión», no como en «barra libre». En inglés, a veces en lugar de «free
software» decimos «libre software», empleando ese adjetivo francés o
español, derivado de «libertad», para mostrar que no queremos decir que el
software es gratuito.
</p>

<p>
Promovemos estas libertades porque todos merecen tenerlas. Con estas
libertades, los usuarios (tanto individualmente como en forma colectiva)
controlan el programa y lo que este hace. Cuando los usuarios no controlan
el programa, decimos que dicho programa «no es libre», o que es
«privativo».  Un programa que no es libre controla a los usuarios, y el
programador controla el programa, con lo cual el programa resulta ser <a
href="/philosophy/free-software-even-more-important.html">un instrumento de
poder injusto</a>.
</p>

<h4> Las cuatro libertades esenciales</h4>

<p>
Un programa es software libre si los usuarios tienen las cuatro libertades
esenciales:
</p>

<ul>
  <li>La libertad de ejecutar el programa como se desea, con cualquier propósito
(libertad 0).</li>
  <li>La libertad de estudiar cómo funciona el programa, y cambiarlo para que haga
lo que usted quiera (libertad 1). El acceso al código fuente es una
condición necesaria para ello.
  </li>
  <li>La libertad de redistribuir copias para ayudar a su prójimo (libertad 2).
  </li>
  <li>La libertad de distribuir copias de sus versiones modificadas a terceros
(libertad 3). Esto le permite ofrecer a toda la comunidad la oportunidad de
beneficiarse de las modificaciones. El acceso al código fuente es una
condición necesaria para ello.
  </li>
</ul>

<p>
Un programa es software libre si otorga a los usuarios todas estas
libertades de manera adecuada. De lo contrario no es libre. Existen diversos
esquemas de distribución que no son libres, y si bien podemos distinguirlos
en base a cuánto les falta para llegar a ser libres, nosotros los
consideramos contrarios a la ética a todos por igual.</p>

<p>En cualquier circunstancia, estas libertades deben aplicarse a todo código
que pensemos utilizar hacer que otros utilicen. Tomemos por ejemplo un
programa A que automáticamente ejecuta un programa B para que realice alguna
tarea. Si se tiene la intención de distribuir A tal cual, esto implica que
los usuarios necesitarán B, de modo que es necesario considerar si tanto A
como B son libres. No obstante, si se piensa modificar A para que no haga
uso de B, solo A debe ser libre; B no es relevante en este caso. </p>

<p>
«Software libre» no significa que «no es comercial». Un programa libre debe
estar disponible para el uso comercial, la programación comercial y la
distribución comercial. La programación comercial de software libre ya no es
inusual; el software libre comercial es muy importante. Puede haber pagado
dinero para obtener copias de software libre, o puede haber obtenido copias
sin costo. Pero sin tener en cuenta cómo obtuvo sus copias, siempre tiene la
libertad de copiar y modificar el software, incluso de <a
href="/philosophy/selling.html">vender copias</a>.
</p>

<p>En el resto de esta página tratamos algunos puntos que aclaran qué es lo que
hace que las libertades específicas sean adecuadas o no.</p>


          </div>

          <div class="columna columna-m-3 columna-g-3">
              <img id="miimage" src="<?php echo $dato[0];?>img/HELMI2.png">
              <br>
              <img  id="miimage" src="<?php echo $dato[0];?>img/HELMI1.png">
              </div>

          </div>
      </div>
   </div>
<center>
  <div>
<?php include 'inc/footer.php';?>
</div>

  <script type="text/javascript" src="<?php echo $dato[0];?>js/jquery-3.2.1.min.js"></script>

  <script type="text/javascript" src="<?php echo $dato[0];?>js/base.js"></script>
</body>
</html>