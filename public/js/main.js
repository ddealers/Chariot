$(document).on('ready', function(){
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