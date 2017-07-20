<?php 
 	include "header.php";
?>
<!DOCTYPE html>
	<head>
	<link rel="stylesheet" href="css/style-main.css">
	</head>
	<body class = "inner-page">		
		<div id="fh5co-hero">
			<a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
							<h1 class="to-animate hero-animate-1">The Vector.</h1>
							<h2 class="to-animate hero-animate-2">A math website for students, by students</h2>
							<?php
								if (isset($_SESSION['LoggedIn'])) {
									echo "<h2 class = 'to-animate hero-animate-2'> Welcome " . $_SESSION['UserName'] . "</p>";
								}
							    else {
									echo '<p class="to-animate hero-animate-3"><a href="login.php" class="btn btn-outline btn-lg">Log In</a></p>';
								}
							?>
							</p>
						</div>
					</div>
				</div>
			</div>		
		</div>
		
		<div id="fh5co-main">
			<div class="container">
			
				<div class="row" id="fh5co-features" >
					<a href="resources.php">
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box" style="margin-left: 120px;">
						<div class="fh5co-feature-icon">
							<i class="ti-book"></i>
						</div>
						<h3 class="heading">Resources</h3>
						<p style="color: #8B969C">Comprehensive study material for students from classes 6 to 12.</p>
					</div>
					</a>
					<!--<div class="clearfix visible-sm-block"></div>-->

					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box" style="float: right; margin-right: 120px;"> 
						<div class="fh5co-feature-icon">
							<i class="ti-medall"></i>
						</div>
						<h3 class="heading">Challenges</h3>
						<p>Answer challenging questions, gain points (and extra marks in your exams!), and go up levels while competing with fellow students. </p>
					</div>
					<div class="clearfix visible-md-block visible-lg-block"></div>
					<!--<div class="clearfix visible-md-block visible-lg-block"></div>-->
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box" style="margin-left: 120px;"> 
						<div class="fh5co-feature-icon">
							<i class="ti-comments"></i>
						</div>
						<h3 class="heading">Forum</h3>
						<p>Join our community to discuss stimulating math problems and get your doubts resolved by our proficient moderators. </p>
					</div>
					
					
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box" style="float: right; margin-right: 120px;"> 
						<div class="fh5co-feature-icon">
							<i class="ti-ruler-pencil"></i>
						</div>
						<h3 class="heading">Tutoring</h3>
						<p>Enter your free periods and we will find you an available tutor.</p>
					</div>
					
<!--
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box">
						<div class="fh5co-feature-icon">
							<i class="ti-shopping-cart"></i>
						</div>
						<h3 class="heading">Shop</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam. </p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam. </p>
					</div>

					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="ti-palette"></i>
						</div>
						<h3 class="heading">Pallete</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.</p>
					</div>
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="ti-truck"></i>
						</div>
						<h3 class="heading">Deliver</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.</p>
					</div>-->
				</div>
				<!-- END row -->

				<div class="fh5co-spacer fh5co-spacer-md"></div>
				<!-- End Spacer -->
				
		

				<div class="row" id="fh5co-works">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-section-heading work-box">
						<h2 class="fh5co-lead">About the club</h2>
						<p class="fh5co-sub">Started in 2017, The Vector is a Mathematics Society started by the students of DPS International. The aim of this initiative is to make math enjoyable for students, as well as to ensure that every student receives adequate help regarding their doubts in the subject.</p>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					

				</div>
				<!-- END row -->
				
				<div class="fh5co-spacer fh5co-spacer-md"></div>
				<div class="row">
					<!-- Start Slider Testimonial -->
	            <h2 class="fh5co-uppercase-heading-sm text-center animate-box">Quotes</h2>
	            <div class="fh5co-spacer fh5co-spacer-xs"></div>
	            <div class="owl-carousel-fullwidth animate-box">
	            <div class="item">
	              <p class="text-center quote">&ldquo;quote 1 etc etc &rdquo; <cite class="author">&mdash; author</cite></p>
	            </div>
	            <div class="item">
	              <p class="text-center quote">&ldquo;quote 2 etc etc &rdquo;<cite class="author">&mdash; author</cite></p>
	            </div>
	            <div class="item">
	              <p class="text-center quote">&ldquo;quote 3 etc etc &rdquo;<cite class="author">&mdash; author</cite></p>
	            </div>
	          </div>
	           <!-- End Slider Testimonial -->
				</div>
				<!-- END row -->
				<div class="fh5co-spacer fh5co-spacer-md"></div>

			</div>
			<!-- END container -->

		
		</div>
		<!-- END fhtco-main -->


		<footer role="contentinfo" id="fh5co-footer">
			<a href="#" class="fh5co-arrow fh5co-gotop footer-box"><i class="ti-angle-up"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">About us</h3>
						<p>Started in 2017, The Vector is a Mathematics Society started by the students of DPS International. Our aim is to make math enjoyable for students, and to make math resources and help more accessible.</p>
						<p><a href="login.php" class="btn btn-outline btn-sm">Log In</a></p>

					</div>
					<div class="col-md-4 col-sm-6 footer-box" style="float:rights">
						<h3 class="fh5co-footer-heading">Links</h3>
						<ul class="fh5co-footer-links">
							<li><a href="#">About Us</a></li>
							<li><a href="resources.php">Resources</a></li>
							<li><a href="#">Challenges</a></li>
							<li><a href="#">Forum</a></li>
							<li><a href="#">Tutoring</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12 footer-box">
						<h3 class="fh5co-footer-heading">Get in touch</h3>
						<ul class="fh5co-social-icons">
							
							<li><a href="#"><i class="ti-google"></i></a></li>
							<li><a href="#"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#"><i class="ti-facebook"></i></a></li>	
							<li><a href="#"><i class="ti-instagram"></i></a></li>
							<li><a href="#"><i class="ti-dribbble"></i></a></li>
						</ul>
					</div>
					
					
				</div>
				<!-- END row -->
				<div class="fh5co-spacer fh5co-spacer-md"></div>
			</div>
		</footer>
			
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-scroll.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>