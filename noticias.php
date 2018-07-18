<?php 
/*
Template Name: Noticias
*/
?>
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
		<h1 class="wow fadeInUp">Noticias</h1><!-- loop de wordpress este debe ser el título -->
		<div class="row">
		<?php 
          $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1 ; //cuenta el numero de post y si no existen vuelve a la primera pagina
          global $wp_query;
          $original_query = $wp_query;
          $args = array( 
          	'post_type'=> 'post',
          	'showposts' => '6', //numero de noticias que treara
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
		 <!-- loop de wordpress este debe ser el contenido para editar desde wordpress -->
			<div class="col-md-4 col-xs-12">
				<div class="tarjeta-grande tarjeta-grande-noticias wow fadeInUp">
					<div class="foto-noticia">
					<div class="gradiente-foto"></div>
						<div class="redes-sociales">
							<a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
								<div class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							</a>
							<a target="_blank" href="https://twitter.com/intent/tweet?text=Estoy leyendo <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>">
								<div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							</a>	
							<a target="_blank" href="https://wa.me/whatsappphonenumber/?text=Estoy leyendo <?php the_permalink();?>&t=<?php the_title(); ?>">
								<div class="wsp"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
							</a>
						</div>
						<div class="imagen ">
	                      <?php  if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => '')); }?>
	                    </div>							
					</div>
					<div class="texto">
						<a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">Share this on Facebook</a>
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						<p><?php the_excerpt(); ?></p>		
					</div>
				</div>	
			</div>
			<?php } ?>
        <?php $i++;endwhile; endif; ?>
		</div>

		<!--fin-->
		<div class="col-md-8">
            <?php 
            the_posts_pagination(
              	array(
                  'mid_size' => 2,
                  'screen_reader_text'=> '&nbsp;',//poner texto sobre paginacion
                  'prev_text' => __( '<i class="fa fa-arrow-left"></i>', 'textdomain' ),
                  'next_text' => __( '<i class="fa fa-arrow-right"></i>', 'textdomain' ),
              	)
            ); 
            wp_reset_postdata();
            $wp_query = $original_query;
            ?>
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