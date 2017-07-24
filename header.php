<?php 
	if (session_id() == "") session_start();
	include "database_handler.php";
	if (isset($exit_immediately)) {
		unset($exit_immediately);
		exit();
	}
 ?>
 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<if
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
	<link rel="stylesheet" href="css/style.css">

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
					<nav id="fh5co-menu-wrap" role="navigation" class = "nav-menu" style="float: left; margin-left: 38px;">
						
						<ul class="sf-menu" id="fh5co-primary-menu">
						
							<li <?php if ($page_id == 'index') echo "class = active"; ?>>
								<a href="index.php">Home</a> 
							</li>
							
							<li <?php if ($page_id == 'about_us') echo "class = active"; ?>>
								<a href="#">About Us</a>
							</li>
							
							<li <?php if ($page_id == 'resources') echo "class = active"; ?>>
								
								<a data-target="#" href="resources.php" class="fh5co-sub-ddown" >Resources</a>
								<ul class="fh5co-sub-menu-1">
							 	
								 	<li <?php if ($page_id == 'class 6') echo "class = active"; ?>>
										<a href="class 6.php">Class 6</a>
									</li>
									
								 	<li <?php if ($page_id == 'class 7') echo "class = active"; ?>>
								 		<a href="class 7.php">Class 7</a>
								 	</li>
								 	
								 	<li <?php if ($page_id == 'class 8') echo "class = active"; ?>>
								 		<a href="class 8.php">Class 8</a>
								 	</li>
								 	
								 	<li <?php if ($page_id == 'IGCSE') echo "class = active"; ?>>
								 		<a href="IGCSE.php">IGCSE</a>
								 	</li>
								 	
								</ul>
								
								<ul class="fh5co-sub-menu-2">
						
									<li <?php if ($page_id == 'a level pure math') echo "class = active"; ?>> 
										<a href="a level pure math.php">A-Level Pure Mathematics</a>
									</li>
									
								 	<li <?php if ($page_id == 'a level mechanics') echo "class = active"; ?>>
								 		<a href="a level mechanics.php">A-Level Mechanics</a>
									</li>
								 	
								 	<li <?php if ($page_id == 'a level statistics') echo "class = active"; ?>>
								 		<a href="a level statistics.php">A-Level Statistics</a>
									</li>
								 	
								</ul>
								
							</li>
							<li><a href="#">Challenges</a></li>
							<li><a href="#">Forum</a></li>
							<li><a href="tutoring.php">Tutoring</a></li>
							<?php
								
								if (isset($_SESSION['LoggedIn'])) {
									$user_name = $_SESSION['UserName'];
									echo "
									<li>
										<a href = 'profile.php' class='fh5co-sub-ddown'> $user_name </a>
										<ul class = 'user-sub-menu'>
											<li><a href = 'profile.php'>Your profile</a></li>
											<li><a href = 'logout.php'>Log out</a></li>
										</ul>
									</li>
									";
								}
								else {
									echo "<li class='fh5co-special'><a href='login.php'>Log in</a></li>";
								}
								
							?>
						</ul>
					</nav>
			</div>
		</header>
	</body>
</html>