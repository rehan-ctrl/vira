<?php session_start(); if(!isset($_SESSION['login'])){header("location:login.php");} ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Vira Advisors</title>
		<link rel="stylesheet" type="text/css" href="style.css?v=6">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<!-- Background video -->
		<div class="video-background-holder">
			<div class="video-background-overlay"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
				<source src="images/video.mp4" type="video/mp4">
			</video>
			<!-- <img src="images/video.gif" style="width: 100%;height: auto;"> -->
			<div class="video-background-content">
				<div class="parent">
					<div class="logo-child">
						<img src="images/logo.png" height="150">
					</div>
				</div>
				<div class="parent">
					<div class="menu-child ts-menu">
						<nav class="menu menu--prospero">
							<ul class="menu__list">
								<li class="menu__item menu__item--current"><a href="#" class="menu__link">Home</a></li>
								<li class="menu__item"><a href="#" class="menu__link">About</a></li>
								<li class="menu__item"><a href="#" class="menu__link">Services</a></li>
								<li class="menu__item"><a href="#" class="menu__link">Our Team</a></li>
								<li class="menu__item"><a href="#" class="menu__link">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<div class="menu-toggle">
						<a href="javascript:void(0)"><i class="fa fa-bars ts-menu"></i></a>
					</div>
				</div>
				<div class="text-left">
					<div class="wrapper">
						<h2 class="w-1">THE <span id="app"></span></h2><br>
						<h2 class="w-2">CORPORATE <br>ADVISORY FIRM</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="little-space"></div>
		<div class="container-fluid">
			<div class="services-section">
				<div class="row">
					<div class="col-md-3">
						<div class="wn-card">
							<div class="">
								<h2 class="theme-color-dark">What's New</h2>
								<div class="space"></div>
								<p class="card-text">
									<div class="holder mrq">
										<ul id="ticker01">
											<li><a href="#"><b>04 Feb, 2020</b> Chapter 4 of Economic Survey 2019-20 Vol II</a></li>
											<li><a href="#"><b>28 Jan, 2020</b> Transfer of Membership from one RVO to another</a></li>
											<li><a href="#"><b>04 Feb, 2020</b> In the matter of RV Registration </a></li>
											<li><a href="#"><b>04 Feb, 2020</b> Constitution of committee for recommending rules and regulatory framework for smooth implementation of proposed cross border Insolvency provisions in the Insolvency and Bankruptcy Code, 2016 </a></li>
											<li><a href="#"><b>04 Feb, 2020</b> IICA invites applications for Graduate Insolvency Programme</a></li>
											<li><a href="#"><b>04 Feb, 2020</b> IBBI (Voluntary Liquidation Process) (Amendment) Regulations, 2020</a></li>
											<li><a href="#"><b>04 Feb, 2020</b>Invitation of application for 6th Advanced Workshop for IPs at Hyderabad on 7th and 8th February, 2020  </a></li>
											<li><a href="#"><b>04 Feb, 2020</b> IBBI (Liquidation Process) (Amendment) Regulations, 2020</a></li>
											<li><a href="#"><b>04 Feb, 2020</b> Order in the matter of Mr. Mukesh Kumar Rathi, Registered Valuer</a></li>
											<li><a href="#"><b>04 Feb, 2020</b> IBBI amends the IBBI (Liquidation Process) Regulations, 2016</a></li>
											<li><a href="#"><b>04 Feb, 2020</b> The Insolvency and Bankruptcy Code (Amendment) Ordinance, 2019 </a></li>
										</ul>
									</div>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="offset-md-1 col-md-10">
								<div class="text-center">
									<h2 class="theme-color-dark">BUSINESS VALUATION</h2>
								</div>
								<div class="space"></div>
								<p align="justify">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam phasellus vestibulum lorem sed risus. Aenean et tortor at risus. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Risus feugiat in ante metus dictum at tempor. Malesuada fames ac turpis egestas sed tempus urna et. Eget nunc lobortis mattis aliquam faucibus. Massa placerat duis ultricies lacus sed turpis tincidunt. Volutpat sed cras ornare arcu dui vivamus. Pretium fusce id velit ut. Risus quis varius quam quisque id. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc.
								</p>
								<p>
									Eu facilisis sed odio morbi. Amet venenatis urna cursus eget nunc. Morbi tristique senectus et netus et malesuada fames. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Ut sem viverra aliquet eget sit amet tellus cras. Mattis aliquam faucibus purus in. Aenean et tortor at risus viverra adipiscing at in.
								</p>
								<div class="little-space"></div>
								<div class="text-center">
									<h3 class="theme-color-dark">SERVICES</h3>
								</div>
								<?php function _list($image,$title){return "<li class='list-inline-item services'><div class='text-center'><a href='#' class='theme-color-dark'><img src=".$image." height='100'><br><div class='text-center'>".$title."</a><div></li>";} ?>
								<div class="text-center">
									<ul class="list-inline">
										<div class="row">
											<div class="col-md-3">
												<?php echo _list('images/IPO.png', "Initial Public Offering \n (IPO)"); ?>
											</div>
											<div class="col-md-2">
												<?php echo _list('images/Buybacks.png', 'Buybacks'); ?>
											</div>
											<div class="col-md-2">
												<?php echo _list('images/Open-Offers.png', 'Open Offers'); ?>
											</div>
											<div class="col-md-2">
												<?php echo _list('images/Valuation.png', 'Valuation'); ?>
											</div>
											<div class="col-md-3">
												<?php echo _list('images/Private-Equity-Syndication.png', 'Private Equity Sydication'); ?>
											</div>
										</div>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="little-space"></div>
			<div class="little-space"></div>
		</div>
		<!-- Footer -->
		<section id="footer">
			<div class="container-fluid">
				<div class="row text-center text-xs-center text-sm-left text-md-left">
					<div class="col-xs-12 col-sm-3 col-md-3">
						<ul class="list-unstyled">
							<li><a href="javascript:void();"><img src="images/logo-black.png" height="150"></a></li>
							<li>
								<div class="mt-sm-3">
									<ul class="list-unstyled list-inline social">
										&nbsp;<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
										<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
										<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
						<h5>Services</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="javascript:void();">Initial Public Offering(IPO)</a></li>
							<li><a href="javascript:void();">Paybacks</a></li>
							<li><a href="javascript:void();">Open Offers</a></li>
							<li><a href="javascript:void();">Valuation</a></li>
							<li><a href="javascript:void();">Private Equity Indication</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
						<h5>Address</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="javascript:void();">XYZ</a></li>
							<li><a href="javascript:void();">ABC Lane</a></li>
							<li><a href="javascript:void();">Address Street, Area</a></li>
							<li><a href="javascript:void();">Area Address</a></li>
							<li><a href="javascript:void();">City - ######</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3">
						<h5>Contact Us</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="javascript:void();"></a></li>
							<li><a href="javascript:void();">About</a></li>
							<li><a href="javascript:void();">About</a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</section>
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<div class="copyright">
						Design by <span><a href="https://www.cassixcom.com"><img src="https://cassixcom.com/images/cassixcom-blue.png" height="50"></a></span>
					</div>
				</div>
			</div>
		</div>
		<!-- ./Footer -->
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.0/SmoothScroll.min.js"></script>
		<script src="https://www.jqueryscript.net/demo/High-Performance-Background-Parallax-Effect-with-jQuery-CSS3-jarallax/jarallax/jarallax.js"></script>
		<script src="assets/js/jquery.kxbdmarquee.js"></script>
		<script src="assets/js/typewriter.js"></script>
		<script src="custom.js?v=8"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</body>
</html>