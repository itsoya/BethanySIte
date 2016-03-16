<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require 'php/templates/heading.php';?>
		<title>Bethany homepage (testing)</title>
	</head>
	<body data-spy="scroll" data-target="#my-navbar">
		<?php require 'php/templates/nav.php';?>
		<div id="main-wrapper" class="container">
			<!--List out the books-->
			<ul class="article-list-vertical">
				<li>
					<a href="#" style="background-image: url('img/facility/Image_12.JPG')"></a>
					<div>
						<h2><a href="#">Interesting article title</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a volutpat magna.</p>
						<a href="#" class="read-more">Read more &rarr;</a>
					</div>
				</li>
				<li>
					<a href="#" style="background-image: url('img/facility/Image_12.JPG')"></a>
					<div>
						<h2><a href="#">Interesting article title</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a volutpat magna.</p>
						<a href="#" class="read-more">Read more &rarr;</a>
					</div>
				</li>
				<li>
					<a href="#" style="background-image: url('img/facility/Image_12.JPG')"></a>
					<div>
						<h2><a href="#">Interesting article title</a></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a volutpat magna.</p>
						<a href="#" class="read-more">Read more &rarr;</a>
					</div>
				</li>
			</ul>
			<!-- End of List out the books-->
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