$(function(){
	
	var windowWidth = $(window).width();
	var slickWidth = 768;
	if(windowWidth <= slickWidth){
    $('.other-slick').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      centerMode: true,
      focusOnSelect: true,
      arrows: true,
			prevArrow: '<a class="slide-arrow prev-arrow"><span></span></a>',
			nextArrow: '<a class="slide-arrow next-arrow"><span></span></a>',
			responsive:[
				{
					breakpoint: 750,
					settings: {
						centerPadding:'19rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 700,
					settings: {
						centerPadding:'18rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint:680,
					settings: {
						centerPadding:'16rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint:640,
					settings: {
						centerPadding:'13.5rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 590,
					settings: {
						centerPadding:'11rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 540,
					settings: {
						centerPadding:'9.5rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 520,
					settings: {
						centerPadding:'8rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 480,
					settings: {
						centerPadding:'6rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 440,
					settings: {
						centerPadding:'5rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 420,
					settings: {
						centerPadding:'4rem',
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 400,
					settings: {
						slidesToShow: 1,
						centerMode:true,
						centerPadding:'3rem',
					}
				},
				{
					breakpoint: 380,
					settings: {
						slidesToShow: 1,
						centerMode:true,
						centerPadding:'2.5rem',
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
    });
  }
});