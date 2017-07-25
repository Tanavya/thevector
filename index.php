<?php 
	$page_id = "index";
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
					<a href="http://localhost:8888/vanilla-core-2-3-1/">
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box" style="margin-left: 120px;"> 
						<div class="fh5co-feature-icon">
							<i class="ti-comments"></i>
						</div>
						<h3 class="heading">Forum</h3>
						<p style="color: #8B969C">Join our community to discuss stimulating math problems and get your doubts resolved by our proficient moderators. </p>
					</div>
					</a>
					
					<a href="tutoring.php">
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box" style="float: right; margin-right: 120px;"> 
						<div class="fh5co-feature-icon">
							<i class="ti-ruler-pencil"></i>
						</div>
						<h3 class="heading">Tutoring</h3>
						<p style="color: #8B969C">Enter your free periods and we will find you an available tutor.</p>
					</div>
					</a>
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

		<?php
			include "footer.php";
		?>

	</body>
</html>
