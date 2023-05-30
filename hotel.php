<?php
require_once("config.php");
require_once("sheard/head.php");
$Hotel_ID = $_GET['show'];


$select = "SELECT * FROM `newcityhotel` where Cityid=$Hotel_ID";


$s = mysqli_query($con, $select);
?>





<!DOCTYPE html>
<html lang="en">

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php"><i class="fa-solid fa-route fa-spin" style="color: #000000;"></i> BUCKLE UP</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="index.php#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="index.php#services-section" class="nav-link"><span>Services</span></a></li>
					<li class="nav-item"><a href="index.php#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="index.php#destination-section" class="nav-link"><span>Destination</span></a></li>
					<li class="nav-item"><a href="index.php#hotel-section" class="nav-link"><span>Hotel</span></a></li>
					<li class="nav-item"><a href="index.php#restaurant-section" class="nav-link"><span>Restaurant</span></a></li>
					<li class="nav-item"><a href="index.php#blog-section" class="nav-link"><span>Blog</span></a></li>
					<li class="nav-item"><a href="index.php#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Find Your Hotel</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Hotel <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section> -->

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<?php foreach ($s as $data) : ?>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="project">
							<div class="img">
								<a href="hotel-single.php?show=<?= $data['Hc'] ?>"><img src="<?= $data['hotImg'] ?>" class="img-fluid" alt=""></a>
							</div>
							<div class="text">
								<h4 class="price"><span class="old-price mr-2"></span><?= $data['hotPrice'] ?></h4>
								<span>1 night</span>
								<h3><?= $data['Hname'] ?></h3>
								<span><?= $data['haAdD'] ?></span>

								<div class="star d-flex clearfix">
									<div class="mr-auto float-left">
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
									</div>
									<div class="float-right">
										<span class="rate"><a href="#">(120)</a></span>
									</div>
								</div>
							</div>
							<a href="hotel-single.php?show=<?= $data['Hc'] ?>" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="icon-expand"></span>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<div class="row mt-5">
		<div class="col text-center">
			<div class="block-27">
				<ul>
					<li><a href="#">&lt;</a></li>
					<li class="active"><span>1</span></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&gt;</a></li>
				</ul>
			</div>
		</div>
	</div>
	</div> <!-- end -->




	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">About <span><a href="index.php">BUCKLE UP</a></span></h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Information</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Online Enquiry</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>General Enquiry</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Booking</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Privacy</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Refund Policy</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Call Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Experience</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Adventure</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Hotel and Restaurant</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Beach</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Nature</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Camping</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Party</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | Mazen alaa <i class="icon-heart color-danger" aria-hidden="true">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>

	<script src="js/main.js"></script>

</body>

</html>