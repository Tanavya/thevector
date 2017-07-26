<?php 
	session_start();
	$page_id = 'challenges';
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
						  <h1 class="to-animate hero-animate-1">Challenges</h1>
						  <h2 class="to-animate hero-animate-2">Answer challenge questions and win points for your house!</h2>
						</div>
					</div>
				</div>
			</div>		
		</div>
		<div class="col-md-12 animate-box" style="margin-top:140px; height:100em;">
			<div id="fh5co-tab-feature-vertical" class="fh5co-tab">
				<ul class="resp-tabs-list hor_1">
					<li>Challenge Problem</li>
					<li>Leaderboard</li>
				</ul>
				<div class="resp-tabs-container hor_1">
					<div>
						<div class="row">
							<div class="col-md-12">
								<h2 class="h3">Challenge Problem</h2>
							</div>
							<div class="col-md-6" style = "width: 100%;">
								<iframe src="
								https://docs.google.com/forms/d/e/1FAIpQLSc02zXEfgshWgEUBR0ZfrkFjTWq2NyW9S702yDaRfVXVrAnWw/viewform?c=0&w=1&includes_info_params=true
								&widget=false&headers=false&chrome=false" 
								style = "width: 100%; height: 80em;"></iframe>
							</div>
						</div>
					</div>
					<div>
						<div class="row">
							<div class="col-md-12">
								<h2 class="h3">Leaderboard</h2>
							</div>
							<div class="col-md-6" style = "width: 100%;">
								<p>The leaderboard will be updated after your answers are checked.</p>
								<iframe src="https://docs.google.com/spreadsheets/d/15vTtDTwAlrfmGUDNv2h6JuRXBF-zrv04NyIsULgRfXY/pubhtml?widget=false&headers=false&chrome=false" style = "width: 100%; height: 1000px;"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
					
		<!--
		<div id="fh5co-main">
			<div class="container" style = "width:79%;">
				<div class="row">
				<iframe src="
					
				https://docs.google.com/forms/d/e/1FAIpQLSc02zXEfgshWgEUBR0ZfrkFjTWq2NyW9S702yDaRfVXVrAnWw/viewform?c=0&w=1&includes_info_params=true
					
				&widget=false&headers=false&chrome=false" style = "width: 100%; height: 1000px;"></iframe>
				
				<p>Leaderboard will be updated after your answers are checked.</p>
<iframe src="https://docs.google.com/spreadsheets/d/15vTtDTwAlrfmGUDNv2h6JuRXBF-zrv04NyIsULgRfXY/pubhtml?widget=false&headers=false&chrome=false" style = "width: 100%; height: 1000px;"></iframe>
				</div>
			</div>
		</div>
		-->
		<!-- END fhtco-main -->


		<?php
			include "footer.php";
		?>

	</body>
</html>
