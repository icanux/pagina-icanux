<div class="categorias">
	<h3 style="background-color: black; color: white;">Opciones</h3>
	<ul>
		<li <?php if ($menuadmin == 'admin') {echo 'class="menu-activo-admin"';
}

?>  ><a href="<?php echo $dato[0];?>admin/">Administración</a></li>
	<li  <?php if ($menuadmin == 'datos') {echo 'class="menu-activo-admin"';
}
?> ><a href="datos.php">Datos web</a></li>
<li  <?php if ($menuadmin == 'posts') {echo 'class="menu-activo-admin"';
}
?> ><a href="posts.php">Lista posts</a></li>
<li  <?php if ($menuadmin == 'usuarios') {echo 'class="menu-activo-admin"';
}
?>><a href="usuarios.php">Lista usuarios</a></li>
<li  <?php if ($menuadmin == 'logo') {echo 'class="menu-activo-admin"';
}
?>><a href="logo.php">cambiar logo</a></li>
</ul>
</div>
