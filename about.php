<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require 'php/templates/heading.php';?>
		<link rel="stylesheet" type="text/css" href="css/about.css">
		<title>Bethany homepage (testing)</title>
	</head>
	<body data-spy="scroll" data-target="#my-navbar">
		<?php require 'php/templates/nav.php';?>
		<div id="main-wrapper" class="container">
			<div class="row row-colored">
				<img src="img/bethany-closeup.jpg" class="col-lg-3 col-md-5 col-sm-12 bethany-img" alt="Bethany Negash Picture">
				<div class="col-lg-9 col-md-7 col-sm-12 mission-content">
					<h2>Our story</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est mi, iaculis fringilla mi interdum, sodales faucibus ex. Aliquam eros eros, venenatis sit amet molestie nec, ultrices sed arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut non urna neque. Maecenas blandit leo ut risus lobortis euismod. Integer porttitor ante justo, vel ornare urna viverra eu. Nunc hendrerit auctor urna, quis tempus ante posuere non.Quisque faucibus vel elit sed eleifend. Aenean ornare mauris quis dolor dictum tempus. Nam vestibulum nisi ut felis porta fermentum. Ut convallis ullamcorper mauris, id laoreet neque luctus quis. Sed feugiat, sapien ut viverra viverra, enim tortor ultricies tortor, eget dapibus velit tellus vel nibh. Aliquam in dignissim sapien. Nullam ac purus in lorem imperdiet ultricies. Sed vitae mi elit. Vivamus libero felis, scelerisque a lobortis quis, faucibus et tortor. Sed eu velit pretium, pharetra est viverra, aliquet felis. Etiam ullamcorper mattis luctus.</p>
					<hr>
					<h2>Our Mission</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est mi, iaculis fringilla mi interdum, sodales faucibus ex. Aliquam eros eros, venenatis sit amet molestie nec, ultrices sed arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut non urna neque. Maecenas blandit leo ut risus lobortis euismod. Integer porttitor ante justo, vel ornare urna viverra eu. Nunc hendrerit auctor urna, quis tempus ante posuere non.Quisque faucibus vel elit sed eleifend. Aenean ornare mauris quis dolor dictum tempus. Nam vestibulum nisi ut felis porta fermentum. Ut convallis ullamcorper mauris, id laoreet neque luctus quis. Sed feugiat, sapien ut viverra viverra, enim tortor ultricies tortor, eget dapibus velit tellus vel nibh. Aliquam in dignissim sapien. Nullam ac purus in lorem imperdiet ultricies. Sed vitae mi elit. Vivamus libero felis, scelerisque a lobortis quis, faucibus et tortor. Sed eu velit pretium, pharetra est viverra, aliquet felis. Etiam ullamcorper mattis luctus.</p>
					<br>
					<hr>
					<h2>How you can help</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est mi, iaculis fringilla mi interdum, sodales faucibus ex. Aliquam eros eros, venenatis sit amet molestie nec, ultrices sed arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut non urna neque. Maecenas blandit leo ut risus lobortis euismod. Integer porttitor ante justo, vel ornare urna viverra eu. Nunc hendrerit auctor urna, quis tempus ante posuere non.Quisque faucibus vel elit sed eleifend. Aenean ornare mauris quis dolor dictum tempus. Nam vestibulum nisi ut felis porta fermentum. Ut convallis ullamcorper mauris, id laoreet neque luctus quis. Sed feugiat, sapien ut viverra viverra, enim tortor ultricies tortor, eget dapibus velit tellus vel nibh. Aliquam in dignissim sapien. Nullam ac purus in lorem imperdiet ultricies. Sed vitae mi elit. Vivamus libero felis, scelerisque a lobortis quis, faucibus et tortor. Sed eu velit pretium, pharetra est viverra, aliquet felis. Etiam ullamcorper mattis luctus.</p>
					<br>
					<hr>
					<div class="about-contact">
						<h2>
							Contact Us:
						</h2>

						<form role="form">
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="name" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="comments">Comments (max 255 words)</label>
								<textarea class="form-control" rows="4" id="comment" maxlength="255"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>

					</div> <!-- end about-contact -->
				</div> <!-- end row -->
			</div> <!-- end row -->
		</div><!--End main-wrapper-->
		<!--Top of page-->
		<!--end of top of page-->
		<?php require 'php/templates/footer.php';?>
		<?php require 'php/templates/footing.php';?>
	</body>
</html>