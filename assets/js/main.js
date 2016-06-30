jQuery(document).ready(function() {
	
	jQuery(window).load(function() {
		$(".loader").fadeOut("slow");

	
	// --------------------------------------------------
	// revolution slider
	// --------------------------------------------------
	var revapi;

  	revapi = jQuery('#revolution-slider').revolution({
	delay:15000,
	startwidth:1170,
	startheight:500,
	hideThumbs:10,
	fullWidth:"off",
	fullScreen:"on",
	fullScreenOffsetContainer: "",
	touchenabled:"on",
	navigationType:"none",
	dottedOverlay:"twoxtwo"
	});



	
	// --------------------------------------------------
	// Header Active
	// --------------------------------------------------	
	
$(window).on('scroll',function(){
		$('.scrolldown-block').stop().animate({opacity: 0},400,function(){
			$('.scrolldown-block').css('display','none');
		});
		var winScrollTop = $(window).scrollTop();
		if(winScrollTop >= 200){
			$('header').addClass('header-active');
		}else{
			$('header').removeClass('header-active');
		}
	}); 
	});
	







// --------------------------------------------------
	// Slickmenu (Mobile nav)
	// ------

	$(document).ready(function(){
	$('#menu').slicknav();
	});




// --------------------------------------------------
	// Slickmenu (Mobile nav)
	// ------

   wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
  )
  wow.init();



// --------------------------------------------------
	// Arrow
	// ------

$(function() {
    $('.scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 3000, 'easeInOutExpo');
        event.preventDefault();
    });
});









//hide show script

$(document).ready(function () {
    $('#whybtn1').click(function (event) {        
        $('#why1').show();
        $('#why2').hide();
		$('#why3').hide();
		$('#why4').hide();
    });

   $('#whybtn2').click(function (event) {        
        $('#why1').hide();
        $('#why2').show();
		$('#why3').hide();
		$('#why4').hide();
    });
	
	$('#whybtn3').click(function (event) {        
    	$('#why1').hide();
        $('#why2').hide();
		$('#why3').show();
		$('#why4').hide();
    });
	
	
	$('#whybtn4').click(function (event) {        
        $('#why1').hide();
        $('#why2').hide();
		$('#why3').hide();
		$('#why4').show();
    });
	
});
	
	});







