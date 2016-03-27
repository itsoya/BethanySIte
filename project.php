<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require 'php/templates/heading.php';?>
		<!-- <link rel="stylesheet" type="text/css" href="css/project.css"> -->
		<title>Bethany homepage (testing)</title>
	</head>
	<body data-spy="scroll" data-target="#my-navbar">
		<?php require 'php/templates/nav.php';?>
		<div id="main-wrapper" class="container">

			<!-- article-list-basic -->
			<ul class="article-list-basic">
				<li>
					<a href="#">
						<img src="img/placeholders/placeholder-image.jpg" alt="Industrial Mech" />
					</a>
					<div>
						<h2><a href="#">Interesting article title</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a, volutpat magna.</p>
						<a href="#" class="read-more">Read more &rarr;</a>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/placeholders/placeholder-image.jpg"  alt="Sahale Wa" />
					</a>
					<div>
						<h2><a href="#">Interesting article title</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a, volutpat magna.</p>
						<a href="#" class="read-more">Read more &rarr;</a>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="img/placeholders/placeholder-image.jpg"  alt="Sands of Life" />
					</a>
					<div>
						<h2><a href="#">Interesting article title</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a, volutpat magna.</p>
						<a href="#" class="read-more">Read more &rarr;</a>
					</div>
				</li>
			</ul>
			<!-- article-list-basic end -->
			
		</div>
		<!--End of container fluid & main-wrapper-->
		<!--Top of page-->
		<p id="back-top">
			<a href="#top"><span></span></a>
		</p>
		<!--end of top of page-->
		<?php require 'php/templates/footer.php';?>
		<?php require 'php/templates/footing.php';?>
	</body>
</html>