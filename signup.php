<?php 
	$page_id = 'signup';
 	include "header.php";
?>
<!DOCTYPE html>
	<head>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body class="inner-page">
		
		<div id="fh5co-hero">
			<a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
						  <h1 class="to-animate hero-animate-1">Sign Up</h1>
						  <h2 class="to-animate hero-animate-2">-</h2>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<div id="fh5co-main">
			<div class="container">
				<div class="row">

					<div class="fh5co-spacer fh5co-spacer-sm"></div>	
					<div class="col-md-8">
						<form action="signup_script.php" method="POST">
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="First Name" id="first" type="text" class="form-control input-lg" name = "first">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Last Name" id="last" type="text" class="form-control input-lg" name = "last">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Username" id="uid" type="text" class="form-control input-lg" name = "uid">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Email" id="email" type="text" class="form-control input-lg" name = "email">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Password" id="pwd" type="password" class="form-control input-lg"
									name = "pwd">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<!--TODO add dropdown for class-->
									<input placeholder="Class" id="class" type="text" class="form-control input-lg"
									name = "class">
								</div>	
							</div>
							<!--
							<div class="col-md-12">
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea placeholder="Message" id="message" class="form-control input-lg" rows="3"></textarea>
								</div>	
							</div>-->
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-lg " value="Sign Up">
								</div>	
							</div>
						</form>	
						<p class="col-md-12">
						<?php
							if (isset($_SESSION['error_msg'])) {
								echo $_SESSION['error_msg'];
								unset($_SESSION['error_msg']);
							}
						?>
						</p> 
						
					</div>
					<div class="col-md-4">
						<h3>Need Help?</h3>
						<p>Contact the administrator!</p>
						<p>
							<a href="#">dpsi11@gmail.com</a>
						</p>
					</div>

					<div class="fh5co-spacer fh5co-spacer-md"></div>	

				</div>
			</div>

		
		</div>
		<!-- END fhtco-main -->


		<?php
			include "footer.php";
		?>

	</body>
</html>
