$(document).ready(function() {

// Off canvas toggle menu button
$('[data-toggle=offcanvas]').click(function() {
	$('.glyphicon-plus').toggleClass('glyphicon-minus');
	if($('.row-offcanvas-left .sidebar-offcanvas').css("left") == "-500px"){
		
		$('.row-offcanvas').toggleClass('active',500 );
	}
	else if($('.row-offcanvas-left .sidebar-offcanvas .active').css("left") == "500px"){
		$('.row-offcanvas').toggleClass('active',500 );
		$('.row-offcanvas-left .active').animate({left: '0px'});
	}
});
//end off canvas function

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

	//For logo to change to smaller logo
	$(function(){
		$(window).resize(function(){
			if($(window).width() >= 1334){
				$( "#my-navbar .container .searchbox" ).html("");
			} else  {
				$( "#my-navbar .container .searchbox" ).html("<input type=text class=form-control search placeholder=Search name=srch-term id=srch-term>");
			}
		});
		if($(window).width() >= 1334){
			$( "#my-navbar .container .searchbox" ).html("");
		} else {
			$( "#my-navbar .container .searchbox" ).html("<input type=text class=form-control search placeholder=Search name=srch-term id=srch-term>");
		}
	});
//End of Logo

//End of document ready function
});

