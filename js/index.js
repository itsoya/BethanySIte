$(function(){
	//global variables
    var globalData;

    $('.carousel').carousel({
        // interval: 15000
        interval: 150000000
    });

    //calls stat from stat.php file and changes the json string into json object format
    function statCall(handleData){
	    $.ajax({
	    	url:'../Minh/get_stats.php',
	    	type:'POST',
	    	success: function(data){
	    		data = JSON.parse(data);
	    		handleData(data);
	    		console.log(data);
	    	}
	    });
	}

    $.getJSON('js/content.json', function(data){
    	globalData = data['bethany_negash_foundation']['pages']
    	loadIndex();
    });

    function loadIndex(){
    	var carouselHTML='';
    	var indicatorHTML='';
    	var projectHTML='';
    	//loads carousel into element with class load-carousel-here
    	for(var i=1;i<=Object.keys(globalData['home']).length;i++){
	    	if(i==1){
	    		carouselHTML+='<div class="item active item-container">';
	    			carouselHTML+='<div class="col-sm-4 carousel-img">';
	    				carouselHTML+='<img src="img/'+globalData['home']['gallery'+i]['image']+'" alt="BNF kids" class="img-responsive">';
	    			carouselHTML+='</div>';
	    			carouselHTML+='<div class="col-sm-8 carousel-content">';
	    				carouselHTML+='<div class="carousel-p">';
	    					carouselHTML+='<h1>'+globalData['home']['gallery'+i]['title']+'</h1>';
	    					carouselHTML+='<p>' +globalData['home']['gallery'+i]['content']+ '</p>';
	    				carouselHTML+='</div>';
	    			carouselHTML+='</div>';
	    		carouselHTML+='</div>';
	    	}
	    	else{
	    		carouselHTML+='<div class="item item-container item-container">';
	    			carouselHTML+='<div class="col-sm-4 carousel-img">';
	    				carouselHTML+='<img src="img/'+globalData['home']['gallery'+i]['image']+'" alt="BNF kids" class="img-responsive">';
	    			carouselHTML+='</div>';
	    			carouselHTML+='<div class="col-sm-8 carousel-content">';
	    				carouselHTML+='<div class="carousel-p">';
	    					carouselHTML+='<h1>'+globalData['home']['gallery'+i]['title']+'</h1>';
	    					carouselHTML+='<p>' +globalData['home']['gallery'+i]['content']+ '</p>';
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
	    			projectHTML+='<a href="project.php?pID=project' +globalData['projects']['project'+k]['id']+ '">';
	    				projectHTML+='<div class="bkgd-color">';
	    					projectHTML+='<div class="panel-content">';
		    					projectHTML+='<img src="img/' +globalData['projects']['project'+k]['image']+ '" alt="Bethany Facility Image">';
	    						projectHTML+='<h3 class="project-title">';
	    							projectHTML+=globalData['projects']['project'+k]['title'];
	    							projectHTML+='<br>';
	    							projectHTML+='<p class="project-author">Written by:' +globalData['projects']['project'+k]['author']+ '</p>';
	    						projectHTML+='</h3>';
	    						projectHTML+='<p class="project-content">' +globalData['projects']['project'+k]['content']+ '</p>';
	    					projectHTML+='</div>'; //end panel-content
	    				projectHTML+='</div>'; //end bkgd-color
    				projectHTML+='</a>'
	    		projectHTML+='</div>'; //end project-panel
    		projectHTML+='</div>'; //end col-lg
    	}
    	$('.load-projects-here').html(projectHTML);

    	//loads stats into elements
	    statCall(function(handleData){
	    	var statHTML='';
	    	var date = new Date();
	    	var stat = handleData;
	    	// console.log('total donation: '+stat['total_donation']);
			var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

	    	//website visitor stats
	    	statHTML+='<div class="stat-title">Website Visitors</div>';
	    		statHTML+='<div class="row stat-panel">';
	    			statHTML+='<div class="col-sm-12">';
	    				statHTML+='<div class="icon-credit">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>';
	    				statHTML+='<img class="stat-icon" src="img/icons/connection.svg">';
	    			statHTML+='</div>';
	    			statHTML+='<div class="col-sm-12 stat-text" alt="website visitor icon">';
	    				statHTML+='Current Year(' +date.getFullYear()+ '):' +stat['current_year_web_visitor']+ ' <br>Total: ' +stat['total_web_visitor'];
	    			statHTML+='</div>'
	    		statHTML+='</div>';
	    	statHTML+='</div>';

	    	$('.load-web-visitor-stat-here').html(statHTML);

	    	//donation stats
	    	statHTML=''; //resets string
	    	statHTML+='<div class="stat-title">Donations</div>';
	    		statHTML+='<div class="row stat-panel">';
	    			statHTML+='<div class="col-sm-12">';
	    				statHTML+='<span class="glyphicon glyphicon-piggy-bank glyph-custom2" aria-hidden="true" data-toggle="modal"></span>';
	    			statHTML+='</div>';
	    			statHTML+='<div class="col-sm-12 stat-text">';
	    				statHTML+='Current Year(' +date.getFullYear()+ '): $' +stat['current_year_total']+ '<br>Total: $' +stat['total_donation'];
	    			statHTML+='</div>';
	    		statHTML+='</div>';
	    	statHTML+='</div>';

	    	$('.load-donation-stat-here').html(statHTML);

	    	//facility visitor stats
	    	statHTML=''; //resets string
	    	statHTML+='<div class="stat-title">Facility Visitors</div>';
	    		statHTML+='<div class="row stat-panel">';
	    			statHTML+='<div class="col-sm-12">';
	    				statHTML+='<div class="icon-credit">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>';
						statHTML+='<img class="stat-icon" src="img/icons/foot.svg" alt="facility visitor icon">';
	    			statHTML+='</div>';
	    			statHTML+='<div class="col-sm-12 stat-text">';
	    				statHTML+='This month (' +month[date.getMonth()]+ '): ' +stat['current_month_visitor']+ '<br>Total: ' +stat['total_visitor'];
	    			statHTML+='</div>';
	    		statHTML+='</div>';
	    	statHTML+='</div>';

	    	$('.load-fac-visitor-stat-here').html(statHTML);

	    });

    }

});