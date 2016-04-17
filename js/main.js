var JSON_DATA;
$(document).ready(function() {

    //Scroll navigation function to make the nav fixed at top
    window.onscroll = function() {switchNav()};

	function switchNav() {
	    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 30) {
	    	$("#my-navbar").addClass("nav-centered");
	    	$("#miniLogo").css("display", "inherit");

	    } else {
	        $("#my-navbar").removeClass("nav-centered");
	        $("#miniLogo").css("display", "none");
	    }
	}
    /* affix the navbar after scroll below header */
    $('#my-navbar').affix({
        offset: {
            top: $('.load-projects-here').height() - $('#my-navbar').height()
        }
    });

    /* smooth scrolling for scroll to top */
    $('.scroll-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
    })


});