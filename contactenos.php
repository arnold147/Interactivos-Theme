<?php
/**
 * Template name: Contactenos
 */

get_header(); ?>


<div style="position:relative;overflow: hidden;padding-bottom: 50px;padding-top: 50px;">

	<div  class="formulario-sec ">
		<?php echo do_shortcode('[contact-form-7 id="140" title="Formulario de contacto 1"]')?>
	</div>
	<div  class="mapa" style="min-height:100vh;"><?php echo do_shortcode('[google_map_easy id="1"]')?>	</div>
</div>
	
	
<?php get_footer();?>