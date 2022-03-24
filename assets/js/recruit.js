$(function(){
	$('.js-trigger').click(function(){
		if( $(this).hasClass('is-open') == false ){
			$(this).addClass('is-open');
			$(this).next().slideDown();
		}else{
			$(this).removeClass('is-open');
			$(this).next().slideUp();
		}
	});

});