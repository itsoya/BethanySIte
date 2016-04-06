$(document).ready(function(){
	// $('.col-left ul li:first').addClass('active');
	// $('.col-right .tab-content:not(:first)').hide();
	// $('.col-left ul li a').click(function(e){
	// 	e.preventDefault();
	// 	var content = $(this).attr('href');

	// 	//toggles active for li elements
	// 	$(this).parent().addClass('active');
	// 	$(this).parent().siblings().removeClass('active');

	// 	// shows content
	// 	$(content).show();
	// 	$(content).siblings('.tab-content').hide();
	// });

	//load project page from json
	$.getJSON("js/content.json", function(data){
		console.log(data['bethany_negash_foundation']['pages']['projects']);
		loadProjectNav(data['bethany_negash_foundation']['pages']['projects']);
		// loadProjectPage(data['bethany_negash_foundation']['pages']['projects']);

	});



	// function loadProjectPage(data){
	// 	console.log(data['project'+1]['title']);
	// 	$('#main-wrapper').html('hi');
	// 	var innerHTML='';
	// 	console.log("the length is " + Object.keys(data).length);
	// 	innerHTML+='<div class="col-left">';
	// 		innerHTML+='<ul id="articles-nav">';
	// 			for(var i=1;i<=Object.keys(data).length;i++){
	// 				innerHTML+='<li><a href="#project'+i+'">Project '+i+'</a></li>';
	// 			}
	// 		innerHTML+='</ul>';
	// 	innerHTML+='</div>';
	// 	innerHTML+='<div class="col-right">'
	// 		for(var i=1;i<=Object.keys(data).length;i++){
	// 			innerHTML+='<div id="project'+i+'" class="tab-content">';
	// 				innerHTML+='<h1>'+data['project'+i]['title']+'</h1>';
	// 				innerHTML+='<img src="img/facility/'+data['project'+i]['image']+'" alt="Project img" class="responsive">';
	// 				innerHTML+='<p>'+data['project'+i]['content']+'</p>';
	// 				innerHTML+='<span class="article-author">Written by: '+data['project'+i]['author']+'</span>';
	// 			innerHTML+='</div>';
	// 		}
	// 	innerHTML+='</div>';

	// 	console.log(innerHTML);
	// 	$('#main-wrapper').html(innerHTML);
	// }

	$('.col-left ul li a').click(function(e){
		e.preventDefault();
		console.log($(this).attr('href'));
		var temp = $(this).attr('href');
		projectID = temp.split('#')
		console.log(projectID[1]);
		loadProjectDetails(projectID[1],data);
	});

	function loadProjectNav(data){
		//clearing all of main-wrapper
		$('#main-wrapper').html('');
		var innerHTML='';
		//console.log("the length is " + Object.keys(data).length);
		innerHTML+='<div class="col-left">';
			innerHTML+='<ul id="articles-nav">';
				for(var i=1;i<=Object.keys(data).length;i++){
					innerHTML+='<li><a href="#project'+i+'">Project '+i+'</a></li>';
				}
			innerHTML+='</ul>';
		innerHTML+='</div>';

		innerHTML+='<div class="col-right">';
			innerHTML+='<div id="project1" class="tab-content">';
				innerHTML+='<h1>Empowering the Youth</h1>';
				innerHTML+='<img src="img/facility/image_1.jpg" alt="Project img" class="responsive">';
				innerHTML+='<p>Hello</p>';
				innerHTML+='<span class="article-author">Written by: Sally Adams</span>';
			innerHTML+='</div>';
		innerHTML+='</div>';
		$('#main-wrapper').html(innerHTML);

	}

	function loadProjectDetails(projectID, data){
		console.log(projectID);
		console.log(data);

		var innerHTML='';
		innerHTML+='<div class="tab-content">';
			innerHTML+='<h1>'+data[projectID]['title']+'</h1>';
			innerHTML+='<img src="img/facility/'+data[projectID]['image']+'" alt="Project img" class="responsive">';
			innerHTML+='<p>'+data[projectID]['content']+'</p>';
			innerHTML+='<span class="article-author">Written by: '+data[projectID]['author']+'</span>';
		innerHTML+='</div>';

		console.log(innerHTML);
		$('.col-right').html(innerHTML);
	}
});