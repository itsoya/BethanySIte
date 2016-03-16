<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require 'php/templates/heading.php';?>
		<title>Bethany homepage (testing)</title>
	</head>
	<body data-spy="scroll" data-target="#my-navbar">
		<?php require 'php/templates/nav.php';?>
		<div id="main-wrapper" class="container">
			<!-- article list large -->
			<ul class="article-list-large">
				<li>
					<a href="#">
						<img src="img/placeholders/placeholder-image.jpg" alt="Green Beach" />
					</a>
					<h2><a href="#">Interesting article title</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis, laoreet diam a, volutpat magna. Donec eleifend laoreet elementum. Nulla dictum lacinia ut sodales libero.  Etiam vestibulum ex in leo euismod.</p>
					<span>by <a href="#">Author Name</a> &middot; 22nd Aug 2015</span>
				</li>
				<li>
					<a href="#">
						<img src="img/placeholders/placeholder-image2.jpg" alt="Colosseum" />
					</a>
					<h2><a href="#">Interesting article title</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis, laoreet diam a, volutpat magna. Donec eleifend laoreet elementum. Nulla dictum lacinia ut sodales libero.  Etiam vestibulum ex in leo euismod.</p>
					<span>by <a href="#">Author Name</a> &middot; 15th Nov 2014</span>
				</li>
			</ul>
			<!-- article list large end -->
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