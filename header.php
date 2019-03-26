<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<?php wp_head(); ?> 	
</head> 
<body <?php body_class(); ?>>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

<?php 
	if ( function_exists( 'hfe_render_header' ) ) {
		hfe_render_header();
	}
?>
