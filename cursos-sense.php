<?php 
/*
Template Name: cusros sence
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="caja-titulo cursos">
					<h1 class="wow fadeIn">Sence</h1>
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
	<?php if ( have_posts() ) : the_post(); ?>
		<div class="titulo-noticia-pagina wow fadeInUp">
			<div class="">
				<h1><?php the_title(); ?></h1>
			</div>	
		</div>
		<hr class="linea-separadora wow fadeIn">
		<p><?php the_content(); ?></p>
		<a href="javascript:history.back(1)" class="atras"><i class="fa fa-chevron-left" aria-hidden="true"></i> Atrás</a>
		<?php endif; ?>
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