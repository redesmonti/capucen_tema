<?php 
/*
Template Name: cusros sense
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="caja-titulo">
					<h1 class="wow fadeIn">Sense</h1>
					<p class="wow fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
					<div class="gradiente-azul-titulo-index"></div>
				</div>
				<div class="sub-menu">
					<ul>
						<a href="<?php bloginfo('url'); ?>/sense/"><li>Sense</li></a>
						<a href="<?php bloginfo('url'); ?>/convenio-marco/"><li>Convenio Marco</li></a>
						<a href="<?php bloginfo('url'); ?>/mineria/"><li>Cursos Abiertos</li></a>
						<a href="<?php bloginfo('url'); ?>/agenda/"><li>Diplomados en Conjunto U Central</li></a>
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
		<a href="" class="atras"><i class="fa fa-chevron-left" aria-hidden="true"></i> Atrás</a>
		<?php endif; ?>
	</div>
	<div class="col-md-4">
		<div class="agenda ">
			<div class="titulo-noticias">
				<h2>Agenda</h2>
				<a href="">Ver más</a>
			</div>
			<hr class="linea-separadora">
			<div class="caja-agenda">
				<div class="caja-evento">
					<div class="cuadro-fecha">
						<span>mayo</span>
						<p>14</p>
					</div>
					<div class="info-evento">
						<h4>Titulo evento</h4>
						<hr>
						<div class="lugar">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<p>Calle nuermo #3223, Santiago Centro	</p>
						</div>
					</div>	
				</div>
				<div class="caja-evento">
					<div class="cuadro-fecha">
						<span>mayo</span>
						<p>14</p>
					</div>
					<div class="info-evento">
						<h4>Titulo evento</h4>
						<hr>
						<div class="lugar">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<p>Calle nuermo #3223, Santiago Centro	</p>
						</div>
					</div>	
				</div>
				<div class="caja-evento">
					<div class="cuadro-fecha">
						<span>mayo</span>
						<p>14</p>
					</div>
					<div class="info-evento">
						<h4>Titulo evento</h4>
						<hr>
						<div class="lugar">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<p>Calle nuermo #3223, Santiago Centro	</p>
						</div>
					</div>	
				</div>
				<div class="caja-evento">
					<div class="cuadro-fecha">
						<span>mayo</span>
						<p>14</p>
					</div>
					<div class="info-evento">
						<h4>Titulo evento</h4>
						<hr>
						<div class="lugar">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<p>Calle nuermo #3223, Santiago Centro	</p>
						</div>
					</div>	
				</div>
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