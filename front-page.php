<?php get_header(); ?>
<div class="slider-principal">
	<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
</div>

<!--     Contadores     -->
<div class="container-fluid contadores">
	<div class="contenedor-contadores">
		<div class="contador_uno wow fadeInUp"><span>324</span><p>Convenio Marco</p></div>
		<div class="contador_uno wow fadeInUp"><span>423</span><p>Código Sence</p></div>
		<div class="contador_uno wow fadeInUp"><span>453</span><p>Alumnos</p></div>
	</div>
</div>

<!--     Noticias     -->
<div class="container-fluid noticias">
	<div class="col-md-8">
		<div class="noticias row">
			<div class="titulo-noticias wow fadeInUp">
				<h2>Noticias</h2>
				<a href="">Ver más</a>
			</div>
			<hr class="linea-separadora">
			<div class="caja-noticias col-md-12">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<?php
				            $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
				                global $wp_query;
				                $original_query = $wp_query;
				                $args = array(
				                    'post_type' => 'post',
				                    'showposts' => '1', //numero de noticias que treara
				                    'paged' => $currentPage ,
				                    'orderby' => 'date', 
				                    'order' => 'ASC',
				                    'tag'   => 'destacada'
				                ); 
				                $the_query = new WP_Query( $args );    
				        ?>
						<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="tarjeta-grande wow fadeInUp">
							<div class="foto-noticia">
							<div class="gradiente-foto"></div>
								<div class="redes-sociales">
									<a href="" class="">
										<div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									</a>
									<a href="">
										<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									</a>	
									<a href="">
										<div class="wsp"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
									</a>
								</div>
								<a href="<?php the_permalink(); ?>">
                                	<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('large', array('class' => 'img-responsive')); }?>
                            	</a>							
							</div>
							<div class="texto">
								<h3 href="<?php the_permalink(); ?>">
									<?php the_title(); ?>	
								</h3>
								<p><?php the_excerpt(); ?></p>		
							</div>
						</div>	
						<?php endwhile; endif; ?> 
					</div>
					<div class="col-md-6 col-xs-12">
						<?php
			            $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
			                global $wp_query;
			                $original_query = $wp_query;
			                $args = array(
			                    'post_type' => 'post',
			                    'showposts' => '2', //numero de noticias que treara
			                    'paged' => $currentPage ,
			                    'orderby' => 'date', 
			                    'order' => 'ASC'
			                ); 
			                $the_query = new WP_Query( $args );    
			        ?>
						<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="tarjetas-chicas">
							<div class="tarjeta-chica wow fadeInUp">
								<div class="foto-noticia">
								<div class="gradiente-foto"></div>
									<div class="redes-sociales">
										<a href="" class="">
											<div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										</a>
										<a href="">
											<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										</a>	
										<a href="">
											<div class="wsp"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
										</a>
									</div>
									<a href="<?php the_permalink(); ?>">
                                		<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('large', array('class' => 'img-responsive')); }?>
                            		</a>							
								</div>
								<div class="texto">
									<h3 href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</h3>
									<p><?php the_excerpt(); ?></p>		
								</div>
							</div>
						</div>
						<?php endwhile; endif; ?>	
					</div>
				</div>
			</div>
		</div>
		<div class="noticias row">
			<div class="titulo-noticias wow fadeInUp">
				<h2>Temas de Interés</h2>
				<a href="">Ver más</a>
			</div>
			<hr class="linea-separadora">
			<div class="caja-noticias col-md-12">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="tarjetas-chicas">
							<div class="tarjeta-chica wow fadeInUp">
								<div class="foto-noticia">
									<div class="gradiente-foto"></div>		
									<div class="redes-sociales">
										<a href="" class="">
											<div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										</a>
										<a href="">
											<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										</a>	
										<a href="">
											<div class="wsp"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
										</a>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/images/reunion.jpg" alt="">							
								</div>
								<div class="texto">
									<h3>Titulo Tema Interés</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsa dolorem architecto porro beatae, quo, dignissimos numquam</p>		
								</div>
							</div>
						</div>	
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="tarjetas-chicas">
							<div class="tarjeta-chica wow fadeInUp">
								<div class="foto-noticia">
									<div class="gradiente-foto"></div>
									<div class="redes-sociales">
										<a href="" class="">
											<div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										</a>
										<a href="">
											<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										</a>	
										<a href="">
											<div class="wsp"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
										</a>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/images/casco.jpg" alt="">							
								</div>
								<div class="texto">
									<h3>Titulo Tema Interés</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsa dolorem architecto porro beatae, quo, dignissimos numquam</p>		
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="agenda wow fadeInUp">
			<div class="titulo-noticias">
				<h2>Agenda</h2>
				<a href="">Ver más</a>
			</div>
			<hr class="linea-separadora">
			<div class="caja-agenda wow fadeInUp">
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
		<div class="agenda">
			<div class="titulo-noticias wow fadeInUp">
				<h2>Indicadores Económicos</h2>
			</div>
			<hr class="linea-separadora">
			<div class="caja-indicadores wow fadeInUp">
				<ul>
					<li><p>Dolar</p> <p>650</p></li>
					<li><p>Euro</p> <p>650</p></li>
					<li><p>UFr</p> <p>650</p></li>
					<li><p>UTM</p> <p>650</p></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<!--     Pilares     -->
