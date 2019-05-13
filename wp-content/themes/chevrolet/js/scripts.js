$('.full-banner').slick({
	dots: false,
	infinite: true,
	speed: 500,
	fade: true,
	cssEase: 'linear',
	responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$('span.checkmark').on('click', function(){
	$(this).parent().find('input').click();
});

$('#parcela').on('click', function(){
  $('.range-parcela').addClass('ativo');
  $('.range-credito').removeClass('ativo');
});
$('#credito').on('click', function(){
  $('.range-credito').addClass('ativo');
  $('.range-parcela').removeClass('ativo');
});