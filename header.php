<?php 
  session_start();
  include "database_handler.php";
 ?>
 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Slant &mdash; The Vector </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A math resource website for students, by students." />
	<meta name="keywords" content="math, maths resources, math help, mathematics, math forum, math challenges, dpsi, maths, dpsi maths" />
	<meta name="author" content="Vaishnavi Gupta" />
  	<meta name="author" content="Tanavya Dimri" />
  	
  	<!-- google sign in-->
  	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="274836840827-7emli48pvauq3ibm5m3irqtua6t135bb.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  	<link rel="shortcut icon" href="favicon.ico">

  	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Theme Style -->

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<header id="fh5co-header-section" role="header" class="" >
			<div class="container">
				<!-- <div id="fh5co-menu-logo"> -->
					<!-- START #fh5co-logo -->
				
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation" style="float: left; margin-left: 38px;">
						
						
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="#">About Us</a>
							</li>
							<li>
								<a data-target="#" href="resources.php" class="fh5co-sub-ddown" >Resources</a>
								<ul class="fh5co-sub-menu-1">
								 	<li><a href="class 6.php">Class 6</a></li>
								 	<li><a href="class 7.php">Class 7</a></li>
								 	<li><a href="class 8.php">Class 8</a></li>
								 	<li><a href="IGCSE.php">IGCSE</a></li>
								</ul>
								<ul class="fh5co-sub-menu-2">
									<li><a href="a level pure math.php">A-Level Pure Mathematics</a></li>
								 	<li><a href="a level mechanics.php">A-Level Mechanics</a></li>
								 	<li><a href="a level statistics.php">A-Level Statistics</a></li> 
								</ul>
							</li>
							<li><a href="#">Challenges</a></li>
							<li><a href="#">Forum</a></li>
							<li><a href="#">Tutoring</a></li>
							<li class="fh5co-special">
							<?php
								if (isset($_SESSION['LoggedIn'])) {
									echo "Welcome <a href = 'profile.php'" . $_SESSION['UserName'] . "</a>";
								}
								else {
									echo "<a href='login.php'>Log in</a>";
								}
							?>
							</li>
						</ul>
					</nav>
			</div>
		</header>
	</body>
</html>