<div class="container-fluid pilares wow fadeInUp">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active ">
		    <div class="container">
		    	<div class="col-md-6 contenedor_foto"><img class="pilar_foto" src="<?php echo get_template_directory_uri(); ?>/images/calculo.jpg" alt=""></div>
		    	<div class="col-md-6 texto-pilar"><h2>Titulo pilar número 1</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos minima totam vitae delectus, odit eaque ab! Mollitia sapiente tempora ipsa cumque ratione. Architecto molestiae, facilis ipsa. Tempora ea, a. Cupiditate.</p>
		    	</div>	
		    </div>
	    </div>
	    <div class="item">
	        <div class="container">
		        <div class="col-md-6 contenedor_foto"><img class="pilar_foto" src="<?php echo get_template_directory_uri(); ?>/images/calculo.jpg" alt=""></div>
			    <div class="col-md-6 texto-pilar"><h2>Titulo pilar número 1</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos minima totam vitae delectus, odit eaque ab! Mollitia sapiente tempora ipsa cumque ratione. Architecto molestiae, facilis ipsa. Tempora ea, a. Cupiditate.</p>
			    </div>
		    </div>	
	    </div>      
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<img class="mundo-fondo" src="<?php echo get_template_directory_uri(); ?>/images/mundo.png" alt="mundo">
</div>


<!--     Clientes     -->
<div class="container-fluid clientes wow fadeInUp">
	<div class="row clientes_">
		<div class="col-md-6 testiminios">
			<div class="gradiente-testimonios"></div>
			<h2 class="titulo_testimonio">Testimonios</h2>
			<div class="carousel slide" data-ride="carousel" id="myCarousel">
			    <ul class="carousel-indicators">
			        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
			        <li data-target="#myCarousel" data-slide-to="1"></li>
			        <li data-target="#myCarousel" data-slide-to="2"></li>
			        <li data-target="#myCarousel" data-slide-to="3"></li>
			    </ul>
			    <div class="carousel-inner">
			        <div class="item active contenido-testimonio">
				        <div class="imagen-testigo">
				        	<img class="foto-testigo" src="<?php echo get_template_directory_uri(); ?>/images/comillas.png" alt="mundo">
				        </div>
				        <h3>Nombre Testimonio</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores doloremque architecto atque suscipit necessitatibus fugiat praesentium veniam at eligendi cumque error, iusto ducimus dolore, optio molestias esse sequi quae deleniti.</p>
			        </div>
			        <div class="item contenido-testimonio">
				        <div class="imagen-testigo">
				        	<img class="foto-testigo" src="<?php echo get_template_directory_uri(); ?>/images/comillas.png" alt="mundo">
				        </div>
				        <h3>Nombre Testimonio</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores doloremque architecto atque suscipit necessitatibus fugiat praesentium veniam at eligendi cumque error, iusto ducimus dolore, optio molestias esse sequi quae deleniti.</p>
			        </div>
			        <img class="comillas" src="<?php echo get_template_directory_uri(); ?>/images/comillas.png" alt="mundo">
			    </div>
			    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
			        <span class="glyphicon glyphicon-chevron-left"></span>
			    </a>
			    <a href="#myCarousel" class="right carousel-control" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right"></span>
			    </a>
			</div>
		</div>
		<div class="col-md-6 logos_clientes">
			<h3>Nuestros Clientes</h3>
		</div>
	</div>
</div>

<?php get_footer(); ?>