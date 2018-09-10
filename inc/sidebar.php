<br><br>
<!--
<form class="buscador" method="get" action="<?php echo $dato[0];?>resultados">
	<input type="text" class="buscador-campo" placeholder="Buscar.." name="buscar">
	<input type="submit" class="button" value="">
</form>



<div class="margen-arriba">
	<div class="categorias">
  <h3>Categorias</h3>
  <ul>


    <li  ><a href="">noticias</a></li>
    <li  ><a href="">acuerdos</a></li>


  </ul>
</div>
</div>
-->

<h1>
	<center>
		Redes sociales
	</center>
	
</h1>
<?php if ($dato[5] != '') {?>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/icanux" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/icanux" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/icanux">ICANUX</a></blockquote></div>
	<?php }?>