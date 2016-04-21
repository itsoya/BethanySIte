$(document).ready(function(){

	//global variables
	var globalData;
	var projectID = '';

	//load project page from json
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

	//calls appropriate function if pID exists in URL or not
	function getVariables(globalData){
		var projectID = getUrlParameter('pID');
		if(projectID === undefined){
			// alert('no projectID');
			loadDefaultProjectNav();
			loadProjectNoID(globalData);
		}
		else{
			loadDefaultProjectNav();
			loadProjectHasID(projectID);		
		}
	}

	//slides right to reveal sidenav
	var navOut=false;
	$('.side-nav-btn').on('click', function(){
		$('.side-nav-btn').toggleClass('rotate');
		if(navOut==false){
			$('#main-wrapper').css('left','520px');
			navOut=true;
		}
		else if(navOut==true){
			$('#main-wrapper').css('left','0px');
			navOut=false
		}
	});
	$(window).resize(function(){
		if($(window).width()<=1349){
			$('.side-nav-btn').removeClass('rotate');
			$('#main-wrapper').css('left','0px');
			navOut=false
		}
	});

	//click event on left side projects
	$('ul').delegate('li','click',function(){
		var projectID = $(this).attr('id');
		loadProjectHasID(projectID);
		$('.p-nav').removeClass('active');
		$(this).addClass('active');
	});

	function loadDefaultProjectNav(){
		var innerHTML='';
		for(var i=1;i<=Object.keys(globalData).length;i++){
			if(i==1){
				innerHTML+='<li class="p-nav active" id="project' + i + '">' +globalData['project'+i]['title']+ '</li>';
			}
			else{
				innerHTML+='<li class="p-nav" id="project' + i + '">' +globalData['project'+i]['title']+ '</li>';
			}
		}
		// console.log('projects-nav \n'+innerHTML);
		$('.projects-nav').html(innerHTML);
	}

	//gets called when there is no projectID given - loads the page
	function loadProjectNoID(){	
		var innerHTML='';
 		innerHTML+='<div id="project1" class="tab-content">';
 			innerHTML+='<img src="img/facility/' +globalData['project1']['image']+ '" alt="Project img" class="responsive">';
 			innerHTML+='<h1>';
 				innerHTML+=globalData['project1']['title'];
 				innerHTML+='<br>';
 				innerHTML+='<span class="project-author">Written by: ' +globalData['project1']['author']+ '</span>';
 			innerHTML+='</h1>';
 			innerHTML+='<p>' +globalData['project1']['content']+ '</p>';
 		innerHTML+='</div>';
		$('.col-right').html(innerHTML);
	}
	//loads the page after the click event and projectID given
	function loadProjectHasID(projectID){
		var innerHTML='';
		innerHTML+='<div id="project1" class="tab-content">';
			innerHTML+='<img src="img/facility/' +globalData[projectID]['image']+ '" alt="Project img" class="responsive">';
			innerHTML+='<h1>';
				innerHTML+=globalData[projectID]['title'];
				innerHTML+='<br>';
				innerHTML+='<span class="project-author">Written by: ' +globalData[projectID]['author']+ '</span>';
			innerHTML+='</h1>';
			innerHTML+='<p>' +globalData[projectID]['content']+ '</p>';
		innerHTML+='</div>';

		//console.log(innerHTML);
		$('.col-right').html(innerHTML);
	}
});