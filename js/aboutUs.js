$(document).ready(function(){

	//load donate page from JSON
	var globalData;
	$.getJSON('js/content.json', function(data){
		globalData = data['bethany_negash_foundation']['pages']['about_us'];
		loadAbout();
	});

	function loadAbout(){
		var innerHTML='';

		innerHTML+='<div class="col-sm-3">';
			innerHTML+='<img src="img/' +globalData['image']+ '" class="bethany-img center responsive" alt="Bethany Negash Picture">'
		innerHTML+='</div>';
		innerHTML+='<div class="col-sm-9 headline-content">';
			innerHTML+='<h2 class="headline-title">' +globalData['headline1']+ '</h2>';
			innerHTML+='<p class="headline-p">'+ globalData['headline1-content']+ '</p>';
			innerHTML+='<hr>';
			innerHTML+='<h2 class="headline-title">' +globalData['headline2']+ '</h2>';
			innerHTML+='<p class="headline-p">'+ globalData['headline2-content']+ '</p>';
			innerHTML+='<hr>';
			innerHTML+='<h2 class="headline-title">'+globalData['headline3']+'</h2>';
			innerHTML+='<p class="headline-p">'+ globalData['headline3-content']+ '</p>';

			//form
			innerHTML+='<br>';
			innerHTML+='<hr>';
			innerHTML+='<div class="about-contact">';
				innerHTML+='<h3 class="headline-title">Contact Us: <div class="contact-phone">Phone: ' +globalData['phone']+ '</div></h3>';
				innerHTML+='<form role="form" action="/Minh/contact_admin.php" method="get">';
					innerHTML+='<div class="form-group">';
						innerHTML+='<label for="name">Name:</label>';
						innerHTML+='<input type="name" class="form-control" id="name" name="name">';
					innerHTML+='</div>';
					innerHTML+='<div class="form-group">';
						innerHTML+='<label for="email">Email:</label>';
						innerHTML+='<input type="email" class="form-control" id="email" name="email">';
					innerHTML+='</div>';
					innerHTML+='<div class="form-group">';
						innerHTML+='<label for="comments">Comments (max 1000 characters)</label>';
						innerHTML+='<textarea class="form-control" rows="4" id="comment" maxlength="1000" name="comments-area"></textarea>';
					innerHTML+='</div>';
					innerHTML+='<button type="submit" class="btn btn-default">Submit</button>';
				innerHTML+='</form>';
			innerHTML+='</div>';

		innerHTML+='</div>';

		$('.load-json-here').html(innerHTML);
	}
});