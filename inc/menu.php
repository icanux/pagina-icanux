<nav class="menu menu-negro">

	<div class="contenedor">


		<div class="menu-boton menu-boton-negro" id="menu1"  style="background-color: orangered;"></div>
		<div class="menu-lista" id="menu1">
			<ul>
				<li <?php if ($menu == 'index') {echo 'class="menu-activo"';
}

?>>
			<a href="">home</a></li>



				<li <?php if ($menu == 'noticias') {echo 'class="menu-activo"';
}

?>>
		<a href="noticias">noticias</a></li>



<?php if (isset($_SESSION['iduser'])) {?>
						<li <?php if ($menu == 'acuerdos') {echo 'class="menu-activo"';
	}

	?>>
					<a href="acuerdos">acuerdos internos</a></li>

	<?php }?>


<?php if (isset($_SESSION['iduser'])) {?>
					<li <?php if ($menu == 'usuarios') {echo 'class="menu-activo"';
	}

	?>><a href="usuarios">usuarios</a></li>
	<?php }?>

<?php if (isset($_SESSION['iduser'])) {?>
				<li <?php if ($menu == 'agregar') {echo 'class="menu-activo"';
	}

	?>><a href="agregar">Agregar</a></li>
	<?php }?>
<?php if (isset($_SESSION['iduser'])) {?>
				<li <?php if ($menu == 'posts') {echo 'class="menu-activo"';
	}

	?>><a href="posts">todos los posts</a></li>
	<?php }?>


<?php if (isset($_SESSION['iduser']) && rango($_SESSION['iduser']) == 10) {?>
				<li <?php if ($menuadmin == 'admin') {echo 'class="menu-activo"';
	}

	?>><a href="admin">Admin</a></li>
	<?php }?>

</ul>
</div>

</div>
</nav>
