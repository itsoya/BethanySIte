
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
					<div class="carousel-inner load-carousel-here" role="listbox">
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
			<div class="row load-projects-here">
				<h1>Latest Projects</h1>
				<div class="col-lg-4 col-xs-12">
					<div class="project-panel">
						<a href="#">
							<div class="bkgd-color">
								<img src="img/facility/image_1.jpg" class="project-left" alt="Bethany Facility Image">
								<div class="project-right">
									<h3 class="project-title">Books for Kids</h3><span class="project-author">Written by: [Name]</span>
									<p class="project-content">Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.</p>
								</div> <!-- end project-right -->
							</div> <!-- end bkgd-color -->
						</a>
					</div> <!-- end project-panel -->
				</div> <!-- end col -->
				<div class="col-lg-4 col-xs-12">
					<div class="project-panel">
						<a href="#">
							<div class="bkgd-color">
								<img src="img/facility/image_1.jpg" class="project-left" alt="Bethany Facility Image">
								<div class="project-right">
									<h3 class="project-title">Books for Kids</h3><span class="project-author">Written by: [Name]</span>
									<p class="project-content">Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.</p>
								</div> <!-- end project-right -->
							</div> <!-- end bkgd-color -->
						</a>
					</div> <!-- end project-panel -->
				</div> <!-- end col -->
				<div class="col-lg-4 col-xs-12">
					<div class="project-panel">
						<a href="#">
							<div class="bkgd-color">
								<img src="img/facility/image_1.jpg" class="project-left" alt="Bethany Facility Image">
								<div class="project-right">
									<h3 class="project-title">Books for Kids</h3><span class="project-author">Written by: [Name]</span>
									<p class="project-content">Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.</p>
								</div> <!-- end project-right -->
							</div> <!-- end bkgd-color -->
						</a>
					</div> <!-- end project-panel -->
				</div> <!-- end col -->
			</div> <!-- end row -->

			<hr>
			<div class="row">
				<h1>Statistics</h1>
				<div class="col-md-4">
					<span class="glyphicon glyphicon-globe glyph-custom" aria-hidden="true" data-target="#myModal" data-toggle="modal"></span>
					<h2>Website Visitors 2016</h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
							70/100
						</div>
					</div> <!-- end progress -->
				</div> <!-- end col -->
				<div class="col-md-4">
					<span class="glyphicon glyphicon-piggy-bank glyph-custom" aria-hidden="true" data-target="#myModal" data-toggle="modal"></span>
					<h2>Money Donations 2016</h2>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
							$70/100
						</div>
					</div> <!-- end progress -->
				</div>
				<div class="col-md-4">
					<span class="glyphicon glyphicon-apple glyph-custom" aria-hidden="true" data-target="#myModal" data-toggle="modal"></span>
					<h2>Visitors to facility 2016</h2>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
							70/100
						</div>
					</div>
				</div>
			</div> <!-- end row -->

			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">

				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">

							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Stats</h4>
						</div>
						<div class="modal-body">
							<div>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#stat-visitors-web" aria-controls="stat-visitors-web" role="tab" data-toggle="tab">Website Visitors</a></li>
									<li role="presentation"><a href="#stat-donations" aria-controls="stat-donations" role="tab" data-toggle="tab">Money Donations</a></li>
									<li role="presentation"><a href="#stat-visitors-facility" aria-controls="stat-visitors-facility" role="tab" data-toggle="tab">Facility Visitors</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="stat-visitors-web">
										<h2>This year: 70</h2>
										<br>
										<h2>Total Overall: 1,345</h2>
										<br>

									</div>
									<div role="tabpanel" class="tab-pane fade" id="stat-donations">
										<h2>This year</h2>
										<div class="progress">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
												$70/100
											</div>
										</div> <!-- end progress -->
										<br>
										<h2>Total Overall: $1200</h2>
										<br>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="stat-visitors-facility">
										<h2>This year: 70</h2>
										<br>
										<h2>Total Overall: 134</h2>
										<br>
									</div>
								</div>

							</div>
						</div> <!-- end modal-body -->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>

		</div> <!-- end main-wrapper -->
		<!--End of container fluid & main-wrapper-->
		<?php require 'php/templates/footer.php';?>
		<?php require 'php/templates/footing.php';?>
		<script src="js/index.js" type="text/javascript"></script>
	</body>
</html>