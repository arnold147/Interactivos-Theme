<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<?php wp_head(); ?> 	
</head> 
<body <?php body_class(); ?>>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
<div class="wrap-top">
	
	<div class="bar-top animated fadeInDown duration2 ">
	<div class="container">
		<div class="datos-top">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				Calle 55 # 55 - 55 
		
				<span class="tel-top"><i class="ico-datos-f fa fa-phone" aria-hidden="true"></i> Telefono (+57) 555 555 5555</span>
		
		</div>
		<div class="redes-top">
				<a target="_blank" href="#" class="icono-red"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				
				<a target="_blank" href="#" class="icono-red"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				
				<a target="_blank" href="#" class="icono-red" ><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
				
				<a target="_blank" href="#" class="icono-red"><i class="fa fa-google-plus" aria-hidden="true"></i></a>  
				
				<a target="_blank" href="#" class="icono-red" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</div>
		<i class="menu-btn fa fa-bars" aria-hidden="true"></i>
	</div>
	</div>
	
<header class="container">
		<?php the_custom_logo(); ?>	
</header>

	<?php 
	if (has_nav_menu('menu')){
		wp_nav_menu( array( 
		'theme_location' => 'menu', 
		'menu_class' => 'menu-interactivos', 
		'container'       => 'nav',
		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
		));
		}; ?>
		
</div>