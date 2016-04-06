$(function(){
    $('.carousel').carousel({
        interval: 15000
    });

    var globalData;
    $.getJSON('js/content.json', function(data){
    	globalData = data['bethany_negash_foundation']['pages']
    	loadHome();
    });

    function loadHome(){

    	var carouselHTML='';
    	var indicatorHTML='';
    	var projectHTML='';
    	//loads carousel via load-carousel-here
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

    	//loads carousel-indicators
    	for(var j=0;j<Object.keys(globalData['home']).length;j++){
			if(j==0){
    			indicatorHTML+='<li data-target="#myCarousel" data-slide-to="'+j+'" class="active"></li>';
    		}
    		else{
    			indicatorHTML+='<li data-target="#myCarousel" data-slide-to="'+j+'"></li>';
    		}
    	}
    	$('.carousel-indicators').html(indicatorHTML);

    	//loads projects via load-projects-here
    	projectHTML+='<h1>Latest Projects</h1>';
    	for(var k=1;k<=3;k++){
    		projectHTML+='<div class="col-lg-4 col-xs-12">';
	    		projectHTML+='<div class="project-panel">';
	    			projectHTML+='<a href="project.php?pID='+globalData['projects']['project'+k]['id']+'">';
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

    }
});