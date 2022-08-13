<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>UVProtect</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="no-sidebar is-preload">
		
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header-wrapper">
				<div id="header" class="container">

					<!-- Logo -->
						<h1 id="logo"><a href=".">UVProtect</a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li>
									<a href="check.html">Check UV level</a>
								</li>
								<li class="break">
									<a href="protection.html">Protect yourself</a>
								</li>
							</ul>
						</nav>
				</div>

			</div>
			<?php include "/dbinfo.inc.php"; ?>
			<!-- Main -->
				<div class="wrapper">
					<div class="container" id="main">

						<!-- Content -->
							<article id="content">
								
								<div class="row aln-center">
									<section class="col-12-narrower feature">
										
										<header>
											<h2>Enter a Suburb to find the UV index right now</h2>

										</header>
										<form method="post">
											<div class="row aln-center">
												<div class="col-4">
													<input list='suburb-name' id='suburb-name-id' name="name" placeholder="Melbourne" type='text'/>
													<datalist id="suburb-name">
														<option value="Albury">Albury</option>
														<option value="Ballarat">Ballarat</option>
														<option value="Bendigo">Bendigo</option>
														<option value="Box Hill">Box Hill</option>
														<option value="Brunswick">Brunswick</option>
														<option value="Clayton">Clayton</option>
														<option value="Camberwell">Camberwell</option>
														<option value="Caulfield">Caulfield</option>
														<option value="Dandenong">Dandenong</option>
														<option value="Frankston">Frankston</option>
														<option value="Geelong">Geelong</option>
														<option value="Glen Waverley">Glen Waverley</option>
														<option value="Mornington">Mornington</option>
														<option value="Mount Buller">Mount Buller</option>
														<option value="Pakenham">Pakenham</option>
														<option value="Phillip Island">Phillip Island</option>
														<option value="Torquay">Torquay</option>
													</datalist>
												</div>
												<div class="col-1">
													<ul class="actions ">
														<li><a href="#" id="btn" class="button" onclick=get_data(this)>Search</a></li>
													</ul>
												</div>
											</div>
											<div class="row aln-center">
												<h2 class="UV_value" id="UV-value"></h2>
											</div>
										</form>
										
										<?php
										$database = mysqli_select_db($connection);
											$result = mysqli_query($conn, "SELECT * FROM suburb LIMIT 10");
											while($query_data = mysqli_fetch_row($result)) {
												echo $query_data[0], "<br>",
													$query_data[1], "<br>",
													$query_data[2], "<br>",
													$query_data[3], "<br>",
													$query_data[4], "<br>",
													$query_data[5], "<br>";
											}
									?>
									</section>
									

						
					</div>
				</div>

				<!-- Features 1 -->
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<section class="col-12 feature">
								<div class="image-wrapper first">
									<a href="#" class="image centered"><img src="images/pic07.jpg" alt="" /></a>
								</div>
								<header>
									<h2>What is UV radiation?</h2>
								</header>
								<p>Do you want to learn more about UV radiation and its effects?</p>
								<ul class="actions">
									<li><a href="protection.html" class="button">Click Here</a></li>
								</ul>
								
							</section>
							
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; UVProtect. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="get_uv.js"></script>
			<script src="https://d3js.org/d3.v4.min.js"></script>
	</body>
</html>