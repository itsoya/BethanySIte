var JSON_DATA;
$(document).ready(function() {
    //Scroll navigation function to make the nav fixed at top
    window.onscroll = function() {switchNav()};
	function switchNav() {
	    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
	    	$("#my-navbar").addClass("navbar-fixed-top");
	    	$("#my-navbar").addClass("nav-centered");
	    	$("#my-navbar").removeClass("navbar-static-top");
	    	$("#miniLogo").css("display", "inherit");

	    } else {
	        $("#my-navbar").addClass("navbar-static-top");
	        $("#my-navbar").removeClass("nav-centered");
	        $("#my-navbar").removeClass("navbar-fixed-top");
	        $("#miniLogo").css("display", "none");
	    }
	}
});

