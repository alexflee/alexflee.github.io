 $(document).ready(function() {

 	
 	$(".work-button").click(function() {

 		var editid = $(this).attr("id"); 

 		$('#work').find('h1').removeClass('active-option-off');
 		$('#work').find('h1').removeClass('active-option');
 		$(".work-button").removeClass('active');
	    $(this).addClass('active');

	    if (editid == 'work-all') {} 
		else if (editid == 'work-print') {
			$('#work').find('.print').addClass('active-option');
			$('#work').find('.web, .marketing').addClass('active-option-off');	
		}
		else if (editid == 'work-web') {
			$('#work').find('.web').addClass('active-option');
			$('#work').find('.print, .marketing').addClass('active-option-off');	
		}
		else if (editid == 'work-marketing') {
			$('#work').find('.marketing').addClass('active-option');
			$('#work').find('.print, .web').addClass('active-option-off');	
		}
	});

 	$(window).on("scroll", function () {
		    if ($(this).scrollTop() > 100) {
		    	
		        $("#work-aside").addClass("aside-opacity");
		    }
		    else {
		        $("#work-aside").removeClass("aside-opacity");
		    }
		});

 	$("#nav-contact").click(function() {

 		$('html, body').animate({  scrollTop: $("#contact").offset().top}, 2000);

	});
	$("#nav-about").click(function() {

 		$('html, body').animate({  scrollTop: $("#about").offset().top}, 2000);

	});
	$("#nav-work").click(function() {

 		$('html, body').animate({  scrollTop: $("#work").offset().top}, 2000);

	});
  


    });
