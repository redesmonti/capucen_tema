<?php get_header(); ?>
<div class="slider-principal">
	<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
</div>

<!--     Contadores     -->
<div class="container-fluid contadores">
	<div class="contenedor-contadores">
		<div class="contador_uno wow fadeInUp">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cursos.png" alt="">
			<div>
				<span class="count">324</span><p>Convenio Marco</p>
			</div>
		</div>
		<div class="contador_uno wow fadeInUp">
			<img src="<?php echo get_template_directory_uri(); ?>/images/clases.png" alt="">
			<div>
				<span class="count">423</span><p>Código Sence</p>
			</div>
		</div>
		<div class="contador_uno wow fadeInUp">
			<img src="<?php echo get_template_directory_uri(); ?>/images/alumnos.png" alt="">
			<div>
				<span class="count">453</span><p>Alumnos</p>
			</div>
		</div>
	</div>
</div>

<!--     Noticias     -->
<div class="container-fluid noticias">
	<div class="col-md-8">
		<div class="noticias row">
			<div class="titulo-noticias wow fadeInUp">
				<h2>Noticias</h2>
				<a href="<?php bloginfo('url'); ?>/noticias">Ver más</a>
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
									<a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
								<div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									</a>
									<a target="_blank" href="https://twitter.com/intent/tweet?text=Estoy leyendo <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>">
										<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									</a>	
									<a target="_blank" href="https://web.whatsapp.com/send?text=Estoy leyendo <?php the_permalink();?>&t=<?php the_title(); ?>">
										<div class="wsp"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
									</a>
								</div>
								<a href="<?php the_permalink(); ?>">
                                	<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('large', array('class' => '')); }?>
                            	</a>							
							</div>
							<div class="texto">
								<h3>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
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
			                    'order' => 'DESC'
			                ); 
			                $the_query = new WP_Query( $args );    
			        		?>
						<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="tarjetas-chicas">
							<div class="tarjeta-chica wow fadeInUp">
								<div class="foto-noticia">
								<div class="gradiente-foto"></div>
									<div class="redes-sociales">
										<a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
											<div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										</a>
										<a target="_blank" href="https://twitter.com/intent/tweet?text=Estoy leyendo <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>">
											<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										</a>	
										<a target="_blank" href="https://web.whatsapp.com/send?text=Estoy leyendo <?php the_permalink();?>&t=<?php the_title(); ?>">
											<div class="wsp"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
										</a>
									</div>
									<a href="<?php the_permalink(); ?>">
                                		<?php  if ( has_post_thumbnail() ) { the_post_thumbnail('large', array('class' => '')); }?>
                            		</a>							
								</div>
								<div class="texto">
									<h3>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
				<a href="<?php bloginfo('url'); ?>/temas-de-interes/">Ver más</a>
			</div>
			<hr class="linea-separadora">
			<div class="caja-noticias col-md-12">
				<div class="row">
					<?php 
			          $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
			          global $wp_query;
			          $original_query = $wp_query;
			          $args = array( 
			          	'post_type'=> 'tema_de_interes',
			          	'showposts' => '2', //numero de noticias que treara
			            'paged' => $currentPage ,
			            'orderby' => 'date', 
			            'order' => 'DESC',
			          ); 
			           $custom_post_type = new WP_Query( $args );
			              $wp_query = $custom_post_type;
			              if ( $custom_post_type->have_posts() ) : ?>
			                <?php $i = 1; while ( $custom_post_type->have_posts() ) : $custom_post_type->the_post(); ?>
			                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			                <?php if(!empty($url)){ ?>
					<div class="col-md-6 col-xs-12">
						<div class="tarjetas-chicas">
							<div class="tarjeta-chica wow fadeInUp">
								<div class="foto-noticia">
									<div class="gradiente-foto"></div>		
									<div class="redes-sociales">
										<a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
											<div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										</a>
										<a target="_blank" href="https://twitter.com/intent/tweet?text=Estoy leyendo <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>">
											<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										</a>	
										<a target="_blank" href="https://web.whatsapp.com/send?text=Estoy leyendo <?php the_permalink();?>&t=<?php the_title(); ?>">
											<div class="wsp"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
										</a>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/images/reunion.jpg" alt="">							
								</div>
								<div class="texto">
									<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
									<p><?php the_excerpt(); ?></p>	
								</div>
							</div>
						</div>	
					</div>
					<?php } ?>
        		<?php $i++;endwhile; endif; ?>
				</div>
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
			    <div class="carousel-inner">
			    	<?php 
				        $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
				        global $wp_query;
				        $original_query = $wp_query;
				        $args = array(
				            'post_type' => 'Testimonio',
				            'showposts' => '4', //numero de noticias que treara
				            'paged' => $currentPage ,
				            'orderby' => 'date', 
				            'order' => 'DESC'
					    ); 
					    $the_query = new WP_Query( $args );    
					?>
			    	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			        <div class="item <?php if( $the_query->current_post == 0 ):?>active<?php endif; ?> contenido-testimonio">
				        <div class="imagen-testigo">
				        	<img class="foto-testigo" src="<?php echo get_template_directory_uri(); ?>/images/comillas.png" alt="mundo">
				        </div>
				        <h3><?php the_title(); ?></h3>
				        <p><?php the_content(); ?></p>
			        </div>
			        <?php endwhile; endif; ?> 
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