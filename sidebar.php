<div class="agenda">
			<div class="titulo-noticias">
				<h2>Agenda</h2>
				<a href="">Ver más</a>
			</div>
			<hr class="linea-separadora">
			<div class="caja-agenda">
				<?php
	            $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
	                global $wp_query;
	                $original_query = $wp_query;
	                $args = array(
	                    'post_type' => 'evento',
	                    'showposts' => '4', //numero de noticias que treara
	                    'paged' => $currentPage ,
	                    'orderby' => 'date', 
	                    'order' => 'DESC'
	                ); 
	                $the_query = new WP_Query( $args );    
	        		?>
					<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
				<div class="caja-evento">
					<div class="cuadro-fecha">
						<span><?php echo get_field('mes'); ?></span>
						<p><?php echo get_field('dia'); ?></p>
					</div>
					<div class="info-evento">
						<h4>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
						</h4>
						<hr>
						<div class="lugar">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<p><?php echo get_field('lugar'); ?></p>
						</div>
					</div>	
				</div>
				<?php endwhile; endif; ?>
			</div>	
		</div>