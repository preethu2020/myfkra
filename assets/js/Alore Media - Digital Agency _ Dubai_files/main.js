jQuery(document).ready(function() {
	// --------------------------------------------------
	// paralax background
	// --------------------------------------------------
	$window = jQuery(window);
   	jQuery('section[data-type="background"]').each(function(){
    var $bgobj = jQuery(this); // assigning the object
                    
    jQuery(window).scroll(function() {
	var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
	var coords = '50% '+ yPos + 'px';
	$bgobj.css({ backgroundPosition: coords });
		
	});
 	});
	document.createElement("article");
	document.createElement("section");
	
	
	
	
	
	
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


