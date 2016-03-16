$(document).ready(function() {
    
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

