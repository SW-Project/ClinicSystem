<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
define('__ROOT__', "../App/");
require_once(__ROOT__ . "model/PatientsModel.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "model/AppointsModel.php");
require_once(__ROOT__ . "controller/AppointController.php");
require_once(__ROOT__ . "View/Patient/ViewUser.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/SW/App/Database/Db.php");


$model = new Appointments();

$model2 = new Patient($_SESSION["PID"]);
$controller2 = new PatientsController($model);
$controller = new AppointmentController($model);
$view = new ViewUser($controller2, $model2);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Dr. Ahmed Ghoneim</title>
	<!-- Meta tag Keywords -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Be Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="http://localhost/SW/lib/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="http://localhost/SW/lib/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="http://localhost/SW/lib/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main -->
	<div id="home">
		<!-- top header -->
		<header>
	<?php  echo $view->output();?>
	<?php echo $view->topnav();?>
	</header>
		<!-- //top header -->

		<!-- second header -->
	
		<!-- //second header -->

		<!-- banner -->
		<div class="main-banner-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main -->

	<!-- page details -->
	<div class="breadcrumb-agile py-1">
		<ol class="breadcrumb m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="contact-w3l py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-sm-5 mb-4">
				<h6 class="w3ls-title-sub">Get In Touch</h6>
				<h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Contact Us</h3>
			</div>
			<div class="row pt-md-0">
				<div class="col-lg-6 contact-agileits-w3layouts">
					<h4 class="contact-title text-uppercase text-bl mb-sm-4 mb-3">Our Address</h4>
					<h5 class="font-weight-light text-bl">If you have any questions about the services we provide simply use the
						form below. We try and respond to all queries
						and comments within 24 hours.</h5>
					<div class="midd-contact my-xl-5 my-4 pl-4 border-left">
						<h6 class="text-bl mb-2">Address & Direction:</h6>
						<p></p>
					</div>
					<p class="para-agileits-w3layouts">
						<i class="fa fa-map-marker pr-3"></i>Dew Tower - Zahraa El Maadi - Thirteenth Sector - Maadi
						Cairo, Egypt</p>
					<p class="para-agileits-w3layouts my-sm-3 my-2">
						<i class="fa fa-phone pr-3"></i>01150001410</p>
					<p class="para-agileits-w3layouts">
						<i class="fa fa-envelope-open pr-2"></i>
						<a href="mailto:mail@example.com">info 1@example.com</a>
					</p>
				</div>
				<div class="col-lg-6 regstr-r-w3-agileits mt-lg-0 mt-5">
					<h4 class="contact-title text-uppercase text-bl mb-sm-4 mb-3">Get in Touch</h4>
					<div class="form-bg-w3ls">
						<form action="#" method="post">
							<div class="form-group">
								<input type="text" name="Name" class="form-control" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="email" name="Email" class="form-control" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="text" name="Subject" class="form-control" placeholder="Subject" required="">
							</div>
							<div class="form-group">
								<textarea name="Message" class="form-control" placeholder="Message" required=""></textarea>
							</div>
							<button type="submit" class="button-w3layouts btn text-uppercase">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- map -->
	<div class="map p-2">
		<iframe src="https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiXHUwNjM5XHUwNjRhXHUwNjI3XHUwNjJmXHUwNjI5IFx1MDYyN1x1MDY0NFx1MDYzMVx1MDY0M1x1MDYyOFx1MDYyOSBcdTA2NDhcdTA2MjdcdTA2NDRcdTA2MzFcdTA2MjhcdTA2MjdcdTA2MzcgXHUwNjI3XHUwNjQ0XHUwNjM1XHUwNjQ0XHUwNjRhXHUwNjI4XHUwNjRhIiwiYWRkcmVzcyI6Ilx1MDYyOFx1MDYzMVx1MDYyYyBcdTA2MjdcdTA2NDRcdTA2NDZcdTA2MmZcdTA2NDktIFx1MDYzMlx1MDY0N1x1MDYzMVx1MDYyN1x1MDYyMSBcdTA2MjdcdTA2NDRcdTA2NDVcdTA2MzlcdTA2MjdcdTA2MmZcdTA2NGEgLVx1MDYyN1x1MDY0NFx1MDYzNFx1MDYzN1x1MDYzMSBcdTA2MjdcdTA2NDRcdTA2MmJcdTA2MjdcdTA2NDRcdTA2MmIgXHUwNjM5XHUwNjM0XHUwNjMxIC1cdTA2MjdcdTA2NDRcdTA2NDVcdTA2MzlcdTA2MjdcdTA2MmZcdTA2NGEsIENhaXJvLCBFZ3lwdCIsImxhdGl0dWRlIjoyOS45Njk3MDUzMjUwMDUsImxvbmdpdHVkZSI6MzEuMzE1NjI1NTI1MDExLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjE0MDcwMzI4MjkzMTQxODl9?map=29.969705325005,31.315625525011,15,normal&ref=facebook&link=directions&fb_locale=en_GB"
		 allowfullscreen></iframe>
	</div>
	<!-- //map -->

	<!-- footer -->
	<footer class="py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-7 w3l-footer">
					<!-- logo -->
					<div class="logo2">
						<h2>
							<a href="index.html">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp"></span> Dr. Ahmed Ghoniem Clinic
							</a>
						</h2>
					</div>
					<!-- //logo -->
					<p class="mt-4 text-li">Our clinic is specializing in knee and arthroscopic surgeries and knee ligaments only.
					Our mission is to provide best medical services for our Patients.</p>
					<ul class="list-unstyled list-styles mt-lg-5 mt-4">
						<li>
							<p class="text-li"><span class="fa fa-location-arrow mr-2"></span>Dew Tower - Zahraa El Maadi - Thirteenth Sector - Maadi
							Cairo, Egypt</p>
						</li>
						<li class="my-3">
							<p class="text-li"><span class="fa fa-phone mr-2"></span>01150001410</p>
						</li>
						<li>
							<a href="mailto:info@example.com" class="text-wh"><span class="fa fa-envelope-open mr-2"></span>mail@example.com</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-5 w3l-footer mt-lg-0 mt-5">
					<h3 class="mb-sm-4 mb-3 text-wh">Partners</h3>
					<ul class="list-unstyled list-part text-wh pt-lg-3">
						<li><span class="fa fa-500px" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-gg" aria-hidden="true"></span></li>
						<li><span class="fa fa-lastfm" aria-hidden="true"></span></li>
						<li class="mx-4"><span class="fa fa-openid" aria-hidden="true"></span></li>
						<li><span class="fa fa-angellist" aria-hidden="true"></span></li>
					</ul>
					<div class="n-right-w3ls mt-5 pt-lg-4">
						<h3 class="mb-sm-4 mb-3 text-wh">Newsletter</h3>
						<form action="#" method="post">
							<div class="row pt-2">
								<div class="col-8 form-group">
									<input class="form-control" type="email" name="Email" placeholder="Email Address" required="">
								</div>
								<div class="col-4 form-group p-sm-0 pl-0">
									<button class="form-control submit btn font-weight-bold" type="submit">Subscribe</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!-- footer bottom -->
	<!-- copyright -->
	<div class="copy-w3pvt">
		<div class="container py-3">
			<div class="row">
				<div class="col-lg-7 w3ls_footer_grid1_left text-lg-left text-center">
					<p>&copy; 2019 Be Clinic. All rights reserved | Design by
						<a href="http://w3layouts.com/">W3layouts</a>
					</p>
				</div>
				<div class="col-lg-5 w3ls_footer_grid_left1_pos text-lg-right text-center mt-lg-0 mt-2">
					<ul>
						<li>
							<a href="https://www.facebook.com/kneeinjury/" class="facebook">
								<span class="fa fa-facebook-f mr-2"></span>Facebook</a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCWoWydNtA65jsai0wQ0ErrA" class="google">
								<span class="fa fa-youtube mr-2"></span>Youtube</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //copyright -->
	<!-- //footer bottom -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->

</body>

</html>
