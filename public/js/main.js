$(document).on('ready', function(){
	var $root = $('html, body');
	if(window.location.hash){
		 $root.animate({
	        scrollTop: $( window.location.hash ).offset().top
	    }, 500);
	}
	$('.menu a').on('click', function() {
		var href = $(this).attr('href').split('#');
		if(href[1]){
			console.log('#'+href[1]);
			$root.animate({
	       		scrollTop: $( '#'+href[1] ).offset().top
	    	}, 500);
		}
	    return false;
	})
	$('article.contenido').hide();
	$('article.contenido.active').fadeIn('slow');
	$('ul.informes li').on('click', function(e){
		var i = $(this).index();
		$('article.contenido').removeClass('active');
		$('article.contenido').hide();
		$('article.contenido').eq(i).addClass('active');
		$('article.contenido').eq(i).fadeIn();
	});
});