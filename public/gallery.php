<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

define('__ROOT__', "../App/");
require_once(__ROOT__ . "model/PatientsModel.php");
require_once(__ROOT__ . "controller/PatientController.php");
require_once(__ROOT__ . "View/Patient/ViewUser.php");

session_start();
$model = new Patient($_SESSION["PID"]);
$controller = new PatientsController($model);
$view = new ViewUser($controller, $model);


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Dr. Ahmed Ghoneim</title>
	<!-- Meta tag Keywords -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Dr. Ahmed Ghoniem 's clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="http://localhost/SW/lib/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="http://localhost/SW/lib/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
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
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Gallery</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- gallery -->
	<div class="gallery py-5" id="gallery">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">

				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Gallery</h3>
			</div>
			<div class="gal-pop-style pt-xl-4">
				<div class="row">
					<div class="col-md-4 gal-img">
						<a href="#gal1" title="Dr. Ahmed Ghoniem 's clinic'"><img src="http://localhost/SW/lib/images/patient.jpeg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img my-md-0 my-4">
						<a href="#gal2" title="Dr. Ahmed Ghoniem 's clinic"><img src="http://localhost/SW/lib/images/rokba2.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal3" title="Dr. Ahmed Ghoniem 's clinic"><img src="http://localhost/SW/lib/images/patient2.jpg" alt="gallery" class="img-fluid"></a>
					</div>
				</div>
				<div class="row my-4">
					<div class="col-md-4 gal-img">
						<a href="#gal4" title="Dr. Ahmed Ghoniem 's clinic"><img src="http://localhost/SW/lib/images/train.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img my-md-0 my-4">
						<a href="#gal5" title="Dr. Ahmed Ghoniem 's clinic"><img src="http://localhost/SW/lib/images/rokba.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal6" title="Dr. Ahmed Ghoniem 's clinic"><img src="http://localhost/SW/lib/images/blog2.jpg" alt="gallery" class="img-fluid"></a>
					</div>
				</div>
				<div class="row my-md-0 my-4">
					<div class="col-md-4 gal-img">
						<a href="#gal7" title="Dr. Ahmed Ghoniem 's clinic"><img src="http://localhost/SW/lib/images/blog3.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img my-md-0 my-4">
						<a href="#gal8" title="Dr. Ahmed Ghoniem 's clinic"><img src="http://localhost/SW/lib/images/bg.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal9" title="Dr. Ahmed Ghoniem 's clinic"><img src="http://localhost/SW/lib/images/bg1.jpg" alt="gallery" class="img-fluid"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- popup-->
	<div id="gal1" class="popup-effect">
		<div class="popup">
			<img src="http://localhost/SW/lib/images/patient.jpeg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dr. Ahmed Ghoniem 's clinic</h5>
			<p class="mt-3">This case, patching an entire front cruciate cross, cutting with an inner cartilage, fixing with a variable-length button suspension, thank God, the patch was of appropriate length and thickness, we are preparing 8 strings of 11 mm thickness, but it is always certain that perseverance in rehabilitation and continuous and close follow-up from the surgeon to a year or more It is the most important reasons for the player to return to sports with strength and confidence</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal2" class="popup-effect">
		<div class="popup">
			<img src="http://localhost/SW/lib/images/rokba2.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dr. Ahmed Ghoniem 's clinic</h5>
			<p class="mt-3">prp injection</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal3" class="popup-effect">
		<div class="popup">
			<img src="http://localhost/SW/lib/images/patient2.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dr. Ahmed Ghoniem 's clinic</h5>
			<p class="mt-3">Training can be so effective for recovery.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup3 -->
	<!-- popup-->
	<div id="gal4" class="popup-effect">
		<div class="popup">
			<img src="http://localhost/SW/lib/images/train.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dr. Ahmed Ghoniem 's clinic</h5>
			<p class="mt-3">Training can be so effective for recovery.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal5" class="popup-effect">
		<div class="popup">
			<img src="http://localhost/SW/lib/images/rokba.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dr. Ahmed Ghoniem 's clinic</h5>
			<p class="mt-3">Example of a surgery kan be done.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal6" class="popup-effect">
		<div class="popup">
			<img src="ihttp://localhost/SW/lib/images/blog2.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dr. Ahmed Ghoniem 's clinic</h5>
			<p class="mt-3">Sterlizied kits for a safe operation.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal7" class="popup-effect">
		<div class="popup">
			<img src="http://localhost/SW/lib/images/blog3.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dr. Ahmed Ghoniem 's clinic</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal8" class="popup-effect">
		<div class="popup">
			<img src="http://localhost/SW/lib/images//bg.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dr. Ahmed Ghoniem 's clinic</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal9" class="popup-effect">
		<div class="popup">
			<img src="http://localhost/SW/lib/images//bg1.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dr. Ahmed Ghoniem 's clinic</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- //gallery -->

		<!-- footer -->
		<footer class="py-5">
			<div class="container py-xl-5 py-lg-3">
				<div class="row">
					<div class="col-lg-7 w3l-footer">
						<!-- logo -->
						<div class="logo2">
							<h2>
								<a href="index.php">
									<span class="fa fa-user-md mr-2"></span>
									<span class="logo-sp"></span> Dr. Ahmed Ghoniem Clinic
								</a>
							</h2>
						</div>
						<!-- //logo -->
						<p class="mt-4 text-li">
							Our clinic is specializing in knee and arthroscopic surgeries and knee ligaments only.
							Our mission is to provide best medical services for our Patients.</p>
						<ul class="list-unstyled list-styles mt-lg-5 mt-4">
							<li>
								<p class="text-li"><span class="fa fa-location-arrow mr-2"></span>Dew Tower - Zahraa El Maadi - Thirteenth Sector - Maadi
								Cairo, Egypt</p></p>
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
		<a href="#home" class="move-top text-center"><img alt="Qries" src="/Applications/XAMPP/xamppfiles/htdocs/web/images/move-up.png"></a>
		<!-- //move top icon -->

	</body>

	</html>
