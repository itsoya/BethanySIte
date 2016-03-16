<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require 'php/templates/heading.php';?>
		<link rel="stylesheet" type="text/css" href="css/donate.css">
		<title>Bethany homepage (testing)</title>
	</head>
	<?php require 'php/templates/nav.php';?>
	<body data-spy="scroll" data-target="#my-navbar">
		<div id="main-wrapper" class="container">
			<div class="row">
				<div class="col-md-12 row donate-bkgd">
					<div class="col-md-6">
						<h1 class="donate-title">
							Help Us <br> Change Lives
						</h1>
					</div>
			        <div class="col-md-6 overlay-content">
						<h3>How we use the money</h3>
						<p class="donate-p">
							<br>
							Turkey cow jerky corned beef swine ground round chicken beef ribs bacon ham hock ribeye kevin short loin tongue shankle. Pork chop ham cow corned beef, kevin brisket tongue drumstick pastrami tenderloin bresaola alcatra short ribs capicola.Strip steak shankle venison landjaeger, porchetta pork belly pig ground round filet mignon corned beef prosciutto rump. Frankfurter ribeye swine tenderloin. Boudin tenderloin doner pancetta short loin capicola bresaola ham hock. Flank tri-tip jowl ham hock bacon sausage. Jerky tongue cow bacon. Cow tri-tip fatback, shank pig picanha leberkas t-bone chuck prosciutto pork loin shoulder ham shankle.
						</p>
						<h3></h3>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				            <input type="hidden" name="cmd" value="_donations">
				            <input type="hidden" name="business" value="minhdi11@gmail.com">
				            <input type="hidden" name="lc" value="US">
				            <input type="hidden" name="item_name" value="Bethany Negash Foundation">
				            <input type="hidden" name="no_note" value="0">
				            <input type="hidden" name="currency_code" value="USD">
				            <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
				            <input type="image" src="img/paypal-donate.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" class="donate-btn">
				            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				        </form>

						<div class="overlay">
			        	</div> <!-- end overlay row -->
			        </div> <!-- end overlay content -->
				</div>
			</div>
		</div>
		<!--End of container fluid-->
		<!--Top of page-->
		<p id="back-top">
			<a href="#top"><span></span></a>
		</p>
		<!--end of top of page-->
		<?php require 'php/templates/footer.php';?>
		<?php require 'php/templates/footing.php';?>
	</body>
</html>
