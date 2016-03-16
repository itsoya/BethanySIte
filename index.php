<!DOCTYPE html>
<!-- Goals: homepage and the rest of the pages
Maybes: Set up admin pages and get general dashboard -->
<html lang="en">
	<head>
		<?php require 'php/templates/heading.php';?>
		<title>Bethany homepage (testing)</title>
	</head>
	<body data-spy="scroll" data-target="#my-navbar">
		<?php require 'php/templates/nav.php';?>
		<div id="main-wrapper" class="container">
			<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Slide indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/placeholders/placeholder-image4.jpg" alt="BNF kids">
						</div>
						<div class="item">
							<img src="img/placeholders/placeholder-image5.jpg" alt="BNF kids">
						</div>
						<div class="item">
							<img src="img/placeholders/placeholder-image3.jpg" alt="BNF kids">
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="icon-prev"></span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="icon-next"></span>
					</a>
				</div>
				</div> <!-- end row -->
				<div class="row">
					<h1>Our Stories</h1>
					<div class="col-md-4">
						<div class="custom-spacing4">
							<h4 class="project-title">Books for Kids</h4>
							<p>Blurb about books for kids</p>
							<p>Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.</p>
							<button type="button" class="btn btn-info">Learn More!</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="custom-spacing4">
							<h4 class="project-title">Computer Literacy</h4>
							<p>Blurb computer literacy project</p>
							<p>Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.</p>
							<button type="button" class="btn btn-info">Learn More!</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="custom-spacing4">
							<h4 class="project-title">Empowering the Youth</h4>
							<p>Blurb empowering youth with skills for the future</p>
							<p>Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.</p>
							<button type="button" class="btn btn-info">Learn More!</button>
						</div>
					</div>
					</div> <!-- end row -->
					<div class="row">
						<h1>Our Facility</h1>
						<div class="col-md-4">
							<div class="custom-spacing4">
								<img src="img/facility/image_1.jpg" class="fac-img" alt="BNF facility">
							</div>
						</div>
						<div class="col-md-4">
							<div class="custom-spacing4">
								<img src="img/facility/image_9.jpg" class="fac-img" alt="BNF facility">
							</div>
						</div>
						<div class="col-md-4">
							<div class="custom-spacing4">
								<img src="img/facility/image_14.jpg" class="fac-img" alt="BNF facility">
							</div>
						</div>
						</div> <!-- end row -->
						<div class="row">
							<h1>Statistics</h1>
							<div class="col-md-4">
								<span class="glyphicon glyphicon-globe glyph-custom" aria-hidden="true"></span>
								<h2>Visitors 2016</h2>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
										70/100
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<span class="glyphicon glyphicon-piggy-bank glyph-custom" aria-hidden="true"></span>
								<h2>Donations 2016</h2>
								<div class="progress">
									<div class="progress-bar progress-bar-success" style="width:35%">
										<span class="sr-only">35%</span>
									</div>
									<div class="progress-bar progress-bar-warning" style="width:25%">
										<span class="sr-only">25%</span>
									</div>
									<div class="progress-bar progress-bar-danger" style="width:15%">
										<span class="sr-only">15%</span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<span class="glyphicon glyphicon-apple glyph-custom" aria-hidden="true"></span>
								<h2>Children Helped 2016</h2>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
										70/100
									</div>
								</div>
							</div>
							</div> <!-- end row -->
							<div class="row">
								<h1>Our Mission</h1>
								<div class="col-md-3">
									<img src="img/facility/Image_11.jpg" class="fac-img" alt="BNF facility image">
								</div>
								<div class="col-md-9">
									<p>Katana jeans sensory human augmented reality refrigerator San Francisco denim. Tattoo augmented reality corrupted hotdog geodesic tiger-team shrine sub-orbital RAF rifle. Uplink Tokyo-space monofilament receding tube sensory faded. Girl digital math-voodoo god nodality decay ablative monofilament film cardboard bicycle gang San Francisco sign bridge grenade. Digital cyber-faded decay wonton soup Chiba into receding artisanal sub-orbital. Tattoo augmented reality corrupted hotdog geodesic tiger-team shrine sub-orbital RAF rifle. Uplink Tokyo-space monofilament receding tube sensory faded. Girl digital math-voodoo god nodality decay ablative monofilament film cardboard bicycle gang San Francisco sign bridge grenade. Digital cyber-faded decay wonton soup Chiba into receding artisanal sub-orbitalKatana jeans sensory human augmented reality refrigerator San Francisco denim. Tattoo augmented reality corrupted hotdog geodesic tiger-team shrine sub-orbital RAF rifle. Uplink Tokyo-space monofilament receding tube sensory faded. Girl digital math-voodoo god nodality decay ablative monofilament film cardboard bicycle gang San Francisco sign bridge grenade. Digital cyber-faded decay wonton soup Chiba into receding artisanal sub-orbital. Tattoo augmented reality corrupted hotdog geodesic tiger-team shrine sub-orbital RAF rifle. Uplink Tokyo-space monofilament receding tube sensory faded. Girl digital math-voodoo god nodality decay ablative monofilament film cardboard bicycle gang San Francisco sign bridge grenade. Digital cyber-faded decay wonton soup Chiba into receding artisanal sub-orbital</p>
								</div>
								</div> <!-- end row -->
							</div>
							<!--End of container fluid & main-wrapper-->
							<a href="admin/pages/index.php">ADMIN</a>
							<?php require 'php/templates/footer.php';?>
							<?php require 'php/templates/footing.php';?>
						</body>
					</html>