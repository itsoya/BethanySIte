$(document).ready(function(){
	
	//load donate page from JSON
	var globalData;
	$.getJSON('js/content.json', function(data){
		globalData = data['bethany_negash_foundation']['pages']['donate'];
		loadDonate();
		console.log(globalData);
		$('.donate-bkgd').css('background-image', 'url(img/' +globalData['background-image']+ ')');;
	});

	function loadDonate(){
		var innerHTML="";

		innerHTML+='<div class="col-md-12 row donate-bkgd">';
			innerHTML+='<div class="col-md-6">';
				innerHTML+='<h1 class="catch-phrase">';
					innerHTML+=globalData['catch-phrase'];
				innerHTML+='</h1>';
			innerHTML+='</div>';
			innerHTML+='<div class="col-md-6 overlay-content">';
				innerHTML+='<h3>'+globalData['headline']+'</h3>';
				innerHTML+='<p class="donate-p">';
					innerHTML+='<br>';
					innerHTML+=globalData['donate-paragraph'];
					innerHTML+='<div class="donate-warning">' +globalData['donate-warning']+ '</div>';
				innerHTML+='</p>';
				innerHTML+='<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"> <input type="hidden" name="cmd" value="_s-xclick"> <input type="hidden" name="hosted_button_id" value="ZWMD84PNFXET2"> <input type="image" src="img/dev/paypal-donate.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> </form>';
			innerHTML+='</div>';
		innerHTML+='</div>';

		$('.load-json-here').html(innerHTML);
	}
});