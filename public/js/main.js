$(document).on('ready', function(){
	$('article.contenido').hide();
	$('article.contenido.active').fadeIn('slow');
	$('ul.informes li').on('click', function(e){
		console.log(e.currentTarget);
	});
});