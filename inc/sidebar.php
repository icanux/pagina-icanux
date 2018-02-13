<h1>Sidebar</h1>

<form class="buscador" method="get" action="<?php echo $dato[0];?>resultados">
	<input type="text" class="buscador-campo" placeholder="Buscar.." name="buscar">
	<input type="submit" class="buscador-boton" value="">
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


<?php if ($dato[5] != '') {?>
	<div class="margen-arriba">

		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
	<?php }?>