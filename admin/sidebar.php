<div class="categorias">
	<h3>Opciones</h3>
	<ul>
		<li <?php if ($menuadmin == 'admin') {echo 'class="menu-activo-admin"';
}


?>  ><a href="<?php echo $dato[0];?>admin/" class="a-admin">Administración</a></li>
	<li  <?php if ($menuadmin == 'datos') {echo 'class="menu-activo-admin"';
}
?> ><a href="datos.php" class="a-admin">Datos web</a></li>
<li  <?php if ($menuadmin == 'posts') {echo 'class="menu-activo-admin"';
}
?> ><a href="posts.php" class="a-admin">Lista posts</a></li>
<li  <?php if ($menuadmin == 'usuarios') {echo 'class="menu-activo-admin"';
}
?>><a href="usuarios.php" class="a-admin">Lista usuarios</a></li>
<li  <?php if ($menuadmin == 'logo') {echo 'class="menu-activo-admin"';
}
?>><a href="logo.php" class="a-admin">cambiar logo</a></li>
</ul>
</div>
