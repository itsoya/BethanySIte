var JSON_DATA;
$(document).ready(function() {
<<<<<<< HEAD
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
	window.onscroll = function() {switchNav()};
=======
    //Scroll navigation function to make the nav fixed at top
    window.onscroll = function() {switchNav()};
>>>>>>> 5a220c0c1b830824fa387955ff8560bcf36ff54c

	function switchNav() {
	    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
	    	$("#my-navbar").addClass("navbar-fixed-top");
	    	$("#my-navbar").addClass("nav-centered");
	    	$("#my-navbar").removeClass("navbar-static-top");
	    	$("#miniLogo").css("display", "inherit");
	    	$("div.jumbotron").css('display','none');

	    } else {
	        $("#my-navbar").addClass("navbar-static-top");
	        $("#my-navbar").removeClass("nav-centered");
	        $("#my-navbar").removeClass("navbar-fixed-top");
	        $("#miniLogo").css("display", "none");
	        $("div.jumbotron").css('display','block');
	    }
	}
});

<<<<<<< HEAD
=======
    /* smooth scrolling for scroll to top */
    $('.scroll-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
    })
});
>>>>>>> 5a220c0c1b830824fa387955ff8560bcf36ff54c
