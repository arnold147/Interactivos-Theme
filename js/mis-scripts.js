(function( $ ) {
	//Agregar clase menu-open a la etiqueta HTML al pulsar menu-btn
	$('.menu-btn').click(function(){
		$('html').toggleClass('menu-open');
	});
	
	////Agregar clase stykie-header cuando se haga scroll 
	$(window).scroll(function() {
		var windows = $(window).scrollTop();
		var refOffset = $('.wrap-top').height(); 
		
		if(windows > refOffset){
			$('html').addClass('stykie-header');		
		}else{
			$('html').removeClass('stykie-header');
		}	
	});

})(jQuery);