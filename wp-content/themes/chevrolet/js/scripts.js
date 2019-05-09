$('.full-banner').slick({
	dots: false,
	infinite: true,
	speed: 500,
	fade: true,
	cssEase: 'linear'
});

$('span.checkmark').on('click', function(){
	$(this).parent().find('input').click();
});