<?php 
/*
Template Name: Contacto
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="caja-titulo contacto">
					<h1 class="wow fadeIn">Contacto</h1>
					<p class="wow fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					<div class="gradiente-azul-titulo-index"></div>
				</div>
				<div class="sub-menu">
				<ul>
					<a href="<?php bloginfo('url'); ?>/contacto/"><li>Mesa central</li></a>
					<a href="<?php bloginfo('url'); ?>/facturacion-y-pagos/"><li>Directorio Telefónico Santiago</li></a>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8 contenido-pagina">
	<h1 class="wow fadeInUp">Oficinas</h1>
	<hr class="linea-separadora wow fadeInUp">
	<div class="datos-oficinas row wow fadeInUp">
		<div class="col-md-12 datos">
			<h4>Santiago</h4>
			<p><i class="fa fa-address-card" aria-hidden="true"></i> Ventas:	<i>Massiel Castillo</i></p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> Correo: <a href="mailto:Mcastilloa@ucentral.cl">Mcastilloa@ucentral.cl</a></p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> Teléfono: <a href="tel:22586254">22 58 62 54</a></p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> Mesa Central: <a href="tel:22586242">22 58 62 42</a></p>
			<p><i class="fa fa-map-marker" aria-hidden="true"></i> Lord Cochrane 417, Santiago Centro. Torre D, Cuarto piso</p>
			<p></p>
		</div>
		<div class="col-md-12 mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.921997900988!2d-70.65676778518313!3d-33.45133868077358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c508d7a0a25f%3A0x108453a1930f90da!2sLord+Cochrane+417%2C+Santiago%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1531841508550" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="datos-oficinas row wow fadeInUp">
		<div class="col-md-12 datos">
			<hr class="linea-separadora">
			<h4>Antofagasta</h4>
			<p><i class="fa fa-address-card" aria-hidden="true"></i> Ventas:	<i>Wilder Lazo</i></p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> Correo: <a href="mailto:Wlazog@ucentral.cl">Wlazog@ucentral.cl</a></p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> Teléfono: <a href="tel:552927602">55 29 27 602</a></p>
			<p><i class="fa fa-map-marker" aria-hidden="true"></i> Arturo Pratt 770, Antogafasta</p>
			<p></p>
		</div>
		<div class="col-md-12 mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.7214091747605!2d-70.39753568502049!3d-23.650146084638827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96afd519e053b0c9%3A0xd426457918d86f11!2sArturo+Prat+770%2C+Antofagasta%2C+Regi%C3%B3n+de+Antofagasta!5e0!3m2!1ses-419!2scl!4v1531842145706" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	</div>
	<div class="col-md-4">
		<?php include_once( 'sidebar.php' ); ?>
		<div class="agenda">
			<div class="titulo-noticias wow fadeInUp">
				<h2>Indicadores Económicos</h2>
			</div>
			<hr class="linea-separadora">
			<div class="caja-indicadores wow fadeInUp">
				<?php dynamic_sidebar( 'sidebar_economico' ); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
