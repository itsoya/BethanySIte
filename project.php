<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require 'php/templates/heading.php';?>
		<link rel="stylesheet" type="text/css" href="css/project.css">
		<title>Bethany homepage (testing)</title>
	</head>
	<body data-spy="scroll" data-target="#my-navbar">
		<?php require 'php/templates/nav.php';?>
		<div id="main-wrapper" class="container">
			
			<div class="col-left">
				<ul class="projects-nav">
					This text will only be displayed if JSON code has error or did not load
				</ul>
			</div>
			<!-- This is where project content will be displayed -->
			<div class="col-right">
				This text will only be displayed if JSON code has error or did not load
			</div>

		</div> <!-- end main-wrapper -->
		<!--End of container fluid & main-wrapper-->
		<!--Top of page-->
		<p id="back-top">
			<a href="#top"><span></span></a>
		</p>
		<!--end of top of page-->
		<?php require 'php/templates/footer.php';?>
		<?php require 'php/templates/footing.php';?>
		<script src="js/project.js"></script>
	</body>
</html>
