<?php 
/*
Template Name: Historia
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="caja-titulo">
					<h1 class="wow fadeIn">CAPUCEN</h1>
					<p class="wow fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					<div class="gradiente-azul-titulo-index"></div>
				</div>
				<div class="sub-menu">
				<ul>
					<a href="<?php bloginfo('url'); ?>/quienes-somos/"><li>Quienes somos</li></a>
					<a href="<?php bloginfo('url'); ?>/historia/"><li>Historia</li></a>
					<a href="<?php bloginfo('url'); ?>/organigrama/"><li>Organigrama</li></a>
				</ul>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="col-md-8 contenido-pagina">
		<h1 class="wow fadeInUp"><?php the_title(); ?></h1><!-- loop de wordpress este debe ser el título -->
		<div>
			<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); }?>
		</div>
		 <!-- loop de wordpress este debe ser el contenido para editar desde wordpress -->
		<p class="wow fadeInUp">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</p>
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