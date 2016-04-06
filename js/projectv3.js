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
	var globalData;
	$.getJSON("js/content.json", function(data){
		globalData = data['bethany_negash_foundation']['pages']['projects'];
		//console.log(projects);
		loadProjectNav(globalData);
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

	function loadProjectNav(){
		//console.log(data["project1"]);
		
		var innerHTML='';
		for(var i=1;i<=Object.keys(globalData).length;i++){
			innerHTML+="<li class='p-nav' id='project" + i + "'>project" + i + "</li>";
		}
		$('.articles-nav').html(innerHTML);

		innerHTML="<div id='project1' class='tab-content'>";
			innerHTML+="<h1>" + globalData['project1']['title'] + "</h1>";
			innerHTML+="<img src='img/facility/" + globalData['project1']['image'] + "'' alt='Project img' class='responsive'>";
		 	innerHTML+="<p>" + globalData['project1']['content'] + "</p>";
		 	innerHTML+="<span class='article-author'>Written by: " + globalData['project1']['author'] + "</span>";
		 innerHTML+="</div>";
		$('.col-right').html(innerHTML);
		
	}
	$('ul').delegate('li','click',function(){
		var projectID = $(this).attr('id');
		loadProjectDetails(projectID);
	});
	

	function loadProjectDetails(projectID){
		//console.log(projectID);
		//console.log(data);

		var innerHTML='';
		innerHTML+="<div class='tab-content'>";
			innerHTML+="<h1>"+globalData[projectID]['title']+"</h1>";
			innerHTML+="<img src='img/facility/"+globalData[projectID]['image']+"' alt='Project img' class='responsive'>";
			innerHTML+="<p>"+globalData[projectID]['content']+"</p>";
			innerHTML+="<span class='article-author'>Written by: "+globalData[projectID]['author']+"</span>";
		innerHTML+="</div>";

		//console.log(innerHTML);
		$('.col-right').html(innerHTML);
	}
});