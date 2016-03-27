$(document).ready(function(){
	$('.col-left ul li:first').addClass('active');
	$('.col-right .tab-content:not(:first)').hide();
	$('.col-left ul li a').click(function(e){
		e.preventDefault();
		var content = $(this).attr('href');

		//toggles active for li elements
		$(this).parent().addClass('active');
		$(this).parent().siblings().removeClass('active');

		// shows content
		$(content).show();
		$(content).siblings('.tab-content').hide();
	});
});