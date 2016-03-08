$(document).ready(function() {


//Scroll to top function
	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
	//End of top scroll function
	//Scroll navigation function to make the nav fixed at top
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    	$("#my-navbar").addClass("navbar-fixed-top");
    	$("#my-navbar").removeClass("navbar-static-top");
    	$("#miniLogo").css("display", "inherit");
    } else {
        $("#my-navbar").addClass("navbar-static-top");
        $("#my-navbar").removeClass("navbar-fixed-top");
        $("#miniLogo").css("display", "none");
    }
}
//End of document ready function
});

