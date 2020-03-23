$( document ).ready(function() {

	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

	$('.logos').slick({
        arrows: true,
        autoplay: true,
        infinite: true,
        slidesToShow: 4,
  		slidesToScroll: 1,
  		cssEase: "ease",
  		autoplaySpeed: 2000,
  		pauseOnFocus: false,
  		responsive: [
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
    });

});