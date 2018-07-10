	<?php 
/*
Template Name: Sense
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
		<div class="titulo-noticia-pagina wow fadeInUp">
			<div class="">
				<h1>Sense</h1>
			</div>	
		</div>
		<hr class="linea-separadora wow fadeInUp">
		<p class="wow fadeInUp">Estás en: Portada   Central Servicios
Invitamos a su empresa a desarrollar sus propias capacitaciones (cursos cerrados) en los temas, lugares, fechas y horarios a convenir, optimizando la productividad y el bienestar de sus trabajadores.
		<br>
		<br>
		</p>
		<table class="table table-hover table-bordered wow fadeInUp">
			<tr>
			  <th colspan="2">Cursos activos registrados por área y especialidad</th>
			</tr>
			<tr>
				<th>Nombre del área</th>
				<th>Número de cursos activos</th>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/administracion/">Administración</a></td>
				<td>53</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/agricultura/">Agricultura</a></td>
				<td>2</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/ciencias-y-tecnicas-aplicadas">Ciencias Y Técnicas Aplicadas</a></td>
				<td>44</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/comercio-y-servicios-financieros/">Comercio Y Servicios Financieros</a></td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/computacion-e-informatica|'¿|/">Computación E Informática</a></td>
				<td>26</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/construccion/">Construcción</a></td>
				<td>10</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/educacion-y-capacitacion/">Educación Y Capacitación</a></td>
				<td>20</td>
			</tr>
			<tr>
				<td>
					<a href="<?php bloginfo('url'); ?>/electricidad-y-electronica/">Electricidad Y Electrónica</a>
				</td>
				<td>7</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/energia-nuclear/">Energía Nuclear</a></td>
				<td>1</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/idiomas-y-comunicacion/">Idiomas Y Comunicación</a></td>
				<td>6</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/mecanica-automotriz/">Mecánica Automotriz	</a></td>
				<td>3</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/mecanica-industrial/">Mecánica Industrial</a></td>
				<td>22</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/mineria/">Minería</a></td>
				<td>22</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/procesos-industriales/">Procesos Industriales</a></td>
				<td>6</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/salud-nutricion-y-dietetica/">Salud, Nutrición Y Dietética</a></td>
				<td>15</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/servicio-a-las-personas/">Servicio A Las Personas</a></td>
				<td>5</td>
			</tr>
			<tr>
				<td><a href="<?php bloginfo('url'); ?>/transporte-y-telecomunicaciones/">Transporte Y Telecomunicaciones</a></td>
				<td>40</td>
			</tr>
			<tr>
				<th>Total</th>
				<th>285</th>
			</tr>
		</table>
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