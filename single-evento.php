<?php 
/*
Template Name: Single Event
*/
?>
<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="caja-titulo">
					<h1 class="wow fadeIn">Eventos</h1>
					<p class="wow fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					<div class="gradiente-azul-titulo-index"></div>
				</div>
				<div class="sub-menu">
				<ul>
					<a href="<?php bloginfo('url'); ?>/noticias/"><li>Noticias</li></a>
					<a href="<?php bloginfo('url'); ?>/temas-de-interes/"><li>Temas de Interés</li></a>
					<a href="<?php bloginfo('url'); ?>/agenda/"><li>Agenda</li></a>
				</ul>
				</div>
			</div>
		</div>
	</div>
		<?php if ( have_posts() ) : the_post(); ?>
		<div class="col-md-8 contenido-pagina">
			<div class="titulo-noticia-pagina wow fadeInUp">
				<div class="">
					<h1><?php the_title(); ?></h1>	
				</div>
			</div>
			<div class="caja-foto-articulo wow fadeInUp">
				<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => '')); }?>
			</div>
			<div class="datos-evento">
			<p class="wow fadeInUp"><?php the_content(); ?></p>
				<br>
				<div class="fecha-evento wow fadeInUp">
					<h4>Fecha:</h4>
					<p><?php echo get_field('dia'); ?> <?php echo get_field('mes'); ?></p>
				</div>
				<div class="lugar-evento wow fadeInUp">
					<h4>Lugar:</h4>
					<p><?php echo get_field('lugar'); ?></p>
				</div>
				
			</div>
			<hr class="linea-separadora wow fadeInUp"> 
			<div class="iconos-imprimir-compartir wow fadeInUp">
				<a href=""><i class="fa fa-print" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>
		</div>
	    <?php endif; ?>	
	    <?php rewind_posts(); ?>
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
			<div class="col-md-12 navegacion-noticias">
	        <?php previous_post_link('%link', '<i class="fa fa-arrow-left"></i> Atras '); ?><!--hacia atras-->
	        <?php next_post_link('%link', ' Siguiente <i class="fa fa-arrow-right"></i>'); ?><!--hacia adelante-->
	    </div>
</div>

<?php get_footer(); ?>
