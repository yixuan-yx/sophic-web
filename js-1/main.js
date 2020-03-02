$(document).ready(function(){
	$('.slider-active').owlCarousel({
		loop: true,
		margin: 2,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}		
	});
});

$(document).ready(function(){
	var $grid = $('.grid').isotope({
	});
	
	$('.filter-button-group').on( 'click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
	});
});

$(document).ready(function(){
	$(window).on("scroll",function(){
	var wn = $(window).scrollTop();
	if(wn > 250){
		$(".navbar").removeClass("navbar-dark bg-transparent").addClass("navbar-light bg-white");
	}
	else{
		$(".navbar").removeClass("navbar-light bg-white").addClass("navbar-dark bg-transparent");
	}
	});
});