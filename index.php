<!-- <?php

		require_once("index.php");
		require_once("config.php");

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		} else {
			$id = 1;
		}
		$numPage = 3;
		$from = ($id - 1) * $numPage;
		$select = "SELECT * FROM country LIMIT $from, $numPage";
		$s = mysqli_query($con, $select);


		//   $select2 = "SELECT city.id, city.name, country.id
		//               FROM city, country
		//               WHERE city.countryID = country.id";
		//   $ss = mysqli_query($con, $select2  );



		//   $select3 = "SELECT * FROM hotel";
		//   $sss = mysqli_query($con, $select3  );



		?> -->

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Travel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">

			<a class="navbar-brand" href="index.php"><i class="fa-solid fa-plane fa-spin fa-lg" style="color: #000000;"></i> BUCKLE UP</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#destination-section" class="nav-link"><span>Destination</span></a></li>
					<li class="nav-item"><a href="#hotel-section" class="nav-link"><span>Hotel</span></a></li>
					<li class="nav-item"><a href="#restaurant-section" class="nav-link"><span>Restaurant</span></a></li>
					<li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
					<li class="nav-item"><a href="login.php" class="nav-link"><span>Sign in</span></a></li>

				</ul>
			</div>
		</div>
	</nav>

	<section id="home-section" class="hero">
		<img src="images/blob-shape-3.svg" class="svg-blob" alt="Colorlib Free Template">
		<div class="home-slider owl-carousel">
			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<div class="one-third order-md-last">
							<div class="img" style="background-image:url(images/sedny.jpg);">
								<div class="overlay"></div>
							</div>
							<div class="bg-primary">
								<div class="vr"><span class="pl-3 py-4" style="background-image: url(images/sedny.jpg);">Australia</span></div>
							</div>
						</div>
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading pl-5">Discover Australia</span>
								<h1 class="mb-4 mt-3">Explore Your Travel Destinations like never before</h1>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>

								<p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Discover <span class="ion-ios-arrow-forward"></span></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<div class="one-third order-md-last">
							<div class="img" style="background-image:url(images/ooo.jpg);">
								<div class="overlay"></div>
							</div>
							<div class="vr"><span class="pl-3 py-4" style="background-image: url(images/ooo.jpg);">United States</span></div>
						</div>
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading pl-5">Discover United States</span>
								<h1 class="mb-4 mt-3">The World between your hands </span></h1>
								<p>All the challenges and opportunities travel lays at your feet help you discover who you are in a way that’s only possible on the road.</p>

								<p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Discover <span class="ion-ios-arrow-forward"></span></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center pb-0 pb-mb-5 pt-5 pt-md-0">
				<div class="col-md-12 heading-section ftco-animate">

					<h2 class="mb-4">Where do you want to go?</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="search-wrap-1 ftco-animate p-4">
						<form action="search.php" class="search-property-1">
							<div class="row">
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">From Where?</label>
										<div class="form-field">
											<div class="icon"><span class="ion-ios-search"></span></div>
											<input type="text" class="form-control" placeholder="City or Airport">
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Anywhere</label>
										<div class="form-field">
											<div class="icon"><span class="ion-ios-search"></span></div>
											<input type="text" class="form-control" placeholder="City or Airport">
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Check-in date</label>
										<div class="form-field">
											<div class="icon"><span class="ion-ios-calendar"></span></div>
											<input type="date" class="form-control checkin_date" placeholder="Check In Date">
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Check-out date</label>
										<div class="form-field">
											<div class="icon"><span class="ion-ios-calendar"></span></div>
											<input type="date" class="form-control checkout_date" placeholder="Check Out Date">
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Price Limit</label>
										<div class="form-field">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="" id="" class="form-control">
													<option value="">$500</option>
													<option value="">$1,000</option>
													<option value="">$2,500</option>
													<option value="">$5,000</option>
													<option value="">$10,000</option>
													<option value="">$50,000</option>
													<option value="">$100,000</option>
													<option value="">$200,000</option>
													<option value="">$300,000</option>
													<option value="">$400,000</option>
													<option value="">$500,000</option>
													<option value="">$600,000</option>
													<option value="">$700,000</option>
													<option value="">$800,000</option>
													<option value="">$900,000</option>
													<option value="">$1,000,000</option>
													<option value="">$2,000,000</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg align-self-end">
									<div class="form-group">
										<form action="search.php">
											<div class="form-field">

												<input type="submit" name="search" value="Search" class="form-control btn btn-primary">

											</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</section>

	<!-- <section class="ftco-section ftco-services-2" id="services-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					
					<h2 class="mb-4">Our Services</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services text-center d-block">
						<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-gliding"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Activities</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services text-center d-block">
						<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-world"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Travel Arrangement</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services text-center d-block">
						<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-tour-guide"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Private Guide</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services text-center d-block">
						<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-map-of-roads"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Location Manager</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->



	<section class="ftco-intro img" id="destination-section" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-center">
					<h2>Choose the Perfect Destination</h2>
					<p>We can manage your dream building A small river named Duden flows by their place</p>
					<p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Best Place to Travel</h2>

				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php foreach ($s as $data) : ?>
						<div class="col-md-6 col-lg-4 ftco-animate">
							<div class="project">
								<div class="img">
									<a href="/showById.php?show=<?= $data['id'] ?>">
										<img src="<?= $data['images'] ?>" class="img-fluid fixed-image" alt="">
									</a>
								</div>
								<div class="text">
									<h4 class="price"><span class="old-price mr-2">$5000</span><?= $data['price'] ?></h4>
									<span>15 Days Tour</span>
									<h3><a href="/showById.php?show=<?= $data['id'] ?>"><?= $data['name'] ?></a></h3>
									<div class="star d-flex clearfix">
										<div class="mr-auto float-left">
											<span class="ion-ios-star"></span>
											<span class="ion-ios-star"></span>
											<span class="ion-ios-star"></span>
											<span class="ion-ios-star"></span>
											<span class="ion-ios-star"></span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>

			<div class="pagination-wrapper d-flex justify-content-center">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<?php
						$sel = $con->prepare("SELECT id FROM country");
						$sel->execute();
						$totalPages = ceil(7 / $numPage);
						for ($i = 1; $i <= $totalPages; $i++) {
						?>
							<li class="page-item"><a class="page-link" href="index.php?id=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php } ?>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				</nav>
			</div>






		</div>
		</div>
	</section>

	<!-- <section class="ftco-intro img" id="hotel-section" style="background-image: url(images/bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-center">
					<h2>Choose at $99 Per Night Only</h2>
					<p>We can manage your dream building A small river named Duden flows by their place</p>
					<p class="mb-0"><a href="hotel.php" class="btn btn-white px-4 py-3">Book a room now</a></p>
				</div>
			</div>
		</div>
	</section> -->


	<!-- ######################################################## -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">

					<h2 class="mb-4">Find Nearest Hotel</h2>

				</div>
			</div>
			<div class="row">

				<div class="col-md-6 col-lg-4 ftco-animate">
					<div class="project">
						<div class="img">
							<div class="vr"><span>Sale</span></div>
							<a href="hotel-single.php"><img src="images/hot.jpg" class="img-fluid" alt=""></a>
						</div>
						<div class="text">
							<h4 class="price"><span class="old-price mr-2">$500</span>$400</h4>
							<span>3 nights</span>
							<h3><a href="hotel.php"></a></h3>
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
						<a href="images/hotel-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>

				</div>
				<div class="col-md-6 col-lg-4 ftco-animate">
					<div class="project">
						<div class="img">
							<div class="vr"><span>Sale</span></div>
							<a href="hotel-single.php"><img src="images/bali.jpg" class="img-fluid" alt=""></a>
						</div>
						<div class="text">
							<h4 class="price"><span class="old-price mr-2">$550</span>$400</h4>
							<span>3 nights</span>
							<h3><a href="hotel.php"></a></h3>
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
						<a href="images/hotel-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>

				</div>
				<div class="col-md-6 col-lg-4 ftco-animate">
					<div class="project">
						<div class="img">
							<div class="vr"><span>Sale</span></div>
							<a href="hotel-single.php"><img src="images/clo.jpg" class="img-fluid" alt=""></a>
						</div>
						<div class="text">
							<h4 class="price"><span class="old-price mr-2">$800</span>$400</h4>
							<span>3 nights</span>
							<h3><a href="hotel.php"></a></h3>
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
						<a href="images/hotel-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>

				</div>

				<!-- <div class="row justify-content-center pb-5 pt-5">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Rooms &amp; Suites</span>
						<h2 class="mb-4">Greece Best Rooms Offer</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
					</div> -->
			</div>
			<div class="row">
				<div class="col-md-12 room-wrap">
					<div class="row">
						<div class="col-md-7 d-flex ftco-animate">
							<div class="img align-self-stretch" style="background-image: url(images/bed.jpg);"></div>
						</div>
						<div class="col-md-5 ftco-animate">
							<div class="text py-5">
								<h3><a href="hotel-single.php">Classic Balcony Room</a></h3>
								<p class="pos">from <span class="price">$99.00</span>/night</p>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<p><a href="/destination.php" class="btn btn-secondary">Details</a> <a href="/destination.php" class="btn btn-primary">Harry up to book the hotel now</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 room-wrap room-wrap-thumb mt-4">
					<div class="row">
						<div class="col-md-3 ftco-animate">
							<a href="#" class="d-flex thumb">
								<div class="img align-self-stretch" style="background-image: url(images/room-1.jpg);"></div>
								<div class="text pl-3 py-3">
									<h3>Classic Balcony Room</h3>
								</div>
							</a>
						</div>
						<div class="col-md-3 ftco-animate">
							<a href="#" class="d-flex thumb">
								<div class="img align-self-stretch" style="background-image: url(images/room-2.jpg);"></div>
								<div class="text pl-3 py-3">
									<h3>Classic Balcony Room</h3>
								</div>
							</a>
						</div>
						<div class="col-md-3 ftco-animate">
							<a href="#" class="d-flex thumb">
								<div class="img align-self-stretch" style="background-image: url(images/room-3.jpg);"></div>
								<div class="text pl-3 py-3">
									<h3>Classic Balcony Room</h3>
								</div>
							</a>
						</div>
						<div class="col-md-3 ftco-animate">
							<a href="#" class="d-flex thumb">
								<div class="img align-self-stretch" style="background-image: url(images/room-4.jpg);"></div>
								<div class="text pl-3 py-3">
									<h3>Classic Balcony Room</h3>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section">
		<img src="images/iii.jpg" class="svg-blob" alt="Colorlib Free Template">
		<img src="images/iii.jpg" class="svg-blob-2" alt="Colorlib Free Template">
		<div class="container">
			<div class="row justify-content-center pb-3">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">

					<h2 class="mb-4">What Client Says</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/engy.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4 pb-5">
									<p class="mb-4">this Website is totally amazing.</p>
									<p class="name">Engy</p>
									<span class="position">Doctor</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/mlosa.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4 pb-5">
									<p class="mb-4">I'm in the Airport right now thank you.</p>
									<p class="name">Mallosa</p>
									<span class="position">chef</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/hos.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4 pb-5">
									<p class="mb-4">traveled so many times because of this website.</p>
									<p class="name">Toma</p>
									<span class="position">Artist</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/dora.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4 pb-5">
									<p class="mb-4"></p>
									<p class="name">TheodorAa Maher</p>
									<p class="name">love this website so much</p>
									<span class="position">chef</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/ayman.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4 pb-5">
									<p class="mb-4">I'm under the water becouse this amazing website.</p>
									<p class="name">aymoon</p>
									<span class="position">singer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="restaurant-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">

					<h2 class="mb-4">Near Resturant</h2>

				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 ftco-animate">
					<div class="project">
						<div class="img">
							<img src="images/resto-1.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text">
							<h4 class="price"><span class="mr-2">menu start at</span>$199.00</h4>
							<span>Bern, Swetzerland</span>
							<h3><a href="project.php">Resto Bar, Swetzerland</a></h3>
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
						<a href="images/resto-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 ftco-animate">
					<div class="project">
						<div class="img">
							<img src="images/resto-2.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text">
							<h4 class="price"><span class="mr-2">menu start at</span>$150.00</h4>
							<span>Bern, Swetzerland</span>
							<h3><a href="project.php">Resto Bar, Swetzerland</a></h3>
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
						<a href="images/resto-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 ftco-animate">
					<div class="project">
						<div class="img">
							<img src="images/resto-3.jpg" class="img-fluid" alt="">
						</div>
						<div class="text">
							<h4 class="price"><span class="mr-2">menu start at</span>$120.00</h4>
							<span>Bern, Swetzerland</span>
							<h3><a href="project.php">Resto Bar, Swetzerland</a></h3>
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
						<a href="images/resto-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section bg-light" id="blog-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4">Our Blog</h2>

				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-6 col-lg-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text float-right d-block">
							<div class="d-flex align-items-center pt-2 mb-4 topp">
								<div class="one mr-2">
									<span class="day">20</span>
								</div>
								<div class="two">
									<span class="yr">2023</span>
									<span class="mos">July</span>
								</div>
							</div>
							<h3 class="heading"><a href="single.php">Going to Adventure to the wohle world</a></h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text float-right d-block">
							<div class="d-flex align-items-center pt-2 mb-4 topp">
								<div class="one mr-2">
									<span class="day">9</span>
								</div>
								<div class="two">
									<span class="yr">2023</span>
									<span class="mos">july</span>
								</div>
							</div>
							<h3 class="heading"><a href="single.php">Why Lead Generation is Key for Business Growth</a></h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text float-right d-block">
							<div class="d-flex align-items-center pt-2 mb-4 topp">
								<div class="one mr-2">
									<span class="day">12</span>
								</div>
								<div class="two">
									<span class="yr">2023</span>
									<span class="mos">July</span>
								</div>
							</div>
							<h3 class="heading"><a href="single.php">Why Lead Generation is Key for Business Growth</a></h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2">Admin</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4">Contact Me</h2>
				</div>
			</div>

			<div class="row block-9">
				<div class="col-md-7 order-md-last d-flex">
					<form action="#" class="bg-light p-4 p-md-5 contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						</div>
					</form>

				</div>

				<div class="col-md-5 d-flex">
					<div class="row d-flex contact-info mb-5">
						<div class="col-md-12 ftco-animate">






						</div>
						<div class="col-md-12 ftco-animate">
							<div class="box p-2 px-3 bg-light d-flex">
								<div class="icon mr-3">
									<span class="icon-phone2"></span>
								</div>
								<div>
									<h3 class="mb-3">Contact Number</h3>
									<p><a href="tel://1234567920">+ 1235 2355 98</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-12 ftco-animate">
							<div class="box p-2 px-3 bg-light d-flex">
								<div class="icon mr-3">
									<span class="icon-paper-plane"></span>
								</div>
								<div>
									<h3 class="mb-3">Email Address</h3>
									<p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-12 ftco-animate">
							<div class="box p-2 px-3 bg-light d-flex">
								<div class="icon mr-3">
									<span class="icon-globe"></span>
								</div>
								<div>
									<h3 class="mb-3">Website</h3>
									<p><a href="#">yoursite.com</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div id="map" class="bg-white"></div>
	</section>

	<section class="ftco-gallery">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
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
								<li><span class="icon icon-map-marker"></span><span class="text">Mountain View, San Francisco, California, USA</span></li>
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
						</script> All rights reserved | Mazen alaa <i class="icon-heart color-danger" aria-hidden="true"></i>
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


	<script src="js/main.js"></script>

</body>

</html>