$(function(){
	//global variables
    var globalData;

    $('.carousel').carousel({
        // interval: 15000
        interval: 150000000
    });

    function statCall(handleData){
	    $.ajax({
	    	url:'../Minh/get_stats.php',
	    	type:'POST',
	    	success: function(data){
	    		handleData(data);
	    	}
	    });
	}

    $.getJSON('js/content.json', function(data){
    	globalData = data['bethany_negash_foundation']['pages']
    	loadHome();
    });

    function loadHome(){
    	var carouselHTML='';
    	var indicatorHTML='';
    	var projectHTML='';
    	//loads carousel into element with class load-carousel-here
    	for(var i=1;i<=Object.keys(globalData['home']).length;i++){
	    	if(i==1){
	    		carouselHTML+='<div class="item active item-container">';
	    			carouselHTML+='<div class="col-xs-4">';
	    				carouselHTML+='<img src="img/facility/'+globalData['home']['gallery'+i]['image']+'" alt="BNF kids" class="img-responsive">';
	    			carouselHTML+='</div>';
	    			carouselHTML+='<div class="col-xs-8">';
	    				carouselHTML+='<div class="carousel-p">';
	    					carouselHTML+='<h1>'+globalData['home']['gallery'+i]['title']+'</h1>';
	    					carouselHTML+=globalData['home']['gallery'+i]['content'];
	    				carouselHTML+='</div>';
	    			carouselHTML+='</div>';
	    		carouselHTML+='</div>';
	    	}
	    	else{
	    		carouselHTML+='<div class="item item-container">';
	    			carouselHTML+='<div class="col-xs-4">';
	    				carouselHTML+='<img src="img/facility/'+globalData['home']['gallery'+i]['image']+'" alt="BNF kids" class="img-responsive">';
	    			carouselHTML+='</div>';
	    			carouselHTML+='<div class="col-xs-8">';
	    				carouselHTML+='<div class="carousel-p">';
	    					carouselHTML+='<h1>'+globalData['home']['gallery'+i]['title']+'</h1>';
	    					carouselHTML+=globalData['home']['gallery'+i]['content'];
	    				carouselHTML+='</div>';
	    			carouselHTML+='</div>';
				carouselHTML+='</div>';
    		}
    	}
		$('.load-carousel-here').html(carouselHTML);

    	//loads element with class carousel-indicators
    	for(var j=0;j<Object.keys(globalData['home']).length;j++){
			if(j==0){
    			indicatorHTML+='<li data-target="#myCarousel" data-slide-to="'+j+'" class="active"></li>';
    		}
    		else{
    			indicatorHTML+='<li data-target="#myCarousel" data-slide-to="'+j+'"></li>';
    		}
    	}
    	$('.carousel-indicators').html(indicatorHTML);

    	//loads projects into element with class load-projects-here
    	projectHTML+='<h1>Latest Projects</h1>';
    	for(var k=1;k<=3;k++){
    		projectHTML+='<div class="col-lg-4 col-xs-12">';
	    		projectHTML+='<div class="project-panel">';
	    			projectHTML+='<a href="project.php?pID=project'+globalData['projects']['project'+k]['id']+'">';
	    				projectHTML+='<div class="bkgd-color">';
	    					projectHTML+='<img src="img/facility/'+globalData['projects']['project'+k]['image']+'" class="project-left" alt="Bethany Facility Image">';
	    					projectHTML+='<div class="project-right">';
	    						projectHTML+='<h3 class="project-title">'+globalData['projects']['project'+k]['title']+'</h3><span class="project-author">Written by: '+globalData['projects']['project'+k]['author']+'</span>';
    							projectHTML+='<p class="project-content">'+globalData['projects']['project'+k]['content']+'</p>';
	    					projectHTML+='</div>';
	    				projectHTML+='</div>';
    				projectHTML+='</a>'
	    		projectHTML+='</div>';
    		projectHTML+='</div>';
    	}
    	$('.load-projects-here').html(projectHTML);

    	//loads stats into elements
	    statCall(function(handleData){
	    	var statHTML='';
	    	var date = new Date();
	    	var temp = handleData;
	    	var stat = temp.split(" ");
	    	var month = new Array();
			month[0] = "January";
			month[1] = "February";
			month[2] = "March";
			month[3] = "April";
			month[4] = "May";
			month[5] = "June";
			month[6] = "July";
			month[7] = "August";
			month[8] = "September";
			month[9] = "October";
			month[10] = "November";
			month[11] = "December";

	    	//donation stats
	    	statHTML+='<div class="stat-title">Donations</div>';
	    		statHTML+='<div class="row stat-panel">';
	    			statHTML+='<div class="col-sm-12">';
	    				statHTML+='<span class="glyphicon glyphicon-piggy-bank glyph-custom2" aria-hidden="true" data-toggle="modal"></span>';
	    			statHTML+='</div>';
	    			statHTML+='<div class="col-sm-12 stat-text">';
	    				statHTML+='Current Year('+date.getFullYear()+'): $'+stat[0]+'<br>Total: $'+stat[1];
	    			statHTML+='</div>';
	    		statHTML+='</div>';
	    	statHTML+='</div>';

	    	$('.load-donation-stat-here').html(statHTML);

	    	//facility visitor stats
	    	statHTML='';

	    	statHTML+='<div class="stat-title">Facility Visitors</div>';
	    		statHTML+='<div class="row stat-panel">';
	    			statHTML+='<div class="col-sm-12">';
	    				statHTML+='<span class="glyphicon glyphicon-apple glyph-custom2" aria-hidden="true" data-toggle="modal"></span>';
	    			statHTML+='</div>';
	    			statHTML+='<div class="col-sm-12 stat-text">';
	    				statHTML+='This month ('+month[date.getMonth()]+'): '+stat[2]+'<br>Total: '+stat[3];
	    			statHTML+='</div>';
	    		statHTML+='</div>';
	    	statHTML+='</div>';


	    	$('.load-fac-visitor-stat-here').html(statHTML);

	    });

    }

});