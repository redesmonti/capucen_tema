	<?php 
/*
Template Name: Mineria
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="caja-titulo cursos">
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
				<h1>Mineria</h1>
			</div>	
		</div>
		<hr class="linea-separadora wow fadeInUp">
		<p class="wow fadeInUp">
CENTRAL SERVICIOS de la UNIVERSIDAD CENTRAL , OTEC creada el año 2003, 10 años como  centro de capacitación  con un gran Liderazgo en grandes Empresas y principalmente en la Minería.
<br>
<br>
Contamos con más de 600 cursos en catálogo, con relatores, facilitadores e Instructores.
<br>
<br>
Nuestra principal fortaleza  como proveedor es hacernos cargo totalmente de los requerimientos, teniendo una  gran disposición de Flexibilidad y adaptación al mandante Nuestras oferta de capacitación son transversales, Operativo, Directivo y Gerencial.
<br>
<br>
Nuestros antecedentes están el registro de proveedores REGIC, el que nos avala  como  OTEC.
		</p>

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