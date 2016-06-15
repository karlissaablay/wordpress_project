$(document).ready(function(){

	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('nav').toggleClass('view')
	});

	$('#hide-icon').click(function(){
		$(this).toggleClass('open');
		$('.blog-text').toggleClass('open')

	});

});
