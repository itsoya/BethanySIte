$(document).ready(function(){

	//load project page from json
	var globalData;
	$.getJSON("js/content.json", function(data){
		globalData = data['bethany_negash_foundation']['pages']['projects'];
		loadProjectNav(globalData);

	});

	//click event
	$('ul').delegate('li','click',function(){
		var projectID = $(this).attr('id');
		loadProjectDetails(projectID);
	});

	//gets called when there is no projectID given - loads the page
	function loadProjectNav(){
		
		var innerHTML='';
		for(var i=1;i<=Object.keys(globalData).length;i++){
			innerHTML+="<li class='p-nav' id='project" + i + "'>project" + i + "</li>";
		}
		$('.projects-nav').html(innerHTML);

		innerHTML="<div id='project1' class='tab-content'>";
			innerHTML+="<h1>" + globalData['project1']['title'] + "</h1>";
			innerHTML+="<img src='img/facility/" + globalData['project1']['image'] + "'' alt='Project img' class='responsive'>";
		 	innerHTML+="<p>" + globalData['project1']['content'] + "</p>";
		 	innerHTML+="<span class='project-author'>Written by: " + globalData['project1']['author'] + "</span>";
		 innerHTML+="</div>";
		$('.col-right').html(innerHTML);	
	}
	//loads the page after the click event and projectID given
	function loadProjectDetails(projectID){
		var innerHTML='';
		innerHTML+="<div class='tab-content'>";
			innerHTML+="<h1>"+globalData[projectID]['title']+"</h1>";
			innerHTML+="<img src='img/facility/"+globalData[projectID]['image']+"' alt='Project img' class='responsive'>";
			innerHTML+="<p>"+globalData[projectID]['content']+"</p>";
			innerHTML+="<span class='project-author'>Written by: "+globalData[projectID]['author']+"</span>";
		innerHTML+="</div>";

		//console.log(innerHTML);
		$('.col-right').html(innerHTML);
	}
});