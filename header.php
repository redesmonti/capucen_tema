<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>
<body><!--se cierra en footer.php-->
	<header class="site-header">
	    <nav class="navegacion navbar-fixed-top" id="navbarjs" role="navigation">
			<!--<div class="zona-contactos">
				<button class="tel"><i class="fa fa-phone" aria-hidden="true"></i> <strong>Tel: </strong>  +56 2 2604 74 59</button>
				<button class="tel"><i class="fa fa-envelope" aria-hidden="true"></i> <strong>Mail:</strong>  contacto@sedadent.cl</button>
			</div>-->
	        <div class="container">
	          <div class="navbar-header"> 
	            <div class="navbar-brand">
	              <a href="<?php bloginfo('url'); ?>">
	              	<h3><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/capacita-ucen.png" alt="..."></h3>
	              </a> 
	            </div>
	            <div class="logo-calidad">
	          	<img class="nch" src="<?php echo get_template_directory_uri(); ?>/images/nch.png" alt=""> 
	          </div> 
	            <button type="button" class="navbar-toggle smooth-scroll" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
	              <span class="sr-only">Toggle navigation</span> 
	              <span class="icon-bar"></span> 
	              <span class="icon-bar"></span> 
	              <span class="icon-bar"></span> 
	            </button>  
	          </div>
	          <div class="smooth-scroll collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
			        <li><a href="<?php bloginfo('url'); ?>">Inicio</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/quienes-somos" class="borde-negro">Capucen</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/noticias">Noticias</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/sense" class="borde-negro">Capacitaciones</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/contacto">Contacto</a></li>
			    </ul>
			    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-central.png" alt="logo central" class="logo-central">
	          </div>
	        </div>        
	    </nav><!-- fin navegacion-->
	</header>

<!-- botoneras redes sociales -->
<!-- 	<div class="social">
		<ul>
			<li><a href="#" target="_blank" class="icon-facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
			<li><a href="callto:+56226047459" target="_blank" class="icon-googleplus"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
			<li><a href="mailto:contacto@sedadent.cl" class="icon-mail"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
		</ul>
	</div> -->