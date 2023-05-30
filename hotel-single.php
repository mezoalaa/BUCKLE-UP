<?php
require_once("config.php");
require_once("sheard/head.php");
$sub_ID = $_GET['show'];


// $selc = "SELECT * FROM `hoelsub` where hotID=$subHotel_ID";




$sql = "SELECT * FROM `hoelsub` WHERE  hotID=$sub_ID";
$u = mysqli_query($con, $sql);

?>









<!DOCTYPE html>
<html lang="en">

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fa-solid fa-hotel fa-spin" style="color: #000000;"></i> BUCKLE UP</a>
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


<br>
  
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 room-wrap">
          <div class="row">
            <?php foreach ($u as $data) : ?>



              <div class="col-md-7 d-flex ftco-animate">
                 <div class="img align-self-stretch" style="background-image: url(<?= $data['subImag'] ?>)"></div>
                <!-- <a href="payment.php?show=<?= $data['subID'] ?>"><img src="<?= $data['subImag'] ?>" class="img-fluid" alt=""></a> -->

              </div>
              <div class="col-md-5 ftco-animate">
                <div class="text py-5">
                  <h3><a href="payment.php?show=<?= $data['subID'] ?>"><?= $data['subName'] ?></a></h3>
                  <p class="pos">from <span class="price"></span><?= $data['subPrice'] ?>/night</p>
                  <p><a href="payment.php?show=<?= $data['subID'] ?>" class="btn btn-secondary">Details</a> <a href="payment.php?show=<?= $data['subID'] ?>" class="btn btn-primary">Book now</a></p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-12 tour-wrap pt-5 mt-4">
          <h3 class="mb-5" style="border-bottom: 1px solid #f2f2f2;">
            <h3><?= $data['subName'] ?></h3>
            <span><?= $data['subAddress'] ?></span>
          </h3>
          <div id="map"></div>
        </div> 
            
      <?php endforeach;?>
     </div>
</section>
 


  <div class="col-md-12 tour-wrap pt-5 mt-4">
    <h3 class="mb-5" style="border-bottom: 1px solid #f2f2f2;">Reviews &amp; Ratings</h3>
    <form method="post" class="star-rating">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">
          <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
        </label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">
          <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
        </label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">
          <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
        </label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">
          <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
        </label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">
          <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
        </label>
      </div>
    </form>
  </div>

  <div class="col-md-12 tour-wrap">
    <div class="pt-5">
      <h3 class="mb-5" style="border-bottom: 1px solid #f2f2f2;">3 Comments</h3>
      <ul class="comment-list">
        <li class="comment">
          <div class="vcard bio">
            <img src="images/person_1.jpg" alt="Image placeholder">
          </div>
          <div class="comment-body">
            <h3>John Doe</h3>
            <div class="meta">October 03, 2018 at 2:21pm</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
            <p><a href="#" class="reply">Reply</a></p>
          </div>
        </li>

        <li class="comment">
          <div class="vcard bio">
            <img src="images/person_1.jpg" alt="Image placeholder">
          </div>
          <div class="comment-body">
            <h3>John Doe</h3>
            <div class="meta">October 03, 2018 at 2:21pm</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
            <p><a href="#" class="reply">Reply</a></p>
          </div>

          <ul class="children">
            <li class="comment">
              <div class="vcard bio">
                <img src="images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">October 03, 2018 at 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Reply</a></p>
              </div>


              <ul class="children">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 03, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">October 03, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="comment">
          <div class="vcard bio">
            <img src="images/person_1.jpg" alt="Image placeholder">
          </div>
          <div class="comment-body">
            <h3>John Doe</h3>
            <div class="meta">October 03, 2018 at 2:21pm</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
            <p><a href="#" class="reply">Reply</a></p>
          </div>
        </li>
      </ul>
      <!-- END comment-list -->

      <div class="comment-form-wrap pt-5">
        <h3 class="mb-5">Leave a comment</h3>
        <form action="#" class="p-5 bg-light">
          <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input type="url" class="form-control" id="website">
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
          </div>

        </form>
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
                </script> All rights reserved | Mazen alaa </p>
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