
<!DOCTYPE html>
<!-- Goals: homepage and the rest of the pages
Maybes: Set up admin pages and get general dashboard 

Thiem's todo list
+ color design
+ stat overlay for clicking on stat icons - use ajax to pull info onto the overlay - uses index.js
+ implement Minh's backend code for real time updates
-->
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
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active item-container">
							<div class="col-xs-4">
								<img src="img/facility/image_10_this.jpg" alt="BNF kids" class="img-responsive">
							</div>
							<div class="col-xs-8">
								<div class="carousel-p">
									<h1>Title</h1>
									Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.
								</div>
							</div>
						</div>
						<div class="item item-container">
							<div class="col-xs-4">
								<img src="img/facility/image_1.jpg" alt="BNF kids" class="img-responsive">
							</div>
							<div class="col-xs-8">
								<div class="carousel-p">
									<h1>Title</h1>
									Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.
								</div>
							</div>
						</div>
						<div class="item item-container">
							<div class="col-xs-4">
								<img src="img/facility/image_5.jpg" alt="BNF kids" class="img-responsive">
							</div>
							<div class="col-xs-8">
								<div class="carousel-p">
									<h1>Title</h1>
									Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.
								</div>
							</div>
						</div>
					</div>
					<!-- Slide indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="icon-prev"></span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="icon-next"></span>
					</a>
				</div>
			</div> <!-- end row -->
			<hr>
			<div class="row">
				<h1>Latest Projects</h1>
				<div class="col-lg-4 col-xs-12">
					<div class="box-panel">
						<a href="#">
							<div>
								<h3>Books for Kids</h3>
								<p>Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.</p>
								<br>
								<span class="box-author">Written by: [Name]</span>
							</div>
						</a>
					</div> <!-- end box-panel -->
				</div> <!-- end col -->
				<div class="col-lg-4 col-xs-12">
					<div class="box-panel">
						<a href="#">
							<div>
								<h3>Empowering the Youth</h3>
								<p>Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.</p>
								<br>
								<span class="box-author">Written by: [Name]</span>
							</div>
						</a>
					</div> <!-- end box-panel -->
				</div> <!-- end col -->
				<div class="col-lg-4 col-xs-12">
					<div class="box-panel">
						<a href="#">
							<div>
								<h3>Computer Literacy</h3>
								<p>Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.</p>
								<br>
								<span class="box-author">Written by: [Name]</span>
							</div>
						</a>
					</div> <!-- end box-panel -->
				</div> <!-- end col -->
			</div> <!-- end row -->
			<hr>
			<div class="row">
				<h1>Statistics</h1>
				<div class="col-md-4">
					<span class="glyphicon glyphicon-globe glyph-custom" aria-hidden="true"></span>
					<h2>Visitors 2016</h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
							70/100
						</div>
					</div> <!-- end progress -->
				</div> <!-- end col -->
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
<<<<<<< HEAD
					</div>
				</div>
			</div> <!-- end row -->

			<div class="custom-modal-overlay">

			</div>

		</div> <!-- end main-wrapper -->
		<!--End of container fluid & main-wrapper-->
		<?php require 'php/templates/footer.php';?>
		<?php require 'php/templates/footing.php';?>
		<script src="js/index.js" type="text/javascript"></script>
	</body>
</html>
=======
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
>>>>>>> master
