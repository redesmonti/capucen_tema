<?php get_header(); ?>
<div class="container-fluid">
<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="caja-titulo">
					<h1 class="wow fadeIn">Noticias</h1>
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
	<div class="col-md-8 contenido-pagina">
		<?php if ( have_posts() ) : the_post(); ?>
		<div class="titulo-noticia-pagina wow fadeInUp">
			<div class="">
				<h1><?php the_title(); ?></h1>
				<p class="bajada-noticia">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis culpa</p>	
			</div>
			<div>
				<i class="fa fa-calendar" aria-hidden="true"></i> <span><?php the_date(); ?></span><!-- esta fecha que debe ser?, la fecha actual o la fecha de creacion del post??-->
			</div>		
		</div>
		<hr class="linea-separadora wow fadeInUp">
		<div class="caja-foto-articulo fadeInUp">
			<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => '')); }?>
		</div>
		<p class="wow fadeInUp"><?php the_content(); ?></p>
		<br>
		<?php endif; ?>
		<hr class="linea-separadora wow fadeInUp"> 
		<div class="iconos-imprimir-compartir wow fadeInUp">
			<a href=""><i class="fa fa-print" aria-hidden="true"></i></a>
			<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
		</div>
		<div class="col-md-12 navegacion-noticias">
        <?php previous_post_link('%link', '<i class="fa fa-arrow-left"></i> Atras '); ?><!--hacia atras-->
        <?php next_post_link('%link', ' Siguiente <i class="fa fa-arrow-right"></i>'); ?><!--hacia adelante-->
    </div>
	</div>
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