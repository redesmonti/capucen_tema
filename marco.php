	<?php 
/*
Template Name: Convenio Marco
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="caja-titulo">
					<h1 class="wow fadeIn">Capacitaciones</h1>
					<p class="wow fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					<div class="gradiente-azul-titulo-index"></div>
				</div>
				<div class="sub-menu">
					<ul>
						<a href="<?php bloginfo('url'); ?>/sense/"><li>Sence</li></a>
						<a href="<?php bloginfo('url'); ?>/convenio-marco/"><li>Convenio Marco</li></a>
						<a href="<?php bloginfo('url'); ?>/mineria/"><li>Cursos Abiertos</li></a>
					</ul>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="col-md-8 contenido-pagina">
		<div class="titulo-noticia-pagina wow fadeInUp">
			<div class="">
				<h1>Convenio Marco</h1>
			</div>	
		</div>
		<hr class="linea-separadora wow fadeInUp">
		<embed src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/07/cursos_licitados.pdf" type="application/pdf" width="100%" height="600"></embed>
		<hr class="linea-separadora wow fadeInUp"> 
		<div class="iconos-imprimir-compartir wow fadeInUp">
			<a href=""><i class="fa fa-print" aria-hidden="true"></i></a>
			<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
		</div>
	</div>
	<div class="col-md-4">
		<?php include_once( 'sidebar.php' ); ?>
		<div class="redes-sociales-capucen">
			<div class="titulo-noticias">
				<h2>Síguenos en redes</h2>
			</div>
			<hr class="linea-separadora">
			<div class="iconos-redes">
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>




<?php get_footer(); ?>