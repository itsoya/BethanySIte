$(document).ready(function(){

	//load donate page from JSON
	var globalData;
	$.getJSON('js/content.json', function(data){
		globalData = data['bethany_negash_foundation']['pages']['about_us'];
		loadAbout();
	});

	function loadAbout(){
		var innerHTML='';

		innerHTML+='<img src="img/'+globalData['image']+'" class="col-lg-3 col-md-5 col-sm-12 bethany-img" alt="Bethany Negash Picture">';
		innerHTML+='<div class="col-lg-9 col-md-7 col-sm-12 headline-content">';
			innerHTML+='<h2>'+globalData['headline1']+'</h2>';
			innerHTML+=globalData['headline1-content'];
			innerHTML+='<hr>';
			innerHTML+='<h2>'+globalData['headline2']+'</h2>';
			innerHTML+=globalData['headline2-content'];
			innerHTML+='<hr>';
			innerHTML+='<h2>'+globalData['headline3']+'</h2>';
			innerHTML+=globalData['headline3-content'];

			//form
			innerHTML+='<br>';
			innerHTML+='<hr>';
			innerHTML+='<div class="about-contact">';
				innerHTML+='<h2>Contact Us:</h2>'
				innerHTML+='<form role="form" action="comment.php" method="get">';
					innerHTML+='<div class="form-group">';
						innerHTML+='<label for="name">Name:</label>';
						innerHTML+='<input type="name" class="form-control" id="name" name="name">';
					innerHTML+='</div>';
					innerHTML+='<div class="form-group">';
						innerHTML+='<label for="email">Email:</label>';
						innerHTML+='<input type="email" class="form-control" id="email" name="email">';
					innerHTML+='</div>';
					innerHTML+='<div class="form-group">';
						innerHTML+='<label for="comments">Comments (max 255 words)</label>';
						innerHTML+='<textarea class="form-control" rows="4" id="comment" maxlength="255" name="comments-area"></textarea>';
					innerHTML+='</div>';
					innerHTML+='<button type="submit" class="btn btn-default">Submit</button>';
				innerHTML+='</form>';
			innerHTML+='</div>';

		innerHTML+='</div>';

		$('.load-json-here').html(innerHTML);
	}
});