$(document).ready(function(){

	//load project page from json
	var globalData;
	var projectID = '';
	$.getJSON("js/content.json", function(data){
		globalData = data['bethany_negash_foundation']['pages']['projects'];
		getVariables(globalData);
	});

	//gets URL data variable by variable name 
	var getUrlParameter = function getUrlParameter(sParam){
		var sPageURL = decodeURIComponent(window.location.search.substring(1)),
		sURLVariables = sPageURL.split('&'),
		sParameterName,
		i;

		for(i=0;i<sURLVariables.length;i++){
			sParameterName = sURLVariables[i].split('=');

			if(sParameterName[0] === sParam){
				return sParameterName[1] === undefined ? true : sParameterName[1];
			}
		}
	};

	function getVariables(globalData){
		var projectID = getUrlParameter('pID');
		if(projectID === undefined){
			alert('no projectID');
			loadDefaultProjectNav();
			loadProjectDefault(globalData);
		}
		else{
			loadDefaultProjectNav();
			loadProjectDetails(projectID);		
		}
	}

	//click event
	$('ul').delegate('li','click',function(){
		var projectID = $(this).attr('id');
		loadProjectDetails(projectID);
	});

	function loadDefaultProjectNav(){
		var innerHTML='';
		for(var i=1;i<=Object.keys(globalData).length;i++){
			innerHTML+="<li class='p-nav' id='project" + i + "'>project" + i + "</li>";
		}
		$('.projects-nav').html(innerHTML);
	}

	//gets called when there is no projectID given - loads the page
	function loadProjectDefault(){	
		var innerHTML='';
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