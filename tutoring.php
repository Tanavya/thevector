<?php 
 	include "header.php";
?>
<!DOCTYPE html>
	<head>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body class="inner-page">
		<style>
			table {
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}

			td, th {
				border: 1px solid #000099;
				text-align: center;
				padding: 8px;
				width: 300px;
			}
			thead {
				background-color: #dddddd;

			}
		</style>
		<div id="fh5co-hero">
			<a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
							<h1 class="to-animate hero-animate-1">Tutoring</h1>
							<h2 class="to-animate hero-animate-2">We'd love to help you out.</h2>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<div id="fh5co-main">
			<div class="container">
				<div>
					<div class="col-md-8">
						<form action="#" method="post">
							<?php
								if (!isset($_SESSION['LoggedIn'])) {
									print "<p style = 'color: red'>You need to be logged in first!</p>";
								}   
							?>
							<table>
								<thead>
									<tr>
										<th></th>
										<th> 1 </th>
										<th> 2 </th>
										<th> 3 </th>
										<th> 4 </th>
										<th> 5 </th>
										<th> 6 </th>
										<th> 7 </th>
										<th> 8 </th>
										<th> 9 </th>
										<th> 10 </th>
								  </tr>
								</thead>
								<tbody>
									<tr>
										<td>Monday</td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
									</tr>
									<tr>
										<td>Tueday</td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
									</tr>
									<tr>
										<td>Wednesday</td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
									</tr>
									<tr>
										<td>Thursday</td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
									</tr>
									<tr>
										<td>Friday</td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
										<td><input type="checkbox" /></td>
									</tr>
								</tbody>
							</table>
							</br>
							<div>
								<div class="form-group">
									
									<input 
										<?php
											if (!isset($_SESSION['LoggedIn'])) {
												echo " disabled=true ";
											}   
										?>
									
									type="submit" class="btn btn-primary btn-lg " value="Send">

								</div>	
							</div>
						</form>	
						
					</div>
					<div class="col-md-4">
						<h3>Need Help?</h3>
						<p> Select your free periods in the week and we'll try our best to assign you an available tutor!</p>
						<p>
							<a href="#">dpsi.thevector@gmail.com</a>
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
