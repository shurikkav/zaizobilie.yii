$(window).scroll(function() {
  
	if ($(window).width() < 1260 ) {
		$(".to_top").css("margin-right", -($('.footer_content_main').width() / 2));
	} else {
		$(".to_top").css("margin-right", -($('.footer_content_main').width() / 2 + 60));
	}
	if( $(this).scrollTop() > 200 ) {
		$(".to_top").fadeIn(300);
	} else {
		$(".to_top").fadeOut(300);
	}

});
$(window).resize(function() {
  
	if ($(window).width() < 1260 ) {
		$(".to_top").css("margin-right", -($('.footer_content_main').width() / 2));
	} else {
		$(".to_top").css("margin-right", -($('.footer_content_main').width() / 2 + 60));
	}
	if( $(this).scrollTop() > 200 ) {
		$(".to_top").fadeIn(300);
	} else {
		$(".to_top").fadeOut(300);
	}

});

$(document).ready(function($) {

	$('.to_top').click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, 300);
	});
	
	
	
});